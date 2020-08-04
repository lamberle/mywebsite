<?php

class Image extends Model {

	protected $_image_id;
	protected $_image_title;
	protected $_image_url;
	protected $_image_preview_url;
	protected $_image_description;

	public function delete() {
		$sql = "delete from `image` where image_id=".$this->image_id;
		if(!mysql_query($sql)) {
			throw new Exception();
		}
		$sql = "delete from `album_image` where image_id=".$this->image_id;
		if(!mysql_query($sql)) {
			throw new Exception();
		}
		if($this->image_url != "ressources/dummy.png") {
			unlink($this->image_url);
			unlink($this->image_preview_url);
		}
	}
}