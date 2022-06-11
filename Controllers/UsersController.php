<?php

class UsersController
{
	public function register()
	{
		if (isset($_POST['submit'])) {

			$data = array(
				'full_name' => $_POST['full_name'],
				'password' => $_POST['password'],
				'email' => $_POST['email'],
				'role' => 'client'
			);
			$result = UsersModel::createUser($data);
			if ($result === 'ok') {
				header('Location:SignIn');
			} else {
				echo $result;
			}
		}
	}
	public function signIn()
	{
		if (isset($_POST['submit'])) {
			$data = array(
				'password' => $_POST['password'],
				'email' => $_POST['email']
			);

			$result = UsersModel::login($data);

			echo '<pre>';
			var_dump($result);
			echo $result->email;
			echo '</pre>';

			if ($result->email === $_POST['email'] && $_POST['password'] === $result->password) {

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				// Redirect::to('home');
				header('Location:Profile');
			} else {
				// Session::set('error','Pseudo ou mot de passe est incorrect');
				// Redirect::to('login');
				// header('Location:SignIn');
				echo 'WHAT THE FUCK IS GOING ON';	
			}
		}
	}
}
