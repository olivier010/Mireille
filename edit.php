<?php

include 'connection.php';
//collecting user infos
$id_to_edit = $_POST['id_to_edit'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age= $_POST['age'];
$gender = $_POST['gender'];
$level = $_POST['level'];
$location = $_POST['location'];

//query creation

 $sql = "UPDATE student SET firstname='$firstname',lastname='$lastname',age='$age',
 gender='$gender',level='$level',location='$location' WHERE id=$id_to_edit ";

$result = mysqli_query($conn,$sql);

if($result){
    header("location:display.php");
}else{
    echo"update failed ".mysqli_error($conn);
 }




?>