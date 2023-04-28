<?php
include 'connection.php';


$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$level=$_POST['level'];
$location=$_POST['location'];


$sql="INSERT INTO `student`(`firstname`,`lastname`,`age`,`gender`,`level`,`location`)
VALUES('$firstname','$lastname','$age','$gender','$level','$location')";

$result = mysqli_query($conn,$sql);

if($result){
header("location:display.php");
}
else{
     die(mysqli_error($conn));
    }




?>