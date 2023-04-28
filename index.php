<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div><a href="">Student enrollment</a></div>
    </nav>
    <main>

     <form action="insert.php" method="POST">
        <div>
            <h1>student registration</h1>
        </div>
        <hr>
<div>
<p>firstname</p>
<input type="text" name="firstname">
</div>
<div>
<p>lastname</p>
<input type="text" name="lastname">
</div>
<div>
<p>age</p>
<input type="text" name="age">
</div>
<div>
<p>gender</p>
<select name="gender" id="">
    <option selected disabled>choose gender</option>
    <option value="male">male</option>
    <option value="female">female</option>
    <option value="prefer not to say it">prefer not to say it</option>
</select>
</div>

<div>
<p>level</p>
<input type="text" name="level">
</div>

<div>
<p>location</p>
<input type="text" name="location">
</div>
<div>
    <input type="submit" name="" value="insert">
</div>

     </form>
     
</main>
    
</body>
</html>