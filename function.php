<?php
function createData(){
    global $connect;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $username = mysqli_real_escape_string($connect,$username);
    $password = mysqli_real_escape_string($connect,$password);
    
    $hashFormat = "$2y$10$";
    $salt = "iusesomecrazystrings22";
    $hashF_and_salt =  $hashFormat . $salt;
    $password = crypt($password,$hashF_and_salt);

    $query = "INSERT INTO users (username,password) VALUES('$username','$password')";
    $result = mysqli_query($connect,$query);
    if(!$result){
        die('query failed'.mysqli_error());
    }
}
function readData(){
    global $connect;
    $query = "SELECT * FROM users";
    $result = mysqli_query($connect,$query);
    if(!$connect){
    die('query failed'.mysqli_error());
        }
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
}
}
function updateData(){
    global $connect;
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "UPDATE users SET username = '$username', password = '$password' WHERE id=$id";
        $result = mysqli_query($connect,$query);
    if(!$connect){
        die('query failed'.mysqli_error());
    }
    }
}
function deleteData(){
    global $connect;
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        $query = "DELETE FROM users  WHERE id=$id";
        $result = mysqli_query($connect,$query);
    if(!$connect){
        die('query failed'.mysqli_error());
    }
    }
}
?>