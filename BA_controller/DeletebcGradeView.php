<?php 
    include_once 'connection/connection.php';
    $id = $_GET['id'];

    $Delete = mysql_query("DELETE from bc_grade WHERE id ='$id'");
     if($Delete) {
        echo '<script>window.history.back()</script>';
        
    } else {
        echo "QUERY ERROR";
  	}
?>