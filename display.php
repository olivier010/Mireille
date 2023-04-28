<?php
include 'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
    padding: 0;
    margin:0;

}
body nav{
    width: 100%;
    height: 1.3rem;
    padding: 1.2rem 0;
    border-bottom: 1px solid black;
}
body nav div{
    padding: 2px;
    width: 86%;
    margin: auto;
}
body nav div a{
    font-size: 25px;
    font-weight: bold;
    text-decoration: none;
    color: black;
}
    </style>

</head>
<body>
    <nav>
        <div><a href="">STUDENTS </a></div>
    </nav>
    <div>
        <h1>user's profiles</h1>
    </div>
    <div>
        <button><a href="index.php">Add Students</a></button>
    </div>
    <?php
    $sql = "select * from student";
    $result = mysqli_query($conn,$sql);

    if($result){
        while($row=mysqli_fetch_assoc($result)){
            echo'<div>
            <div>fullname: '.$row['firstname'].' '.$row['lastname'].'</div>
            <div>age: '.$row['age'].'</div>
            <div>gender: '.$row['gender'].'</div>
            <div>level: '.$row['level'].'</div>
            <div>location: '.$row['location'].'</div>
            <div>
            <button><a href="update.php?update='.$row['id'].'">edit</a></button>
            <button><a href="delete.php?delete='.$row['id'].'">delete</a></button>
            </div>
            <div>
            <hr>
            ';
        }
    }
    
    
    
    ?>
    
</body>
</html>