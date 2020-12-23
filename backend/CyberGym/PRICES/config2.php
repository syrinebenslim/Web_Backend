<<?php

session_start();
  $mysqli = new mysqli('localhost', 'root' ,'', 'gym') or die (mysqli_error($mysqli));
  $update=false;
  $libelleAbo='';
  $descriptionAbo='';
  $descriptionAbo2='';
  $descriptionAbo3='';
  $descriptionAbo4='';

  $tarifsAbo='';
  $Durée='';
    if (isset($_POST['save'])){
        $libelleAbo=$_POST['libelleAbo'];
        $descriptionAbo=$_POST['descriptionAbo'];
        $descriptionAbo2=$_POST['descriptionAbo2'];
        $descriptionAbo3=$_POST['descriptionAbo3'];
        $descriptionAbo4=$_POST['descriptionAbo4'];

        $tarifsAbo=$_POST['tarifsAbo'];
        $Durée=$_POST['Durée'];
$_SESSION['message']="record has been saved!";
$_SESSION['msg_type']="success";
header("location: index2.php");
        $mysqli->query("INSERT INTO type_abonnement (libelleAbo,descriptionAbo,descriptionAbo2,descriptionAbo3,descriptionAbo4,tarifsAbo,Durée) VALUES ('$libelleAbo','$descriptionAbo','$descriptionAbo2',
        '$descriptionAbo3','$descriptionAbo4','$tarifsAbo','$Durée')")or
        die($mysqli->error);

    }
    
    if (isset($_GET['delete'])){
        $codeAbo=$_GET['delete'];
        $mysqli->query("DELETE FROM type_abonnement where codeAbo=$codeAbo")or die($mysqli->error());
        $_SESSION['message']="record has been deleted!";
        $_SESSION['msg_type']="danger";

    }
    
  if (isset($_GET['edit'])){

    $codeAbo=$_GET['edit'];
    $update=true;

    $result=$mysqli->query("SELECT * FROM type_abonnement WHERE codeAbo=$codeAbo")or die ($mysqli->error());
    if (count($result)==1){
      $row=$result->fetch_array();
      $libelleAbo=$row['libelleAbo'];
      $descriptionAbo=$row['descriptionAbo'];
      $descriptionAbo2=$row['descriptionAbo2'];
      $descriptionAbo3=$row['descriptionAbo3'];
      $descriptionAbo4=$row['descriptionAbo4'];

      $tarifsAbo=$row['tarifsAbo'];
      $Durée=$row['Durée'];



    }
  }
  if (isset($_POST['update'])){

   $codeAbo=$_POST['codeAbo'];
   $tarifsAbo=$_POST['tarifsAbo'];

    $libelleAbo=$_POST['libelleAbo'];
    $descriptionAbo=$_POST['descriptionAbo'];
    $descriptionAbo2=$_POST['descriptionAbo2'];
    $descriptionAbo3=$_POST['descriptionAbo3'];
    $descriptionAbo4=$_POST['descriptionAbo4'];


    $Durée=$_POST['Durée'];
    $mysqli->query("UPDATE type_abonnement SET libelleAbo='$libelleAbo',descriptionAbo='$descriptionAbo',descriptionAbo2='$descriptionAbo2',descriptionAbo3='$descriptionAbo3',descriptionAbo4='$descriptionAbo4',tarifsAbo='$tarifsAbo',Durée='$Durée' WHERE codeAbo=$codeAbo")or die ($mysqli->error());
 $_SESSION['message']="record has been updated!";
       $_SESSION['msg_type']="warning";
        header('location :index2.php');

  }

