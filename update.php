<?php
include('db.php');
include('function.php');
updateData();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD CREATE PART</title>
    <style>
        body{
            background-color:orange;
        }
    </style>
</head>
<body>
    <h1>Update Part</h1>
    <form action="" method="post">
        username : <input type="text" name='username'><br>
        password : <input type="password" name='password'><br>
        <select name="id" id="">
            <?php
  readData();
            ?>
        </select>
        <input type="submit" name='submit' value='UPDATE'>
    </form>
</body>
</html>