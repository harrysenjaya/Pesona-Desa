<?php
	$url = $_SERVER['REDIRECT_URL'];
	$baseURL= '/pesona-desa';
	if($_SERVER["REQUEST_METHOD"]=="GET"){
		switch ($url){
			case $baseURL."/home":
				require_once "Controller/frontpageController.php";
				$frontpage = new FrontpageController();
				echo $frontpage ->start();
				break;
			case $baseURL."/stay":
				require_once "Controller/stayController.php";
				$stay = new stayController();
				echo $stay -> start();
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
			default:
				echo '404 not found';
				break;
		}
	}
?>