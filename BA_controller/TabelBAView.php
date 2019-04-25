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
    <title>::Beautiful Produk Audit | Dashboard</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='assets/responsive-tables/responsive-tables.css' rel='stylesheet'>
</head>
<body>
    <!-- HEADER END-->
    <?php include_once 'MenuBar.php'; ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Beautiul Produk Audit</h4>
                    <form action="" method="post">
                        <table>
                            <tr>
                                <td>ID Beautiful Audit</td>
                                <td></td>
                                <td><input class="form-control input-xs" type="text" name="id_ba"></td>
                            </tr>
                            <tr>
                                <td>Date Now</td>
                                <td></td>
                                <td><input class="form-control input-xs" type="Date" name="tgl_awal"></td>
                                <td>Due Date</td>
                                <td></td>
                                <td><input class="form-control input-xs" type="Date" name="tgl_akhir"></td>
                                <td><button class="btn btn-primary btn-xs" type="submit" name="submit">Search</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <!-- Code Pencarian Berdasarkan ID BA, Tgl Sekarang - Tgl Akhir, plan cell -->
            <?php
                if (isset($_POST['submit'])) {

                    if(empty($_POST['id_ba']) AND empty($_POST['tgl_awal']) AND empty($_POST['tgl_akhir'])) {
                        // header("Location: ?BA=#");
                        include_once 'connection/connection.php';

                        $dataDok = mysql_query("SELECT * FROM ba");
                    }elseif (empty($_POST['tgl_awal']) AND empty($_POST['tgl_akhir'])) {
                        include_once 'connection/connection.php';
                        $id_ba = $_POST['id_ba'];

                        $dataDok = mysql_query("SELECT * FROM ba WHERE id_ba='$id_ba'");
                    } else {
                        include_once 'connection/connection.php';
                        $tgl1 = $_POST['tgl_awal'];
                        $tgl2 = $_POST['tgl_akhir'];
                        
                        $dataDok = mysql_query("SELECT * FROM ba WHERE audit_date between '$tgl1' AND '$tgl2' ORDER BY id ASC");
                    } 
            ?>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table table-striped table-bordered header-fixed" style="table-layout: fixed; overflow-y:scroll">
                            <thead>
                                <tr>
                                    <th>Bautiful Audit</th>
                                    <th>Plan</th>
                                    <th>Cell</th>
                                    <th>Date</th>
                                    <th>Auditor Name</th>
                                    <th>Time</th>
                                    <th>Rating</th>
                                    <th># Opsi #</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    while ($fetchDataDok = mysql_fetch_array($dataDok)){
                                        
                                ?>
                                <tr>
                                    <td><?php echo $fetchDataDok['id_ba']; ?></td>
                                    <td><?php echo $fetchDataDok['plan']; ?></td>
                                    <td><?php echo $fetchDataDok['cell']; ?></td>
                                    <td><?php echo $fetchDataDok['audit_date']; ?></td>
                                    <td><?php echo $fetchDataDok['auditor_name']; ?></td>
                                    <td><?php echo $fetchDataDok['time_ba']; ?></td>
                                    <td><?php echo $fetchDataDok['rating']; ?></td>
                                    <td>
                                        <a href="?BA=EditKriteriaInput&id_ba=<?php echo $fetchDataDok['id_ba']; ?>">
                                            <span class="label label-primary">Show</span></a>
                                        <a href="?BA=DeleteBA&id=<?php echo $fetchDataDok['id']; ?>">
                                            <span class="label label-danger">Drop</span></a>
                                        <a href="?BA=PrintBA&id_ba=<?php echo $fetchDataDok['id_ba']; ?>" target="Blank">
                                            <span class="label label-warning">Print</span></a>
                                    </td>
                                </tr>
                                <?php } }?>   
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
