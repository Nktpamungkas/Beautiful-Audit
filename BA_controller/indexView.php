<?php
if (isset($_SESSION['id'])) {
    // Seesi Ada
    header("Location: ?BA=Dashboard");
} else {
    // Sessi Tidak Ada
    if (isset($_POST['submit'])) {

            include_once 'connection/connection.php';
            $username = $_POST['username'];
            $password = $_POST['password'];
            $cekData = mysql_query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
            $cekAda = mysql_num_rows($cekData);
            if ($cekAda > 0) {
                //
                $dataUser = mysql_fetch_array($cekData);
                // Set Sessi
                $_SESSION['id'] = $dataUser['id'];
                header("Refresh: 0");
            } else {
                $pesanError = 'Usename and Password not Match';
            }
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>::Beautiful Produk Audit | Log in</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <!-- HEADER END-->
    <!-- LOGO HEADER END-->
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Enter </h4>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                     <?php
                        if (isset($pesanError)) {
                        echo '<b style=color:red>' . $pesanError . '</b>';
                        }
                    ?>
                    <form action="" method="post">
                        <label>Enter Username : </label>
                        <input type="text" class="form-control" name="username">

                        <label>Enter Password :  </label>
                        <input type="password" class="form-control" name="password" maxlength="8">
                        <hr />

                        <button class="btn btn-info" type="submit" name="submit"><span class="glyphicon glyphicon-user"></span> &nbsp;Log Me In </a>&nbsp;
                        </button>
                    </form>
                </div>
                <div class="col-md-6">
                    <div class="alert alert-info">
                        Our two most valuable assets are our people and our technology. Both are vital in improving the quality of our products as well as speeding up the development of new products, system solutions and production processes.
                        <br />
                         <strong>Product, Creation & Engineering : </strong>
                        <ul>
                            <li>
                                Development
                            </li>
                            <li>
                                Quality
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include_once 'Footer.php'; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
