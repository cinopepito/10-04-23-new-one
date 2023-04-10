<?php
include('db.php');
include('function.php');
deleteData();
?>
    <h1>Delete Part</h1>
    <form action="" method="post">
        username : <input type="text" name='username'><br>
        password : <input type="password" name='password'><br>
        <select name="id" id="">
            <?php
  readData();
            ?>
        </select>
        <input type="submit" name='submit' value='DELETE'>
    </form>