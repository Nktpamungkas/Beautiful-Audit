<?php

if (isset($_SESSION['id'])) {
    // Sessi Ada
    $id = $_SESSION['id'];
    include_once 'connection/connection.php';
    $dataUserBySesion = mysql_query("SELECT * FROM user WHERE id = '$id'");
    $fetchDataUserBySesion = mysql_fetch_assoc($dataUserBySesion);
}
?>