<?php
include 'db_connection.php';
$conn = openCon();
$id = filter_input(INPUT_GET, 'U_ID', FILTER_SANITIZE_NUMBER_INT);
$query = "DELETE FROM `users` WHERE `users`.`U_ID`=" . $id. " LIMIT 1";
if(mysqli_query($conn, $query)){
    header("Location: list.php");
    exit;
}
else{
    echo $query;
    echo mysqli_error($conn);
}
closeCon($conn);