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
        $plan = $_POST['plan'];
        $cell = $_POST['cell'];
        $id_fi = $_POST['id_fi'];
        $article = $_POST['article'];
        $model = $_POST['model'];
        $brand = $_POST['brand'];
        $po = $_POST['po'];
        $total_qty_order = $_POST['total_qty_order'];
        $customer = $_POST['customer'];
        $date_fi = $_POST['date_fi'];
        $time_fi = $_POST['time_fi'];
        $final_qc = $_POST['final_qc'];

        $cekdata = "SELECT id_fi from final_inspection WHERE id_fi = '$id_fi'"; //jika plan dan tanggal ada yang sama pada bulannya, maka tidak bisa input data
        $ada=mysql_query($cekdata) or die(mysql_error());
            if(mysql_num_rows($ada)>0){
                $planCellError = 'Plan di bulan tersebut telah di Final Inspection, silahkan pilih Plan yg lain.';    
            } else{
                $saveFolder = mysql_query("INSERT INTO final_inspection(id_fi,plan,cell,article,model,brand,po,total_qty_order,customer,date_fi,time_fi,final_qc) 
                                                VALUES('$id_fi','$plan','$cell','$article','$model','$brand','$po','$total_qty_order','$customer','$date_fi','$time_fi','$final_qc')");
                if($saveFolder) {
                    header("Location: ?BA=Defect&id_fi=". $_POST['id_fi']);
                } else {
                    echo "QUERY ERROR";
                }
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
    <title>::FINAL Inspection | FI</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script type="text/javascript">
        function proses(){
            var plan=document.getElementById("plan").value;
            var cell=document.getElementById("cell").value;
            var d = new Date();
            var h = d.getDate();
            var m = d.getMonth();
            var y = d.getFullYear();
            document.getElementById("FI").value= plan + cell + "/" + h + "/" + (m + 1) + "/" + y + " - FI";
          }
        function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
            var waktu = new Date();            //membuat object date berdasarkan waktu saat 
            var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
            var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
            var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
            document.getElementById("clock").value = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
        }
    </script>
</head>
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);">
    <!-- HEADER END-->
    <!-- LOGO HEADER END-->
    <?php include_once "MenuBar.php"; ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-head-line">100% FINAL INSPECTION IN LINE REPORT</h1>
                    <?php
                        if (isset($pesanError)) {
                        echo '<b style=color:red>' . $pesanError . '</b>';
                        }
                    ?>
                    <?php
                        if (isset($planCellError)) {
                        echo '<b style=color:red>' . $planCellError . '</b>';
                        }
                    ?>
                </div>

                <form action="" method="post">
                    <div class="form-group col-md-4">
                        <label for="inputsm">-Select Plan-</label>
                        <select class="form-control input-sm" name="plan" id="plan" onchange="proses()" required>
                            <option value="">-Select Plan-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">-Select Cell-</label>
                        <select class="form-control input-sm" name="cell" id="cell" onchange="proses()" required>
                            <option value="">-Select Cell-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">Id FI</label>
                        <input type="text" class="form-control input-sm" placeholder="FI" name="id_fi" id="FI" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">Article</label>
                        <input type="text" class="form-control input-sm" placeholder="Article #" name="article" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">Model</label>
                        <input type="text" class="form-control input-sm" placeholder="Model" name="model" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">Brand</label>
                        <select class="form-control input-sm" name="brand" required>
                            <option value="">-Select Brand-</option>
                            <option value="Adidas">Adidas</option>
                            <option value="Reebook">Reebook</option>
                            <option value="Taylor Mode">Taylor Mode</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">PO</label>
                        <input type="text" class="form-control input-sm" placeholder="P.O" name="po" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">Total Qty Order</label>
                        <input type="text" class="form-control input-sm" placeholder="Total Qty Order" name="total_qty_order" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">Customer</label>
                        <input type="text" class="form-control input-sm" placeholder="Customer" name="customer" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">Date FI</label>
                        <input type="Date" class="form-control input-sm" placeholder="date" name="date_fi" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">Time FI</label>
                        <input class="form-control input-sm" id="clock" name="time_fi" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">Final QC</label>
                        <input type="text" class="form-control input-sm" placeholder="Final QC" name="final_qc" required>
                    </div>
            </div>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Save</button>
                </form>
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
