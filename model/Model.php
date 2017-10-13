<?php

class Model{
	public function getlogin(){
		if(isset($_REQUEST['username']) && isset($_REQUEST['password'])){
			$insert = $conn->prepare("select * from admins where username = (:username) AND password = (:password)");
			$insert->bindParam(':username',$_REQUEST['username']);
			$insert->bindParam(':password',$_REQUEST['password']);

			$insert->execute();

			if($insert->fetchColumn()>0){
				if($insert['admin_level']==0){        //Admin level 0 for the Super-Admin / Main-Admin
					return 'Super-Admin';
				}
				else{								  //Admin level 1 for CTMs 
					return 'CTM';
				}

			}

			else{
				return 'wrong credentials';
			}	

		}

	}

}

?>