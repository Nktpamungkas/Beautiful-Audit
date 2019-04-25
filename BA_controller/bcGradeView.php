<?php
if (isset($_SESSION['id'])) {
    // Sessi Ada
    $id = $_SESSION['id'];
    include_once 'connection/connection.php';
    $dataUserBySesion = mysql_query("SELECT * FROM user WHERE id = '$id'");
    $fetchDataUserBySesion = mysql_fetch_assoc($dataUserBySesion);

    //oldPassTxt newPassTxt reNewPassTxt

    if (isset($_POST['submit'])) {
        include_once 'connection/connection.php';
        $id_fi = $_GET['id_fi'];
        $grade = $_POST['grade'];
        $model = $_POST['model'];
        $art = $_POST['art'];
        $no_po = $_POST['no_po'];
        $size = $_POST['size'];
        $kr_kn = $_POST['kr_kn'];
        $alasan = $_POST['alasan'];


        $saveFolder = mysql_query("INSERT INTO bc_grade(id_fi,grade,model,art,no_po,size,kr_kn,alasan_reject) 
                                                VALUES('$id_fi','$grade','$model','$art','$no_po','$size','$kr_kn','$alasan')");
        if($saveFolder) {
            echo "<script>window.close();</script>";
        } else {
            echo "QUERY ERROR";
        }
    }
} else {
    header("Location: ?");
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
    <title>::Beautiful Produk Audit | FI</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <!-- HEADER END-->
    <!-- LOGO HEADER END-->
    <?php include_once "MenuBar.php"; ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <b>B/C Grade : <?php echo $_GET['id_fi']; ?></b>
                        </div>
                        <div class="panel-body">
                        <form action="" method="POST">
                            <div class="form-group">
                                <label>Grade</label>
                                <input type="text" class="form-control input-sm" placeholder="Grade" name="grade" required>
                            </div>
                            <div class="form-group">
                                <label>Model</label>
                                <input type="text" class="form-control input-sm" placeholder="Model" name="model" required>
                            </div>
                            <div class="form-group">
                                <label>Art</label>
                                <input type="text" class="form-control input-sm" placeholder="Art" name="art" required>
                            </div>
                            <div class="form-group">
                                <label>Nomor PO</label>
                                <input type="text" class="form-control input-sm" placeholder="No. PO" name="no_po" required>
                            </div>
                            <div class="form-group">
                                <label>Size</label>
                                <input type="text" class="form-control input-sm" placeholder="Size" name="size" required>
                            </div>
                            <div class="form-group">
                                <label>Alasan Reject</label>
                                <input type="text" class="form-control input-sm" placeholder="Alasan Reject" name="alasan" required>
                            </div>
                            <div class="radio">
                              <label>
                                <input type="radio" name="kr_kn" value="Kiri" />
                                Kiri
                              </label>
                            </div>
                            <div class="radio">
                                <label>
                                <input type="radio" name="kr_kn" value="Kanan" />
                                Kanan
                              </label>
                            </div>
                   
                            <button type="submit" name="submit" class="btn btn-default">Submit</button>
                        </form>
                        </div>
                    </div>
                 </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include_once "Footer.php"; ?>
    <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
