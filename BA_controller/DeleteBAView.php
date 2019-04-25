<?php 
    include_once 'connection/connection.php';
    $id = $_GET['id'];

    $DeleteBA = mysql_query("DELETE from ba WHERE id ='$id'");
    if($DeleteBA) {
        header("Location: ?BA=TabelBA");
    } else {
        echo "QUERY ERROR";
    }
?>