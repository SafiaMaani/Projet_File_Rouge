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

			if ($result->email === $_POST['email'] && $result->password === $_POST['password']) {

				$_SESSION['logged'] = true;
				$_SESSION['email'] = $result->email;
				$_SESSION['full_name'] = $result->full_name;
				$_SESSION['password'] = $result->password;
				$_SESSION['adresse'] = $result->adresse;
				$_SESSION['telephone'] = $result->telephone;
				$_SESSION['role'] = $result->role;

				if ($result->role === 'admin') {
					$_SESSION['role'] = 'admin';
					header('Location:Dashboard');
				} else {
					$_SESSION['role'] = 'client';
					header('Location:Profile');
				}
			} else {
				header('Location:SignIn');
			}
		}
	}
	static public function logout(){
		session_destroy();
	}
}
