<?php 
    include_once 'connection/connection.php';
    $id = $_GET['id'];

    $DeleteBA = mysql_query("DELETE from user WHERE id ='$id'");
    if($DeleteBA) {
        header("Location: ?BA=DataStaff");
    } else {
        echo "QUERY ERROR";
    }
?>