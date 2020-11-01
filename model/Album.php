<?php



class Album extends Model {

	protected $_album_id;
	protected $_album_title;
	protected $_album_description;
	public function getImages() {
		$sql = "select image_id from album_image where album_id = ".$this->album_id." order by album_image_index";
		$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
		$list = array();
		while($row = db_fetch_assoc($st)) {
			$list[] = new Image($row["image_id"]);
		}
		return $list;
	}
	public function addImage($image_id) {
		$im = db_query("select * from album_image where `image_id`=".$image_id." and `album_id`=".$this->album_id) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
		$list = array();
		while($row = db_fetch_assoc($im)) {
			$list[] = $row["album_image_id"];
		}
		var_dump($list);
		if(count($list) == 0) {
			$sql = "insert into album_image(`album_id`,`image_id`,`album_image_index`) values (".$this->album_id.",".$image_id.",0)";
			$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
		}
	}
}