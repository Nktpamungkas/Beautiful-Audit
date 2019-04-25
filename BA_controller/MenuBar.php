  <?php
    if (isset($_SESSION['id'])) {
        // Sessi Ada
        $id = $_SESSION['id'];
        include_once 'connection/connection.php';
        $dataUserBySesion = mysql_query("SELECT * FROM user WHERE id = '$id'");
        $fetchDataUserBySesion = mysql_fetch_assoc($dataUserBySesion);
    } else {
        header("Location: ?");
    }
  ?>
  <!DOCTYPE html>
  <html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <footer>
        <div class="navbar">
            <img src="assets/img/logopanarub.png" alt="Img" align="right">
        </div>
    </footer>    
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a  href="?BA=Dashboard">Home</a></li>
                            <li><a href="?BA=BeautifulAudit">Beautiful Audit</a></li>
                            <li><a href="?BA=FinalInspection">Final Inspection</a></li>
                            <li>
                                <?php
                                    if (isset($fetchDataUserBySesion['hak_akses'])) {
                                        if ($fetchDataUserBySesion['hak_akses'] == "IT") {
                                            echo '<li><a href="?BA=DataStaff">Data Staff</a></li>';
                                        }
                                    }
                                ?>
                            </li>
                            <li><a href="?BA=out">Log Out</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
</body>
</html>
