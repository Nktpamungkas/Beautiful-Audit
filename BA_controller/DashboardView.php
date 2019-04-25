<?php
    include_once 'connection/connection.php';
    $dataDok = mysql_query("SELECT COUNT(*) as count FROM BA");
    if(mysql_num_rows($dataDok) == 0){
        // echo '<script>window.history.back()</script>';
        echo '';
    }else{
        $fetchDataDok = mysql_fetch_assoc($dataDok);   
    }
?>

<?php
    include_once 'connection/connection.php';
    $dataDok_fi = mysql_query("SELECT COUNT(*) as count FROM final_inspection");
    if(mysql_num_rows($dataDok_fi) == 0){
        // echo '<script>window.history.back()</script>';
        echo '';
    }else{
        $fetchDataDok_fi = mysql_fetch_assoc($dataDok_fi);   
    }
?>

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
     <!-- HTML5 Shiv and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <!-- HEADER END-->
    <?php include_once 'MenuBar.php'; ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper ">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4> Pilihan Laporan</h4>
                    <hr>
                </div>

            </div>

            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <ul>
                        <a href="?BA=TabelBA">
                            <img src="assets/img/boss.png" alt="Img" width="150" height="150" border="0">
                        </a>
                        <h3>BEAUTIFUL AUDIT</h3>
                        <p> Filter Informasi Beautiful Audit by Plan/Cell & Date Now Between Due Date.<br> 
                            <a href="?BA=TabelBA">Click here </a>. 
                        </p>
                    </ul>
                </div>

                <div class="col-md-3 col-sm-3 col-xs-6">
                    <ul>
                        <a href="?BA=TabelFI">
                            <img src="assets/img/tracking.png" alt="Img" width="150" height="150" border="0">
                        </a>
                        <h3>FINAL INSPECTION</h3>
                        <p> Informasi Final Inspection .<br> 
                            <a href="?BA=TabelFI">Click here </a>. 
                        </p>
                    </ul>
                </div>
            </div>

            <!-- <div class="row">
                 <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-one">
                    <i  class="fa fa-qrcode dashboard-div-icon"></i>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $fetchDataDok['count']; ?>%">
                            </div>                        
                        </div>
                        <h5>Beautiful Product Audit(<?php echo $fetchDataDok['count']; ?>)</h5>
                        <h6><a href="?BA=TabelBA" style="color: white;">Clik Here</a></h6>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="dashboard-div-wrapper bk-clr-two">
                        <i  class="fa fa-edit dashboard-div-icon" ></i>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                            </div> 
                        </div>
                        <h5>Final Inspection In Line Report(<?php echo $fetchDataDok_fi['count']; ?>) </h5>
                        <h6><a href="?BA=TabelFI" style="color: white;">Clik Here</a></h6>
                    </div>
                </div>
            </div> -->
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
</body>
</html>
