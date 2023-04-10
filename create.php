<?php
include('db.php');
include('function.php');

if(isset($_POST['submit'])){
    createData();
}
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
    <h1>Create Part</h1>
    <form action="" method="post">
        username : <input type="text" name='username'><br>
        password : <input type="password" name='password'><br>
        <input type="submit" name='submit'>
    </form>
</body>
</html>