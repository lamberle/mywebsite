<?php

$data = NULL;

class Controller {

	public function __construct() {

	}

	public function render($view, $d=null,$full=true) {
		global $data;
		include_once "view/header.php";

		$controller = get_class($this);
		$model = substr($controller, 0, 
			        strpos($controller, "Controller"));
		$data = $d;
		include_once "view/".strtolower($model)."/".$view.".php";
		if($full)
			include_once "view/footer.php";
	}

}

