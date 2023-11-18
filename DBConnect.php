<?php


$host = "srv209.hstgr.io";
$user = "u877321664_rot";
$password = "Jawad@2022";
$db = "u877321664_dll";




//create connection

$conn = new mysqli($host,$user,$password,$db);



//check connection
if($conn->connect_error) {
    die("connection failed");

}


?>


