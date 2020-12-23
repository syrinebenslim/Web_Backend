<?PHP
	require_once "../config.php";
	require_once '../model/category.php';

	class categoryC {
		function ajouterCategory($category){
			$sql="INSERT INTO category (idProd, categoryProd, descCategory) 
			VALUES (:idProd,:categoryProd,:descCategory)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'idProd' => $category->getIdProd(),
					'categoryProd' => $category->getCategory(),
					'descCategory' => $category->getDescription(),
					]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
	}
?>