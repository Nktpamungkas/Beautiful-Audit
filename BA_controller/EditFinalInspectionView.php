<?php
    include_once 'connection/connection.php';
    $id_fi = $_GET['id_fi'];
    $dataDok = mysql_query("SELECT * FROM final_inspection WHERE id_fi='$id_fi'");
    if(mysql_num_rows($dataDok) == 0){
        echo '<script>window.history.back()</script>';
    }else{
        $fetchDataDok = mysql_fetch_assoc($dataDok);   
    }
?>
<?php
    include_once 'connection/connection.php';
    $id_fi = $_GET['id_fi'];
    $dataDefc = mysql_query("SELECT * FROM defect WHERE id_fi='$id_fi'");
    $fetchDataDefect = mysql_fetch_assoc($dataDefc);   
?>
<?php
    include_once 'connection/connection.php';
    $id_fi = $_GET['id_fi'];
    $databcgrade = mysql_query("SELECT count(id_fi) as id_fi FROM bc_grade WHERE id_fi='$id_fi'");
    $fetchDatabcgrade = mysql_fetch_assoc($databcgrade);   
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
    <title>::100% FINAL INSPECTION IN LINE REPORT | FI</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <script src="assets/js/jquery.min.js"></script>
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

        // defect cut
        $(document).ready(function(){
        $("#tambah_defect_cut").click(function(){
            var x = jQuery('#defect_cut').val();
            var x = parseInt(x) + 1;
            $('#defect_cut').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_defect_cut").click(function(){
            var x = jQuery('#defect_cut').val();
            var x = parseInt(x) - 1;
            $('#defect_cut').val(x);
            alert(s);
            });
        });
        // Benang Panjang
        $(document).ready(function(){
        $("#tambah_benang_pjg").click(function(){
            var x = jQuery('#benang_pjg').val();
            var x = parseInt(x) + 1;
            $('#benang_pjg').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_benang_pjg").click(function(){
            var x = jQuery('#benang_pjg').val();
            var x = parseInt(x) - 1;
            $('#benang_pjg').val(x);
            alert(s);
            });
        });
        // Langkah Jahit
        $(document).ready(function(){
        $("#tambah_langkah_jht").click(function(){
            var x = jQuery('#langkah_jht').val();
            var x = parseInt(x) + 1;
            $('#langkah_jht').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_langkah_jht").click(function(){
            var x = jQuery('#langkah_jht').val();
            var x = parseInt(x) - 1;
            $('#langkah_jht').val(x);
            alert(s);
            });
        });
        // Wrinkle Collar
        $(document).ready(function(){
        $("#tambah_wrinkle_collar").click(function(){
            var x = jQuery('#wrinkle_collar').val();
            var x = parseInt(x) + 1;
            $('#wrinkle_collar').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_wrinkle_collar").click(function(){
            var x = jQuery('#wrinkle_collar').val();
            var x = parseInt(x) - 1;
            $('#wrinkle_collar').val(x);
            alert(s);
            });
        });
        // Open Bond
        $(document).ready(function(){
        $("#tambah_open_bond").click(function(){
            var x = jQuery('#open_bond').val();
            var x = parseInt(x) + 1;
            $('#open_bond').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_open_bond").click(function(){
            var x = jQuery('#open_bond').val();
            var x = parseInt(x) - 1;
            $('#open_bond').val(x);
            alert(s);
            });
        });
        // Overcement
        $(document).ready(function(){
        $("#tambah_overcement").click(function(){
            var x = jQuery('#overcement').val();
            var x = parseInt(x) + 1;
            $('#overcement').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_overcement").click(function(){
            var x = jQuery('#overcement').val();
            var x = parseInt(x) - 1;
            $('#overcement').val(x);
            alert(s);
            });
        });
        // Kotor
        $(document).ready(function(){
        $("#tambah_kotor").click(function(){
            var x = jQuery('#kotor').val();
            var x = parseInt(x) + 1;
            $('#kotor').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_kotor").click(function(){
            var x = jQuery('#kotor').val();
            var x = parseInt(x) - 1;
            $('#kotor').val(x);
            alert(s);
            });
        });
        // Heel
        $(document).ready(function(){
        $("#tambah_heel").click(function(){
            var x = jQuery('#heel').val();
            var x = parseInt(x) + 1;
            $('#heel').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_heel").click(function(){
            var x = jQuery('#heel').val();
            var x = parseInt(x) - 1;
            $('#heel').val(x);
            alert(s);
            });
        });
        // Overbuffing
        $(document).ready(function(){
        $("#tambah_overbuffing").click(function(){
            var x = jQuery('#overbuffing').val();
            var x = parseInt(x) + 1;
            $('#overbuffing').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_overbuffing").click(function(){
            var x = jQuery('#overbuffing').val();
            var x = parseInt(x) - 1;
            $('#overbuffing').val(x);
            alert(s);
            });
        });
        // Overbuffing
        $(document).ready(function(){
        $("#tambah_defect_outsole").click(function(){
            var x = jQuery('#defect_outsole').val();
            var x = parseInt(x) + 1;
            $('#defect_outsole').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_defect_outsole").click(function(){
            var x = jQuery('#defect_outsole').val();
            var x = parseInt(x) - 1;
            $('#defect_outsole').val(x);
            alert(s);
            });
        });
        // Wrinkle Lasting
        $(document).ready(function(){
        $("#tambah_wrinkle_lasting").click(function(){
            var x = jQuery('#wrinkle_lasting').val();
            var x = parseInt(x) + 1;
            $('#wrinkle_lasting').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_wrinkle_lasting").click(function(){
            var x = jQuery('#wrinkle_lasting').val();
            var x = parseInt(x) - 1;
            $('#wrinkle_lasting').val(x);
            alert(s);
            });
        });
        // A Grade
        $(document).ready(function(){
        $("#tambah_a_grade").click(function(){
            var x = jQuery('#a_grade').val();
            var x = parseInt(x) + 1;
            $('#a_grade').val(x);
            alert(s);
            });
        });
        $(document).ready(function(){
        $("#kurangi_a_grade").click(function(){
            var x = jQuery('#a_grade').val();
            var x = parseInt(x) - 1;
            $('#a_grade').val(x);
            alert(s);
            });
        });
        // BC Grade
        $(document).ready(function(){
        $("#tambah_bc_grade").click(function(){
            var x = jQuery('#bc_grade').val();
            var x = parseInt(x) + 1;
            $('#bc_grade').val(x);
            alert(s);
            });
        });
    </script>
