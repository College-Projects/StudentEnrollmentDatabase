<?php 
$conn = new mysqli('localhost','root','','test3');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
}

?>