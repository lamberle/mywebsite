<?php
class AlbumController extends Controller {
	public function index() {
		if(isset(parameters()['add_album'])) {
			if(isset(parameters()['album_title']) && isset(parameters()['album_description'])) {
				$a = new Album();
				$a->album_title = parameters()['album_title'];
				$a->album_description = parameters()['album_description'];
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