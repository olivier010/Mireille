<?php
include 'connection.php';

$id_to_edit = $_GET['update'];
//select existing infos

$query = "SELECT * FROM student WHERE id=$id_to_edit";
$select = mysqli_query($conn,$query);
$data = mysqli_fetch_array($select);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div><a href="">Student enrollment</a></div>
    </nav>
    <main>

     <form action="edit.php" method="POST">
            <div><label >Edit Form</label></div>
        <hr>
<div>
    <input type="hidden" name="id_to_edit" id="" value="<?php echo $data['id']?>">
<p>firstname</p>
<input type="text" name="firstname" id="" value="<?php echo $data['firstname']?>">
</div>
<div>
<p>lastname</p>
<input type="text" name="lastname" id="" value="<?php echo $data['lastname']?>">
</div>
<div>
<p>age</p>
<input type="text" name="age" id="" value="<?php echo $data['age']?>">
</div>
<div>
<p>gender</p>
<input type="text" name="gender" id="" list="gender" value="<?php echo $data['gender']?>">
    <datalist id="gender">
    <option value="male">male</option>
    <option value="female">female</option>
    <option value="prefer not to say it">prefer not to say it</option>
</select>
</div>

<div>
<p>level</p>
<input type="text" name="level" id="" value="<?php echo $data['level']?>">
</div>

<div>
<p>location</p>
<input type="text" name="location" id="" value="<?php echo $data['location']?>">
</div>
<div>
    <input type="submit" name="" value="update">
</div>

     </form>
     
</main>
    
</body>
</html>