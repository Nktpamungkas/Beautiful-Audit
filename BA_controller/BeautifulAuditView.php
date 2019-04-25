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
            $id = $_POST['id'];
            $id_ba = $_POST['id_ba'];
            $Plan = $_POST['Plan'];
            $Cell = $_POST['Cell'];
            $brand = $_POST['brand'];
            $po_number = $_POST['po_number'];
            $lo = $_POST['lo'];
            $model_name = $_POST['model_name'];
            $po_total_qty = $_POST['po_total_qty'];
            $audit_date = $_POST['audit_date'];
            $artice = $_POST['article'];
            $quantity_inspec = $_POST['quantity_inspec'];
            $auditor_name = $_POST['auditor_name'];
            $category = $_POST['category'];
            $time = $_POST['time'];
            $nomorqc = $_POST['nomorqc'];

            $cekdata = "SELECT id_ba from ba WHERE id_ba='$id_ba'"; 
            //jika plan/cell dan tanggal ada yang sama pada bulannya, maka tidak bisa input data
            $ada=mysql_query($cekdata) or die(mysql_error());
            if(mysql_num_rows($ada)>0){
                $planCellError = 'Plan/Cell di bulan tersebut telah di Audit, silahkan pilih Plan yg lain.';    
            } else{
                $saveFolder = mysql_query("INSERT INTO BA(id,id_ba,plan,cell,lo,audit_date,auditor_name,brand,model_name,article,category,po_number,
                                                        po_total_qty,quantity_inspected,time_ba,nomor_qc,status) 
                                                VALUES('$id','$id_ba','$Plan','$Cell','$lo','$audit_date','$auditor_name','$brand','$model_name','$article','$category','$po_number','$po_total_qty','$quantity_inspec','$time','$nomorqc','BA')");
                if($saveFolder) {
                    header("Location: ?BA=KriteriaInput&id_ba=". $_POST['id_ba']);
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
    <title>::Beautiful Produk Audit | BA</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script type="text/javascript">
        function proses(){
            var Plan=document.getElementById("Plan").value;
            var Cell=document.getElementById("Cell").value;
            var d = new Date();
            var h = d.getDate();
            var m = d.getMonth();
            var y = d.getFullYear();
            document.getElementById("BA").value= Plan + Cell + "/" + h + "/" + (m + 1) + "/" + y + " - BA";
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
                    <h1 class="page-head-line">Beautiful Product Audit Report FTW (Matrix evalution)</h1>
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
                        <label for="inputsm">PLAN</label>
                        <input type="text" name="id" hidden>
                        <select id="Plan" class="form-control input-sm" name="Plan" onchange="proses()" required>
                            <option value="">-Select Plan</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">CELL</label>
                        <input type="text" name="id" hidden>
                        <select id="Cell" class="form-control input-sm" name="Cell" onchange="proses()" required>
                            <option value="">-Select Cell-</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">BRAND</label>
                        <input class="form-control input-sm" type="text" placeholder="BA" name="id_ba" id="BA">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">BRAND</label>
                        <input class="form-control input-sm" type="text" placeholder="BRAND" name="brand" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">PO NUMBER</label>
                        <input class="form-control input-sm" type="text" placeholder="PO NUMBER" name="po_number" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputsm">LO</label>
                        <input class="form-control input-sm" type="text" placeholder="LO" name="lo" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">MODEL NAME</label>
                        <input class="form-control input-sm" type="text" placeholder="MODEL NAME" name="model_name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">PO TOTAL QUANTITY</label>
                        <input class="form-control input-sm" type="text" placeholder="PO TOTAL QUANTITY" name="po_total_qty" required>
                    </div>

                   <div class="form-group col-md-4">
                        <label for="inputsm">AUDIT DATE</label>
                        <input class="form-control input-sm" type="date" name="audit_date" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">ARTICLE #</label>
                        <input class="form-control input-sm" type="text" placeholder="ARTICLE #" name="article" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">QUANTITY INSPECTED(10% OUTPUT)</label>
                        <input class="form-control input-sm" type="text" placeholder="QUANTITY INSPECTED(10% OUTPUT)" name="quantity_inspec" required>
                    </div>

                    <div class="form-group col-md-4" required>
                        <label for="inputsm">AUDITOR NAME</label>
                        <input class="form-control input-sm" type="text" placeholder="AUDITOR NAME" name="auditor_name" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">CATEGORY</label>
                        <?php
                            if (isset($pesanError)) {
                            echo '<b style=color:red>' . $pesanError . '</b>';
                            }
                        ?>
                        <select name="category" class="form-control input-sm" required>
                            <option value="">-Select Category-</option>
                            <option value="Outdoor">OUTDOOR</option>
                            <option value="Soccer">SOCCER</option>
                            <option value="Original">ORIGINAL</option>
                            <option value="Running">RUNNING</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputsm">TIME</label>
                        <input class="form-control input-sm" id="clock" name="time" required>
                    </div>

                    <div class="form-group col-md-4">
                        <label for="inputsm">Nomor QC</label>
                        <input class="form-control input-sm" type="text" placeholder="Nomor QC" name="nomorqc" required>
                    </div>

            </div>
                    <button class="btn btn-primary btn-sm" type="submit" name="submit">Input Criteria</button>
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
