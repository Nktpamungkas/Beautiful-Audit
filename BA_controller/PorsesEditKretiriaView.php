<?php 
    if (isset($_POST['submit'])) {
        include_once 'connection/connection.php';
        $id_ba = $_POST['id_ba'];
        $brand = $_POST['brand'];
        $po_number = $_POST['po_number'];
        $lo = $_POST['lo'];
        $model_name = $_POST['model_name'];
        $po_total_qty = $_POST['po_total_qty'];
        $audit_date = $_POST['audit_date'];
        $article = $_POST['article'];
        $quantity_inspec = $_POST['quantity_inspec'];
        $auditor_name = $_POST['auditor_name'];
        $category = $_POST['category'];
        $nomor_qc = $_POST['nomor_qc'];

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

        $rating = $beautiful / $quantity_inspec * 5;

        $updateBA = mysql_query("UPDATE ba SET lo = '$lo',
                                               audit_date = '$audit_date',
                                               auditor_name = '$auditor_name',
                                               brand = '$brand',
                                               model_name = '$model_name',
                                               article = '$article',
                                               category = '$category',
                                               po_number = '$po_number',
                                               po_total_qty = '$po_total_qty',
                                               quantity_inspected = '$quantity_inspec',
                                               nomor_qc = '$nomor_qc',
                                               rating = '$rating'
                                         WHERE id_ba = '$id_ba'");
        $updateRating = mysql_query("UPDATE kriteria SET c1 = '$c1',c2 = '$c2',c3 = '$c3',c4 = '$c4',c5 = '$c5',c6 = '$c6',c7 = '$c7',
                                                         c8 = '$c8',c9 = '$c9',beautiful = '$beautiful',rating = '$rating'
                                                    WHERE id_ba = '$id_ba'");
        if($updateRating && $updateBA) {
            header("Location: ?BA=TabelBA");
        } else {
            echo "QUERY ERROR";
        }
    } else {
    header("Location: ?");
}
?>