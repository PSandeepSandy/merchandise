<?php
	function call($controller,$action){
		require_once('controller/'.$controller.'_controller.php');

		switch($controller){
			case('login'):
				$controller = new Logincontroller();
				break;
			case('loggedin'):
				$controller = new Loggedincontroller();
				break;
			}
		$controller->{$action}();
							

	}

	$controllers = array('login' => ['invoke','error'],
						'loggedin' => ['home','error']);

	if(array_key_exists($controller, $controllers)){
		if(in_array($action, $controllers[$controller])){
			call($controller,$action);
		}
		else{
			call($controller,'error');
		}
	}
	else{
		call($controller,'error');
	}	



?>