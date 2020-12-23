<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<<style>
table, th, td {
    border: 1px solid black;
    
}
table.center {
    width:70%; 
    margin-left:15%; 
    margin-right:15%;
  }
  label {
	cursor: pointer;
	color: blue;
	display: block;
	padding: 10px;
	margin: 3px;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error)  {
    die("Connection failed: " . $conn->connect_error);
} 
//MySQL query goes here
$sql = "SELECT abonner.codeAbo,type_abonnement.codeAbo,type_abonnement.Durée,type_abonnement.tarifsAbo,abonner.idAbo from type_abonnement,abonner where abonner.codeAbo=type_abonnement.codeAbo   ";


$result = $conn->query($sql);
?>

<?php
if ($result->num_rows > 0) {
    echo "<table>
    <tr>
    <th>codeAbo</th> <!This is HTML table heading>

    <th>idAbo</th> <!This is HTML table heading>
    <th>Durée</th> <!This is HTML table heading>
    <th>tarifsAbo</th> <!This is HTML table heading>

    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["codeAbo"]. "</td> <!This is HTML table data>

        <td>" . $row["idAbo"]. "</td> <!This is HTML table data>
        <td>" . $row["Durée"]. "</td> <!This is HTML table data>
        <td>" . $row["tarifsAbo"]. "</td> <!This is HTML table data>

        </tr>";
        
    }
    echo "</table>";
} else {
    echo "0 results";
}
echo "<span style='color: red;' /><center><strong>Page de confirmation d'achat</strong> </center></span>";
        echo "<br>";
        echo "<span style='color: black;' /><center><strong>CodeAbo 94 ----->offre de 1mois</strong> </center></span>";
        echo "<br>";
        echo "<span style='color: black;' /><center><strong>CodeAbo 96 ----->offre de 3mois</strong> </center></span>";
        echo "<br>";
        echo "<span style='color: black;' /><center><strong>CodeAbo 97 ----->offre de 6mois</strong> </center></span>";
        echo "<br>";
        echo "<span style='color: black;' /><center><strong>CodeAbo 98 ----->offre de 12mois</strong> </center></span>";
?> 
<br>
<br>
<br>

<div class="row justify-content-center">
<form action="add.php" method="POST">
<div class="form-group">

<label>Code d' offre  :</label>

    <input type="number" name="codeAbo" class="form-control" value="<?php echo $codeAbo;?>"placeholder="entret le code de offre">
  
    <div class="form-group">
        <label>idAbo :</label>
        <input type="number" name="idAbo" class="form-control" value="<?php echo $idAbo;?>" placeholder="entret ton id">
</div>
<div>
<button  type="submit" class ="btn btn-success" name="ajouter">ajouter</button>
</div>
</form>

<?php
$conn->close();
?>
</body>
</html>
 