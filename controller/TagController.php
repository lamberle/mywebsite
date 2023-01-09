<?php
class AlbumController extends Controller {
	public function index() {
		if(!is_admin()){
			SiteController()->index();
		}
		elif(isset(parameters()['add_tag'])) {
			if(isset(parameters()['tag_name'])) {
				$t = new Tag();
				$t->album_title = parameters()['album_title'];
			}
		}
		$albums = Album::findAll();
		$this->render("index",$albums);
	}
	public function view() {
		if(isset(parameters()['add_image'])) {
			$album = new Album(parameters()['album_id']);
			$album->addImage(parameters()['image_id']);
		}
		if(isset(parameters()['idalbum'])) {
			$album = new Album(parameters()['idalbum']);

			$this->render("view",$album);
		} else
			$this->index();
	}
}