<?PHP
	require_once "../config.php";
	require_once '../model/category.php';

	class categoryC {

		function afficherCategory(){
			
			$sql="SELECT * FROM category";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function choseCategory($category) {
            $sql="SELECT * FROM products ='$category'";
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