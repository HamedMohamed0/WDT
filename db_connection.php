<?php
function openCon()
    {
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "test_db";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db);
    if(!$conn){
        echo mysqli_connect_error();
        exit;
    }
    return $conn;
} 
function closeCon($conn)
{
    $conn -> close();
}
?>