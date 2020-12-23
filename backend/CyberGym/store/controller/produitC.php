<?PHP
	require_once "../config.php";
	require_once '../model/produit.php';

	class produitC {
		
		function afficherProduit(){
			
			$sql="SELECT * FROM products";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function recupererProduit($id){
			$sql="SELECT * from products where id=$id";
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
		function choseCategory($nom) {
            $sql="SELECT * FROM products WHERE category = '$nom'";
            $db = config::getConnexion();
            try{
                $liste = $db->query($sql);
                return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            } 
        }
	}

?>