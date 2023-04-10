<?php
include('db.php');
$query = "SELECT * FROM users";
$result = mysqli_query($connect,$query);
if(!$connect){
    die('query failed'.mysqli_error());
}
while($row = mysqli_fetch_assoc($result)){
    $id=$row['id'];
    echo "<option value='$id'>$id</option>";
}
?>
