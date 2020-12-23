<?php

session_start();
  $mysqli = new mysqli('localhost', 'root' ,'', 'gym') or die (mysqli_error($mysqli));
  $idAbo='';
  $codeAbo='';
  if (isset($_POST['ajouter'])){
    $idAbo=$_POST['idAbo'];
    $codeAbo=$_POST['codeAbo'];

$_SESSION['message']="record has been saved!";
$_SESSION['msg_type']="success";
header("location: ajout.php");
    $mysqli->query("INSERT INTO abonner (idAbo,codeAbo) VALUES ('$idAbo','$codeAbo')   ")or
    die($mysqli->error);
   // $result = $conn->query($sql);

}
  ?>