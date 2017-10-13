<?php
	include('model/Model.php');

	class Logincontroller{
		
		public $model;

		public function __construct(){
			$this->model = new Model();
		}


		public function invoke(){
			$reslt = $this->model->getlogin(); 

			if($reslt == 'Super-Admin'){
				include '../view/LoggedinSuper-Admin.php';
			}

			else if($reslt == 'CTM'){
				include '../view/LoggedinCTM.php';
			}

			else{
				include 'view/login.php';
			}
		
		}

		public function error(){
			require_once('../view/error.php');
		}

	}


?>