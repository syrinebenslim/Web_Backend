

<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>PHP</title>
    <style>
        
table {
  position: relative;
  left:90;
  right: 0;
  width: 400px;
}
div.navbar-form navbar-right {
  position: relative;
  left:500;
  right: 0;
  width: 400px;
}
<?php require_once 'config2.php';?>

</style>

</head>
<body>
<div>
<?php require_once 'aaaa.php';?>

</div>


</div>

</script>
    <?php
    if (isset($_SESSION['message'])):?>
    <div class="alert alert<?p=$_SESSION['msg_type']?>">
    <?php
    echo $_SESSION['message'];
    unset ($_SESSION['message']);
    ?>
    </div>
        <?php endif ?>
    <div class="container">
        
   


    
   <?php 

$conn = new mysqli('localhost', 'root', '', 'gym');
if(isset($_GET['search'])){
   $searchKey = $_GET['search'];
   $sql = "SELECT * FROM type_abonnement WHERE Durée LIKE '%$searchKey%'";

}else
{
$sql = "SELECT * FROM type_abonnement";
}


    $result = $conn->query($sql);


?>


   
<form action="" method="GET"> 
    
     <div class="navbar-form navbar-right">

        <input type="text" name="search" class='form-control' placeholder="Search..."  value=<?php echo @$_GET['search']; ?> >
     
      <button class="btn btn-success">Search</button>


     </div>
     
   </form>
   <?php 

$conn = new mysqli('localhost', 'root', '', 'gym');
if(isset($_GET['orderby']) && $_GET['orderby'] == "asc") {
    $orderby = 'DESC';
 }
 else {
    $orderby = 'ASC';
 }
 $sql = "SELECT * FROM type_abonnement ORDER BY tarifsAbo " . $orderby;
 
         
      
         
       
    ?>

     
<form action="" method="GET">
<input type="submit" name="orderby" value="asc" />
</form>




   

  
       <div class="row justify-content-center">
       
           <table class="table">
               <thread>
                   <tr>
                   <th>libelleAbo</th>
                       <th>descriptionAbo</th>
                       <th>descriptionAbo2</th>
                       <th>descriptionAbo3</th>
                       <th>descriptionAbo4</th>
                       <th>tarifsAbo</th>
                       <th>Durée</th>
                       <th colspan="2">action</th> 
                      

</tr>
</thead>
    </div>

<?php

while ($row=$result->fetch_assoc()): ?>

<tr>
    <td><?php echo $row ['libelleAbo']; ?></td>
    <td><?php echo $row ['descriptionAbo']; ?></td>
    <td><?php echo $row ['descriptionAbo2']; ?></td>
    <td><?php echo $row ['descriptionAbo3']; ?></td>
    <td><?php echo $row ['descriptionAbo4']; ?></td>

    <td><?php echo $row ['tarifsAbo']; ?></td>

    <td><?php echo $row ['Durée']; ?></td>
<td> 

    <a href ="index2.php?edit=<?php echo $row['codeAbo']; ?>"
    class="btn btn-success">Edit</a>
  
   <a href="index2.php?delete=<?php echo $row['codeAbo']; ?>"  
   class="btn btn-danger ">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>



       <?php
function pre_r($array){
echo '<pre>';
print_r($array);
echo '</pre>';
}     
?>
    <div class="row justify-content-center">
<form action="config2.php" method="POST">
    <input type="hidden" name="codeAbo" value="<?php echo $codeAbo;?>">
    <div class="form-group">
        <label >Libelle</label>
        <input type="text" name="libelleAbo" class="form-control" value="<?php echo $libelleAbo;?>" placeholder="entret ton libelle">
</div>
<div class="form-group">
<label>Description1</label>
<input type="text" name="descriptionAbo" class="form-control" value="<?php echo $descriptionAbo  ;?>" placeholder="entrer ton descriptionAbo">
</div>
<div class="form-group">
<label >Description2</label>
<input type="text" name="descriptionAbo2" class="form-control" value="<?php echo $descriptionAbo2  ;?>" placeholder="entrer ton descriptionAbo">
</div>
<div class="form-group">
<label >Description3</label>
<input type="text" name="descriptionAbo3" class="form-control" value="<?php echo $descriptionAbo3  ;?>" placeholder="entrer ton descriptionAbo3">
</div>
<div class="form-group">
<label>Description4</label>
<input type="text" name="descriptionAbo4" class="form-control" value="<?php echo $descriptionAbo4  ;?>" placeholder="entrer ton descriptionAbo4">
</div>

<div>
<label>TarifsAbo</label>
<input type="text" name="tarifsAbo" class="form-control" value="<?php echo $tarifsAbo  ;?>" placeholder="entrer ton tarifs">
</div>
<div class="form-group">
<label>Durée</label>
<input type="text" name="Durée" class="form-control" value="<?php echo $Durée ; ?>" placeholder="entrer le duree">
</div>

    <div class="form-group">
        <?php
        if ($update==true):
            ?>
<button type="submit" action ="index.php"  class ="btn btn-info" name="update">Update</button>
        <?php else: ?>
            <button  type="submit" class ="btn btn-primary" name="save">Save</button>
        <?php endif; ?>
        <br>
        <br>
        <br>

        <a href="index.php"><img src="image\aaaa.jpg" alt="HTML tutorial" style="width:42px;height:42px;"></a>

            </div>


</form>
</body>
</div>
</html>

