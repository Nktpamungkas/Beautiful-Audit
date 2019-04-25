<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>::Beautiful Produk Audit | Final Inspection</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='assets/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <script type="text/javascript">
            
    </script>
</head>
<body>
    <!-- HEADER END-->
    <?php include_once 'MenuBar.php'; ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Final Inspection</h4>
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td>ID Final Inspection</td>
                                <td></td>
                                <td><input class="form-control input-xs" type="text" name="id_fi"></td>
                            </tr>
                            <tr>
                                <td>Date Now</td>
                                <td></td>
                                <td><input class="form-control input-xs" type="Date" name="tgl_awal"></td>
                                <td>Due Date</td>
                                <td></td>
                                <td><input class="form-control input-xs" type="Date" name="tgl_akhir"></td>
                                <td><button class="btn btn-primary btn-xs" type="submit" name="submit" >Search</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <!-- Code Pencarian Berdasarkan ID BA, Tgl Sekarang - Tgl Akhir -->
            <?php
                include_once 'connection/connection.php';
                $dataDok = mysql_query("SELECT * FROM final_inspection");
                while ($fetchDataDok = mysql_fetch_array($dataDok)){

                if (isset($_POST['submit'])) {

                    if(empty($_POST['id_fi']) AND empty($_POST['tgl_awal']) AND empty($_POST['tgl_akhir'])) {
                        // header("Location: ?BA=#");
                        include_once 'connection/connection.php';

                        $dataDok = mysql_query("SELECT * FROM final_inspection");
                    }elseif (empty($_POST['tgl_awal']) AND empty($_POST['tgl_akhir'])) {
                        include_once 'connection/connection.php';
                        $id_fi = $_POST['id_fi'];

                        $dataDok = mysql_query("SELECT * FROM final_inspection WHERE id_fi='$id_fi'");
                    } else {
                        include_once 'connection/connection.php';

                        $tgl1 = $_POST['tgl_awal'];
                        $tgl2 = $_POST['tgl_akhir'];

                        $dataDok = mysql_query("SELECT * FROM final_inspection WHERE date_fi between '$tgl1' AND '$tgl2' ORDER BY id ASC");
                    }
            ?>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table table-striped table-bordered header-fixed" style="table-layout: fixed; overflow-y:scroll">
                            <thead>
                                <tr>
                                    <th>Final Inspection</th>
                                    <th width="90">Tanggal</th>
                                    <th>Article</th>
                                    <th>Model</th>
                                    <th>Customer</th>
                                    <th>Final Qc</th>
                                    <th>Presentase</th>
                                    <th width="60">B/C Grade</th>
                                    <th># Opsi #</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($fetchDataDok = mysql_fetch_array($dataDok)){
                                ?>
                                <tr>
                                    <td><?php echo $fetchDataDok['id_fi']; ?></td>
                                    <td><?php echo $fetchDataDok['date_fi']; ?></td>
                                    <td><?php echo $fetchDataDok['article']; ?></td>
                                    <td><?php echo $fetchDataDok['model']; ?></td>
                                    <td><?php echo $fetchDataDok['customer']; ?></td>
                                    <td><?php echo $fetchDataDok['final_qc']; ?></td>
                                    <td><center><?php echo $fetchDataDok['defect']; ?></center></td>
                                    <td><center><?php echo $fetchDataDok['bc_grade']; ?></center></td>
                                    <td><center>
                                        <a href="?BA=EditFinalInspection&id_fi=<?php echo $fetchDataDok['id_fi']; ?>">
                                            <span class="label label-primary">Show</span></a>
                                        <a href="?BA=DeleteFI&id=<?php echo $fetchDataDok['id']; ?>">
                                            <span class="label label-danger">Drop</span></a>
                                        <a href="?BA=PrintFI&id_fi=<?php echo $fetchDataDok['id_fi']; ?>" target="Blank">
                                            <span class="label label-warning">Print</span></a>
                                    </center></td>
                                </tr>
                                <?php } } }?>   
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include_once "Footer.php"; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/responsive-tables/responsive-tables.js"></script>
    <script src='assets/js/jquery.dataTables.min.js'></script>
</body>
</html>
