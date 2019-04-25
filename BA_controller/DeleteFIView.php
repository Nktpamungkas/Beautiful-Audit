<?php 
    include_once 'connection/connection.php';
    $id = $_GET['id'];

    $DeleteBA = mysql_query("DELETE from final_inspection WHERE id ='$id'");
    if($DeleteBA) {
        header("Location: ?BA=TabelFI");
    } else {
        echo "QUERY ERROR";
    }
?>