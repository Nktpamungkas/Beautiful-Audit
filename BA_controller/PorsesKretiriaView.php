<?php 
    if (isset($_POST['submit'])) {
        include_once 'connection/connection.php';
        $id_ba = $_POST['id_ba'];
        $c1 = $_POST['c1'];
        $c2 = $_POST['c2'];
        $c3 = $_POST['c3'];
        $c4 = $_POST['c4'];
        $c5 = $_POST['c5'];
        $c6 = $_POST['c6'];
        $c7 = $_POST['c7'];
        $c8 = $_POST['c8'];
        $c9 = $_POST['c9'];
        $beautiful = $_POST['beautiful'];
        $quantity_inspec = $_POST['quantity_inspec'];

        $rating = $beautiful / $quantity_inspec * 5;

        $saveFolder = mysql_query("INSERT INTO kriteria (id_ba,c1,c2,c3,c4,c5,c6,c7,c8,c9,beautiful,rating) VALUES('$id_ba','$c1','$c2','$c3','$c4','$c5','$c6','$c7','$c8','$c9','$beautiful','$rating')");
        $updateRating = mysql_query("UPDATE ba SET rating = '$rating' WHERE id_ba = '$id_ba'");
        if($saveFolder) {
            header("Location: ?BA=Dashboard");
        } else {
            echo "QUERY ERROR";
        }
    } else {
    header("Location: ?");
}
?>