</head>
<body>
    <!-- HEADER END-->
    <!-- LOGO HEADER END-->
    <?php include_once "MenuBar.php"; ?>
    <!-- MENU SECTION END-->
    <form action="?BA=PorsesEditFinalInspection" method="POST">
        <div class="content-wrapper">
            <div class="container">
                <div class="row" style="background-color: lightgray">
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

                    <div class="form-group col-md-4">
                        <h6><label>PLAN</label></h6>
                        <input type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['plan']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>CELL</label></h6>
                        <input type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['cell']; ?>" disabled>                  
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>ID FINAL INSPECTION</label></h6>
                        <input type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['id_fi']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>ARTICLE</label></h6>
                        <input name="article" type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['article']; ?>">
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>MODEL</label></h6>
                        <input name="model" type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['model']; ?>" >
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>BRAND</label></h6>
                        <input name="brang" type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['brand']; ?>" >
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>PO</label></h6>
                        <input name="po" type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['po']; ?>" >
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>TOTAL QTY ORDER</label></h6>
                        <input name="total_qty_order" type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['total_qty_order']; ?>" >
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>CUSTOMER</label></h6>
                        <input name="customer" type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['customer']; ?>" >
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>DATE FINAL INSPECTION</label></h6>
                        <input type="Date" class="form-control input-sm" value="<?php echo $fetchDataDok['date_fi']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>TIME FINAL INSPECTION</label></h6>
                        <input type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['time_fi']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <h6><label>FINAL QC</label></h6>
                        <input name="final_qc" type="text" class="form-control input-sm" value="<?php echo $fetchDataDok['final_qc']; ?>">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_defect_cut">(+) Cut</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_benang_pjg">(+) Bng Pjg</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_langkah_jht">(+) Lngkh. Jht.</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_wrinkle_collar">(+) W. Col.</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_open_bond">(+) Op. Bond</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_overcement">(+) Overcement</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_kotor">(+) Kotor</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_heel">(+) Heel</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_overbuffing">(+) Overbuff.</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_defect_outsole">(+) Outsole</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_wrinkle_lasting">(+) W. Last.</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="tambah_a_grade">(+) A Grade</a></center></th>
                            <th><center><a href="?BA=bcGrade&id_fi=<?php echo $fetchDataDok['id_fi']; ?>" class="btn btn-default btn-xs" id="tambah_bc_grade" target="_Blank">(+) B/C Grade</a></center></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_defect_cut">(-) Cut</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_benang_pjg">(-) Bng Pjg</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_langkah_jht">(-) Lngkh. Jht.</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_wrinkle_collar">(-) W. Col.</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_open_bond">(-) Op. Bond</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_overcement">(-) Overcement</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_kotor">(-) Kotor</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_heel">(-) Heel</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_overbuffing">(-) Overbuff.</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_defect_outsole">(-) Outsole</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_wrinkle_lasting">(-) W. Last.</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-xs" id="kurangi_a_grade">(-) A Grade</a></center></th>
                            <th><center><a href="?BA=TablebcGrade&id_fi=<?php echo $fetchDataDok['id_fi']; ?>" class="btn btn-success btn-xs" target="_Blank">Show</center></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <input type="hidden" name="id_fi" value="<?php echo $fetchDataDok['id_fi']; ?>">
                            <td><input name="defect_cut" class="form-control input-sm" type="Number" id="defect_cut" value="<?php echo $fetchDataDefect['defect_cut']; ?>"></td>
                            <td><input name="benang_pjg" class="form-control input-sm" type="Number" id="benang_pjg" value="<?php echo $fetchDataDefect['benang_pjg']; ?>"></td>
                            <td><input name="langkah_jht" class="form-control input-sm" type="Number" id="langkah_jht" value="<?php echo $fetchDataDefect['langkah_jht']; ?>"></td>
                            <td><input name="wrinkle_collar" class="form-control input-sm" type="Number" id="wrinkle_collar" value="<?php echo $fetchDataDefect['wrinkle_collar']; ?>"></td>
                            <td><input name="open_bond" class="form-control input-sm" type="Number" id="open_bond" value="<?php echo $fetchDataDefect['open_bond']; ?>"></td>
                            <td><input name="overcement" class="form-control input-sm" type="Number" id="overcement" value="<?php echo $fetchDataDefect['overcement']; ?>"></td>
                            <td><input name="kotor" class="form-control input-sm" type="Number" id="kotor" value="<?php echo $fetchDataDefect['kotor']; ?>"></td>
                            <td><input name="heel" class="form-control input-sm" type="Number" id="heel" value="<?php echo $fetchDataDefect['heel']; ?>"></td>
                            <td><input name="overbuffing" class="form-control input-sm" type="Number" id="overbuffing" value="<?php echo $fetchDataDefect['overbuffing']; ?>"></td>
                            <td><input name="defect_outsole" class="form-control input-sm" type="Number" id="defect_outsole" value="<?php echo $fetchDataDefect['defect_outsole']; ?>"></td>
                            <td><input name="wrinkle_lasting" class="form-control input-sm" type="Number" id="wrinkle_lasting" value="<?php echo $fetchDataDefect['wrinkle_lasting']; ?>"></td>
                            <td><input name="a_grade" class="form-control input-sm" type="Number" id="a_grade" value="<?php echo $fetchDataDefect['a_grade']; ?>"></td>
                            <td><input name="bc_grade" class="form-control input-sm" type="Number" id="bc_grade" value="<?php echo $fetchDatabcgrade['id_fi']; ?>"></td>
                        </tr>
                    </tbody>
                </table>
                        <button class="btn btn-default btn-sm" type="submit" name="submit">Simpan</button>
                        <a href="?BA=TabelFI" class="btn btn-success btn-sm">Back</a>
                </div>
            </div>
        </div>
    </form>
    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include_once "Footer.php"; ?>
    <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>