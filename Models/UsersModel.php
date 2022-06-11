<?php 

class User{


	static public function createUser($data){
		$stmt = DB::connexion()->prepare('INSERT INTO user (full_name,password)
			VALUES (:full_name,:password)');
		$stmt->bindParam(':full_name',$data['full_name']);
		$stmt->bindParam(':password',$data['password']);
		if($stmt->execute()){
			return 'ok';
		}else{
			return 'error';
		}
	}

}

 ?>