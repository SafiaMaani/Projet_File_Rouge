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
				'telephone' => $_POST['telephone'],
				'adresse' => $_POST['adresse'],
				'role' => 'client'
			);
			$result = UsersModel::createUser($data);
			if ($result === 'ok') {
				Redirect::to('SignIn');
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
				$_SESSION['id_user'] = $result->id_user;
				$_SESSION['email'] = $result->email;
				$_SESSION['full_name'] = $result->full_name;
				$_SESSION['password'] = $result->password;
				$_SESSION['adresse'] = $result->adresse;
				$_SESSION['telephone'] = $result->telephone;

				if ($result->role === 'admin') {
					$_SESSION['role'] = 'admin';
					Redirect::to('Dashboard');
				} else {
					$_SESSION['role'] = 'client';
					Redirect::to('Profile');
				}
			} else {
				Redirect::to('SignIn');
			}
		}
	}
	static public function logout(){
		session_destroy();
	}
}
