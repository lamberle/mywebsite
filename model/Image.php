<?php

class Image extends Model {

	protected $_image_id;
	protected $_image_title;
	protected $_image_url;
	protected $_image_preview_url;
	protected $_image_description;

	public function getTags() {
		$sql = "select tag_id from tag_image where image_id = ".$this->image_id;
		$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
		$list = array();
		while($row = db_fetch_assoc($st)) {
			$list[] = new Tag($row["tag_id"]);
		}
		return $list;
	}

	public function delete() {
		$sql = "delete from `image` where image_id=".$this->image_id;
		if(!db_query($sql)) {
			throw new Exception();
		}
		$sql = "delete from `album_image` where image_id=".$this->image_id;
		if(!db_query($sql)) {
			throw new Exception();
		}
		$sql = "delete from `tag_image` where image_id=".$this->image_id;
		if(!db_query($sql)) {
			throw new Exception();
		}
		if($this->image_url != "ressources/dummy.png") {
			unlink($this->image_url);
			unlink($this->image_preview_url);
		}
	}
}