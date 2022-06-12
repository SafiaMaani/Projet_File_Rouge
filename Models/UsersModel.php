<?php 

class UsersModel{
	static public function createUser($data){
		$stmt = DB::connexion()->prepare('INSERT INTO user (full_name,password,email,role,telephone,adresse) VALUES (:full_name,:password,:email,:role,:telephone,:adresse)');
		$stmt->bindParam(':full_name',$data['full_name']);
		$stmt->bindParam(':password',$data['password']);
		$stmt->bindParam(':email',$data['email']);
		$stmt->bindParam(':role',$data['role']);
		$stmt->bindParam(':telephone',$data['telephone']);
		$stmt->bindParam(':adresse',$data['adresse']);

		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
	}
	static public function login($data){
		$email = $data['email'];
		try{
			$stmt = DB::connexion()->prepare('SELECT * FROM user WHERE email=:email');
			$stmt->execute(array(":email" => $email));
			$user = $stmt->fetch(PDO::FETCH_OBJ);
			return $user;
		}catch(PDOException $ex){
			echo 'erreur' . $ex->getMessage();
		}
	}

}
