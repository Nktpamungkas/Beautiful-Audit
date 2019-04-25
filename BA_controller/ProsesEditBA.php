<?php
if(isset($_POST['submit'])){
    include_once 'database/connection.php';
    $id_order = $_POST['id_order'];
    $stop = $_POST['stop'];

    //
    $saveFolder = mysql_query("UPDATE tbl_order SET stop_progress ='$stop' WHERE id_order = '$id_order' )");
        if($saveFolder) {
            header("Location: ?BA=Dashboard");
        } else {
            echo "QUERY ERROR";
        }
}
} else {
    header("Location: ?");
}
?>