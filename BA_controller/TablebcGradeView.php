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
                    <h4 class="page-head-line">LAPORAN SEPATU B GRADE / C GRADE</h4>
                    <a href="?BA=PrintbcGrade&id_fi=<?php echo $_GET['id_fi']; ?>" class="btn btn-primary btn-sm" Target="_Blank">Print All</a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table table-striped table-bordered header-fixed" style="table-layout: fixed; overflow-y:scroll">
                            <thead>
                                <tr>
                                    <th>Grade</th>
                                    <th>Model</th>
                                    <th>Art</th>
                                    <th>No Po</th>
                                    <th>Size</th>
                                    <th>Alasan</th>
                                    <th># Opsi #</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    include_once 'connection/connection.php';

                                    $dataDok = mysql_query("SELECT * FROM bc_grade WHERE id_fi='$_GET[id_fi]' ");
                                    while ($fetchDataDok = mysql_fetch_array($dataDok)){
                                ?>
                                <tr>
                                    <td><?php echo $fetchDataDok['grade']; ?></td>
                                    <td><?php echo $fetchDataDok['model']; ?></td>
                                    <td><?php echo $fetchDataDok['art']; ?></td>
                                    <td><?php echo $fetchDataDok['no_po']; ?></td>
                                    <td><?php echo $fetchDataDok['size']; ?></td>
                                    <td><?php echo $fetchDataDok['alasan_reject']; ?></td>
                                    <td>
                                        <a href="?BA=DeletebcGrade&id=<?php echo $fetchDataDok['id']; ?>">
                                            <span class="label label-danger">Drop</span></a>
                                    </td>
                                </tr>
                                <?php  }?>   
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
