<?PHP
	include "../controller/UtilisateurC.php";

	$utilisateurC = new UtilisateurC();
	listeUsers=$utilisateurC->afficherUtilisateurs();
	
	if (isset($_POST["id"])){
		$utilisateurC->supprimerUtilisateur($_POST["id"]);
		header('Location:viewusers.php');
	}

?>