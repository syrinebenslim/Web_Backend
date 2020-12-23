<?PHP
	include "../config.php";
	require_once '../Model/produit.php';

	class produitC {
		
		function ajouterProduit($produit){
			$sql="INSERT INTO products (name, description, price, quantity, category, image) 
			VALUES (:name,:description,:price, :quantity, :category, :image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'name' => $produit->getName(),
					'description' => $produit->getDescription(),
					'price' => $produit->getPrice(),
					'quantity' => $produit->getQuantity(),
					'category' => $produit->getCategory(),
					'image' => $produit->getImage()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
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
		function supprimerProduit($id){
			$sql="DELETE FROM products WHERE id= :id";
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
		function modifierProduit($produit, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE products SET 
						name = :name, 
						description = :description,
						price = :price,
						quantity = :quantity,
						category = :category,
						image = :image
					WHERE id = :id'
				);
				$query->execute([
					'name' => $produit->getName(),
					'description' => $produit->getDescription(),
					'price' => $produit->getPrice(),
					'quantity' => $produit->getQuantity(),
					'category' => $produit->getCategory(),
					'image' => $produit->getImage(),
					'id' => $id
				]);
			} catch (PDOException $e) {
				$e->getMessage();
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
	}

?>