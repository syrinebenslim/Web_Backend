<?php
$name=$_POST['name'];
$email=$_POST['email'];
$website=$_POST['website'];
$comment=$_POST['comment'];

if(!empty($name) ||!empty($email) ||!empty($website) ||!empty($comment)){


}else{
    echo "all fields are required";
    die();
}
?>