<?php

class Tag extends Model {

	protected $_tag_id;
	protected $_tag_name;


	public function delete() {
		$sql = "delete from `tag` where tag_id=".$this->tag_id;
		if(!db_query($sql)) {
			throw new Exception();
		}
	}
	public function getImages() {
		$sql = "select image_id from tag_image where tag_id = ".$this->tag_id;
		$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
		$list = array();
		while($row = db_fetch_assoc($st)) {
			$list[] = new Image($row["image_id"]);
		}
		return $list;
	}
}