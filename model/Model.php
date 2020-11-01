<?php

// Classe métier générique à accès BD automatique
// ToDo : non duplication des instances de classes liées
// ToDo : modèle hiérarchique

class Model {

	// Un appel au constructeur sans id créées une instance et une ligne dans la db
	public function __construct($id=null) {
		$class = get_class($this);
		$table = strtolower($class);
		if ($id == null) {
			
			$sql = "insert into `$table` () values ()";
			$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
			$sql = "select max($table"."_id) as $table"."_id from `$table`";
			$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
			$row = db_fetch_assoc($st);
			$field = $table."_id";
			$this->$field = $row[$field];
		} else {
			
			$sql = "select * from `$table` where $table"."_id=$id";
			$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());

			if (db_num_rows($st) != 1) {
				throw new Exception("Not in table: ".$table." id: ".$id );
			} else {
				
				$row = db_fetch_assoc($st);
				foreach($row as $field=>$value) {
					if($field == $table."_id") {
						$id = $table."_id";
						$this->$id = $value;
					}	else	
					
					if (substr($field, strpos($field,"_")+1,2) == "id") {
						
						$linkedField = substr($field,strpos($field,"_")+3);
						$linkedClass = ucfirst($linkedField);
						if ($linkedClass != get_class($this)){
							if($value != null) {
								$this->$linkedField = new $linkedClass($value);
							}
							else
								$this->$linkedField = null;
						}
						else
							$this->$field = $value;
					} else
						$this->$field = $value;
				}
			}
		}

	}

	public static function findAll($orderby = "") {
		$class = get_called_class();
		$table = strtolower($class);
		$sql = "select $table"."_id from `$table` $orderby";
		$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());

		$list = array();
		while($row = db_fetch_assoc($st)) {
			$list[] = new $class($row[$table."_id"]);
		}
		return $list;
	}
	public static function findBySelection($condition, $distinct=true) {
		$class = get_called_class();
		$table = strtolower($class);
		$sql = "select $table"."."."$table"."_id from $table ".$condition;
		if($distinct)
			$sql = "select distinct $table"."."."$table"."_id from `$table` ".$condition;
		$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
		$list = array();
		while($row = db_fetch_assoc($st)) {
			$list[] = new $class($row[$table."_id"]);
		}
		return $list;
	}
	public static function count($option = "") {
		$class = get_called_class();
		$table = strtolower($class);
		$sql = "select count(*) as nb from `$table` ".$option;
		$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
		return db_fetch_assoc($st)['nb'];
	}
	
	
	public static function findById($id) {
		$class = get_called_class();
		$table = strtolower($class);
		$sql = "select $table"."_id from `$table` where $table"."_id=".$id;
		$st = db_query($sql);
		if(!($st = db_query($sql)))
							throw new Exception("Erreur sql : ".$sql);
		return new $class(db_fetch_assoc($st)[$table."_id"]);
	}


	public function __get($fieldName) {
		$varName = "_".$fieldName;

		if (property_exists(get_class($this), $varName)){
			if(is_string($this->$varName))
				return str_replace("''","'",$this->$varName);
			else
				return $this->$varName;
				
		}
		else
			throw new Exception("Unknown variable: ".$fieldName);
	}


	public function __set($fieldName, $value) {
		$varName = "_".$fieldName;
		if ($value !== null) {
			if(is_string($value))
				$value = str_replace("'","''",$value);
			if (property_exists(get_class($this), $varName)) {
				$this->$varName = $value;
				$class = get_class($this);
				$table = strtolower($class);
				$id = $fieldName."_id";
				$idtable = $table."_id";
				if (is_object($value)) {
					$sql = "update `$table` set $table"."_id$fieldName=".$value->$id." where $table"."_id=".$this->$idtable;
					db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
				} else {
					$id = $table."_id";
					
					if(is_numeric($value)) {
						
						$sql = "update `$table` set $fieldName=$value where $table"."_id=".$this->$id;
					} else
						if(!is_array($value)) {
							$sql = "update `$table` set $fieldName='$value' where $table"."_id=".$this->$id;		
						}
						if(isset($sql))
							if(!db_query($sql))
								throw new Exception("Erreur sql : ".$sql);
				}
				$id = "id".$table;
			} else
				throw new Exception("Unknown variable: ".$fieldName);
		}
	}
	public function delete() {
		$class = get_called_class();
		$table = strtolower($class);
		$id=$table."_id";
		$sql = "delete from `$table` where $table"."_id=".$this->$id;
		if(!db_query($sql)) {
			throw new Exception();
		}
	}
	public static function deleteAll() {
		$class = get_called_class();
		$table = strtolower($class);
		$sql = "delete from `$table` where 1";
		if(!db_query($sql)) {
			throw new Exception();
		}
	}
	// à surcharger
	public function __toString() {
		return get_class($this).": ";
	}




}



