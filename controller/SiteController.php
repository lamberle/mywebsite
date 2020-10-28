<?php

class SiteController extends Controller {

	public function __construct()  {

	}

	

	public function index() {
		$this->render("index");
	}

	public function resume() {
		$this->render("resume");
	}
	public function register() {
		if(isset(parameters()['register'])) {
			if(!empty(parameters()['pseudo']) && !empty(parameters()['email']) && !empty(parameters()['password'])) {
				$user = new User();
				$user->user_pseudo = parameters()['pseudo'];
				$user->user_email = parameters()['email'];
				$user->user_password = md5(parameters()['password']);
			}
			$_SESSION["user"] = $user;
			$this->index();
		} else {
			$this->render("register");
		}
	}

	public function login() {
		if(isset(parameters()['login'])) {
			if(!empty(parameters()['email']) && !empty(parameters()['password'])) {
				$user = User::findBySelection("where `user_email`='".parameters()['email']."' and `user_password`='".md5(parameters()['password'])."';");
				if(count($user) == 1) {
					$user = $user[0];
					$_SESSION["user"] = $user;
					$this->index();
				} else {
					infobulle($msg = "Couldn't login to your account, make sure you already have an account and that your credentials are correct");
					$this->render("login");
				}
			} else {
				$this->render("login");
			}
		} else {
			$this->render("login");
		}
	}

	public function logout() {
		unset($_SESSION["user"]);
		$this->index();
	}
}


