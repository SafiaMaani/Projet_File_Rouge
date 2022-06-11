<?php 

class UsersController {

	public function register(){
		if(isset($_POST['submit'])){
			
			$password = $_POST['password'];
			$data = array(
				'full_name' => $_POST['full_name'],
				'password' => $password,
			);
			$result = User::createUser($data);
			if($result === 'ok'){
				header('Location:SignIn');
			}else{
				echo $result;
			}
		}
	}

	

}