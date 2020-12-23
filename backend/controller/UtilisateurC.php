<?php
	
require_once "../config.php";
	require_once '../model/Utilisateur.php';


	class UtilisateurC {
		
		function ajouterUtilisateur($Utilisateur){
			$sql="INSERT INTO user (name, firstname,email, password) 
			VALUES (:name,:firstname,:email,:password)";
			$db = config::getConnexion();
			try{
				$query = $db ->prepare($sql);
			
				$query->execute([
					'name' => $Utilisateur->getName(),
					'firstname' => $Utilisateur->getFirstname(),
					'email' => $Utilisateur->getEmail(),
					'password' => $Utilisateur->getPassword()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
	
	function afficherUtilisateurs(){
			
		$sql="SELECT * FROM user ";
		$db = config::getConnexion();
		try{
			$liste = $db->query($sql);
			return $liste;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}	
	}
	function recupererUtilisateur($id){
		$sql="SELECT * from user where id=$id";
		$db = config::getConnexion();
		try{
			$query=$db->prepare($sql);
			$query->execute();

			$user=$query->fetch();
			return $user;
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function supprimerUtilisateur($id){
		$sql="DELETE FROM user WHERE id= :id";
		$db = config::getConnexion();
		$req=$db->prepare($sql);
		$req->bindValue(':id',$id);
		try{
			$req->execute();
		}
		catch (Exception $e){
			die('Erreur: '.$e->getMessage());
		}
	}
	function modifierUtilisateur($Utilisateur, $id){
		try {
			$db = config::getConnexion();
			$query = $db->prepare(
				'UPDATE user SET 
					name = :name, 
					firstname = :firstname,
					email = :email,
					
					password = :password
				WHERE id = :id'
			);
			$query->execute([
				'name' => $Utilisateur->getName(),
				'firstname' => $Utilisateur->getFirstname(),
				'email' => $Utilisateur->getEmail(),
				'password' => $Utilisateur->getPassword(),
				'id' => $id
			]);
			echo $query->rowCount() . " records UPDATED successfully <br>";
		} catch (PDOException $e) {
			$e->getMessage();
		}
	}
}

?>