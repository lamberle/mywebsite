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
	public function getTagsString() {
		$tags = $this->getTags();
		$tags_str = "";
		foreach($tags as $tag) {
			$tags_str = $tags_str.$tag->tag_name.";";
		}
		return $tags_str;
	}
	public function addTag($tag_id) {
		$tag = db_query("select * from tag_image where `tag_id`=".$tag_id." and `image_id`=".$this->image_id) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
		$list = array();
		while($row = db_fetch_assoc($tag)) {
			$list[] = $row["tag_image_id"];
		}
		var_dump($list);
		if(count($list) == 0) {
			$sql = "insert into tag_image(`image_id`,`tag_id`) values (".$this->image_id.",".$tag_id.")";
			$st = db_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.db_error());
		}
	}
	public function addTags($tags) {
		$this->deleteTags();
		foreach(explode(";", $tags) as $t) {
			$t = trim($t);
			if ($t != "") {
				$tag = Tag::findBySelection("where tag_name='".$t."'");
				if (count($tag) == 0) {
					$tag = new Tag();
					$tag->tag_name = $t;
				} else {
					$tag = $tag[0];
				}
				$this->addTag($tag->tag_id);
			}
		}
	}

	public function deleteTags() {
		$sql = "delete from `tag_image` where image_id=".$this->image_id;
		if(!db_query($sql)) {
			throw new Exception();
		}
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