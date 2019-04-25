<?php
class Utama{

	Public function ambilLink(){

		if(isset($_GET['BA'])){ //mengatur Variabel G setiap folder

			$link = $_GET['BA'];

			if(empty($link)){

				include_once $this->callCtrl('index');
				include_once $this->viewLink('index');
			} elseif ($link == 'out') {
				session_destroy();
				header("location: ?");
			} else {

				$controller = 'BA_controller/' . ucfirst($link). 'View.php';

				if(file_exists($controller)){

					include_once $controller;
				} else {

					include_once $this->callCtrl('error');
				}
			}
		} else {

			include_once $this->callCtrl('index');
		}
	}

	private function callCtrl($ctrl = NULL) {

		return 'BA_controller/' . ucfirst($ctrl) . 'View.php';
	}
}

session_start();

$utama = new Utama();
$link = $utama->ambilLink();

//phpinfo();