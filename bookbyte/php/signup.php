<?php

include('./config.php');

$name =  $_POST['name']; 
$email = $_POST['mail'];
$password =  $_POST['password'];


$sql = "INSERT INTO users  VALUES ('$name','$email','$password')";

if(mysqli_query($conn, $sql)){
    echo "<h3>data stored in a database successfully."
        . " Please browse your localhost php my admin"
        . " to view the updated data</h3>";

    echo nl2br("\n$name\n $email\n "
        . "$password");
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($conn);
}
 
mysqli_close($conn);
?>