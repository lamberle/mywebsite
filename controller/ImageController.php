<?php
class ImageController extends Controller {
	public function index($images = NULL) {
		if(isset(parameters()['delete_images'])) {
			foreach (parameters()['images_selector'] as $image_id) {
				$image = new Image($image_id);
				$image->delete();
			}
		}
		if(isset(parameters()['add_to_album'])) {
			$album = new Album(parameters()['album_selector']);
			foreach (parameters()['images_selector'] as $image_id) {
				$album->addImage($image_id);
			}
		}
		if (is_null($images)) {
			$images = Image::findBySelection("order by image_id DESC");
		}
		if(isset(parameters()["mode"]) && parameters()["mode"] == "display") {
			$this->render("index_big",$images);
		} else {
			if(is_admin()) {
				$this->render("index",$images);
			} else {
				$this->render("index2",$images);
			}
		}
	}
	public function view() {
		if(isset(parameters()['idalbum'])) {
			$album = new Album(parameters()['idalbum']);

			$this->render("view",$album);
		} else
			$this->index();
	}
	public function add() {
		if(isset($_FILES['image_url'])) {
		     $dossier = 'ressources/';
		     $files = reArrayFiles($_FILES['image_url']);
		     $images = array();
		     foreach($files as $file) {
			     $fichier = basename($file['name']);
			     $path = $dossier . "images/" . $fichier;
			     $preview = "./".$dossier . "previews/" . $fichier;
			     if(file_exists($path)){
					infobulle($msg = 'Image already exists');
			     } else if(move_uploaded_file($file['tmp_name'], $path)) //Si la fonction renvoie TRUE, c'est que ça a fonctionné...
			     {
			          $image = new Image();
			          $image->image_title = $fichier;
			          $image->image_description = "";
			          $image->image_url = $path;
			          image_resize($path, $preview, 500, 500, 0);
			          $image->image_preview_url = $preview;
			          $images[] = $image;
			     }
			     else //Sinon (la fonction renvoie FALSE).
			     {	
			        infobulle($msg = 'Echec de l\'upload !');
			     }
			 }
			 if(count($images) > 0) {
			 	$this->edit($images);
			 } else {
			 	$this->index();
			 }
		} else {
			$this->index();
		}

	}
	public function edit($images = NULL) {
		if(isset(parameters()['edit_images'])) {
			$images = array();
			for ($i = 0; $i < count(parameters()["image_id"]); $i++) {
				$image = new Image(parameters()["image_id"][$i]);
				$image->image_title = parameters()["image_title"][$i];
				$image->image_description = parameters()["image_description"][$i];
				$image->addTags(parameters()["tags"][$i]);
				$images[] = $image;
			}
			$this->index();
		} else {
			if (is_null($images)) {
				$images = Image::findAll();
			}
			$this->render("edit", $images);
	}
	}
}