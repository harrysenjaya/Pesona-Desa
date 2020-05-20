<?php
	session_start();
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL= '/pesona-desa';
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		switch ($url){
			case $baseURL."/home":
				require_once "Controller/frontpageController.php";
				$frontpage = new FrontpageController();
				echo $frontpage ->start();
				break;
			case $baseURL."/login":
				require_once "Controller/userController.php";
				$login = new userController();
				echo $login -> start();
				break;
			case $baseURL."/profile":
				require_once "Controller/userController.php";
				$profile = new userController();
				echo $profile -> start();
				break;
			case $baseURL."/stay":
				require_once "Controller/stayController.php";
				$stay = new stayController();
				echo $stay -> start();
				break;	
			case $baseURL."/experience":
				require_once "Controller/experienceController.php";
				$experience = new experienceController();
				echo $experience -> start();
				break;	
			case $baseURL."/stays":
				require_once "Controller/stayController.php";
				$experience = new stayController();
				echo $experience -> detail();
				break;	
			case $baseURL."/experiences":
				require_once "Controller/experienceController.php";
				$experience = new experienceController();
				echo $experience -> detail();
				break;	
			case $baseURL.'/logout':
				session_destroy();
				header('Location: home');
				break;
			default:
				echo '404 not found';
				break;
		}
	}
	else if($_SERVER["REQUEST_METHOD"]=="POST"){
		switch ($url){
			case $baseURL.'/login':
                require_once "controller/userController.php";
                $userCtrl = new UserController();
                $userCtrl->login();
				break;
			case $baseURL.'/book':
				require_once "controller/stayController.php";
				$stay = new stayController();
				echo $stay -> book();
				break;
			default:
				echo '404 not found';
				break;
		}
	}
?>