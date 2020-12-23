

<html>
<head>
<link rel="stylesheet" href="test.css">


  <meta charset="UTF-8">
<title>offres</title>
<h1>Les Offres</h1>

<style>
div.search {
  text-align: center;
}
</style>
</head>
<body>


    <?php require_once 'config2.php';?>
    
    <div class="container">
    <?php
      $mysqli=new mysqli('localhost','root','','gym') or die (mysqli_error($mysqli));
      $result=$mysqli->query("SELECT * FROM type_abonnement") or die ($mysqli->error);
       
       ?>
       
       <div class="container">
   <div class="row">
   <div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
   <div class="row">
   <?php 

$conn = new mysqli('localhost', 'root', '', 'gym');
if(isset($_GET['search'])){
   $searchKey = $_GET['search'];
   $sql = "SELECT * FROM type_abonnement WHERE Durée LIKE '%$searchKey%'";
   
}else
$sql = "SELECT * FROM type_abonnement";
$result = $conn->query($sql);
?>
<form action="" method="GET"> 
     <div class="col-md-6">
        <input type="text" name="search" class='form-control' placeholder="Search..." maxlength="50" size="40"  value=<?php echo @$_GET['search']; ?> > 
     
      <button class="btn btn-success">Search</button>
     </div>
   </form>

</div>
<?php 

//$conn = new mysqli('localhost', 'root', '', 'gym');

                   

while ($row=$result->fetch_assoc()): ?>
<div class="snip1265">
        <div class="plan">
          <header><i class="ion-ios-navigate-outline"></i>
            <a href="img/gallery/gallery-1.jpg" ></a>
            <h4 class="plan-title" >
            <?php echo $row ['Durée']; ?>
              
            </h4>
            <div class="plan-cost"><span class="plan-price" ><?php echo $row ['tarifsAbo']; ?> </span><span class="plan-type">/MOIS</span></div>
          </header>
          <ul class="plan-features">
              
            <li>
                <?php echo $row ['descriptionAbo']; ?>

            </li>
            <li>
                <?php echo $row ['descriptionAbo2']; ?>

            </li>
            <li>
            <?php echo $row ['descriptionAbo3']; ?>
            </li>
            <li>
            <?php echo $row ['descriptionAbo4']; ?>
            </li>
            
            </ul>
          <div class="plan-select"><a href="ajout.php">ACHETER</a></div>
        </div>




<?php endwhile; ?>
</table>
</div>


       
    

    

        


</form>
</body>
</div>
</html>

