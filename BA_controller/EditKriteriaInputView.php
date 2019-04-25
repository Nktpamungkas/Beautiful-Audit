<?php
    include_once 'connection/connection.php';
    $id_ba = $_GET['id_ba'];
    $dataDok = mysql_query("SELECT * FROM ba WHERE id_ba='$id_ba'");
    $fetchDataDok = mysql_fetch_assoc($dataDok);   

?>
<?php
    include_once 'connection/connection.php';
    $id_ba = $_GET['id_ba'];
    $dataDok = mysql_query("SELECT * FROM kriteria WHERE id_ba='$id_ba'");
    $fetchDataDokKriteria = mysql_fetch_assoc($dataDok);   
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

    <script src="assets/js/jquery.min.js"></script>
    <script type="text/javascript">
        // Criteria 1
        $(document).ready(function(){
        $("#tambahCriteria1").click(function(){
            var x = jQuery('#Criteria1').val();
            var x = parseInt(x) + 1;
            $('#Criteria1').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiCriteria1").click(function(){
            var x = jQuery('#Criteria1').val();
            var x = parseInt(x) - 1;
            $('#Criteria1').val(x);
            alert(s);
            });
        });

        // Criteria 2
        $(document).ready(function(){
        $("#tambahCriteria2").click(function(){
            var x = jQuery('#Criteria2').val();
            var x = parseInt(x) + 1;
            $('#Criteria2').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiCriteria2").click(function(){
            var x = jQuery('#Criteria2').val();
            var x = parseInt(x) - 1;
            $('#Criteria2').val(x);
            alert(s);
            });
        });

        // Criteria 3
        $(document).ready(function(){
        $("#tambahCriteria3").click(function(){
            var x = jQuery('#Criteria3').val();
            var x = parseInt(x) + 1;
            $('#Criteria3').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiCriteria3").click(function(){
            var x = jQuery('#Criteria3').val();
            var x = parseInt(x) - 1;
            $('#Criteria3').val(x);
            alert(s);
            });
        });

        // Criteria 4
        $(document).ready(function(){
        $("#tambahCriteria4").click(function(){
            var x = jQuery('#Criteria4').val();
            var x = parseInt(x) + 1;
            $('#Criteria4').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiCriteria4").click(function(){
            var x = jQuery('#Criteria4').val();
            var x = parseInt(x) - 1;
            $('#Criteria4').val(x);
            alert(s);
            });
        });

        // Criteria 5
        $(document).ready(function(){
        $("#tambahCriteria5").click(function(){
            var x = jQuery('#Criteria5').val();
            var x = parseInt(x) + 1;
            $('#Criteria5').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiCriteria5").click(function(){
            var x = jQuery('#Criteria5').val();
            var x = parseInt(x) - 1;
            $('#Criteria5').val(x);
            alert(s);
            });
        });

        // Criteria 6
        $(document).ready(function(){
        $("#tambahCriteria6").click(function(){
            var x = jQuery('#Criteria6').val();
            var x = parseInt(x) + 1;
            $('#Criteria6').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiCriteria6").click(function(){
            var x = jQuery('#Criteria6').val();
            var x = parseInt(x) - 1;
            $('#Criteria6').val(x);
            alert(s);
            });
        });

        // Criteria 7
        $(document).ready(function(){
        $("#tambahCriteria7").click(function(){
            var x = jQuery('#Criteria7').val();
            var x = parseInt(x) + 1;
            $('#Criteria7').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiCriteria7").click(function(){
            var x = jQuery('#Criteria7').val();
            var x = parseInt(x) - 1;
            $('#Criteria7').val(x);
            alert(s);
            });
        });

        // Criteria 8
        $(document).ready(function(){
        $("#tambahCriteria8").click(function(){
            var x = jQuery('#Criteria8').val();
            var x = parseInt(x) + 1;
            $('#Criteria8').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiCriteria8").click(function(){
            var x = jQuery('#Criteria8').val();
            var x = parseInt(x) - 1;
            $('#Criteria8').val(x);
            alert(s);
            });
        });

        // Criteria 9
        $(document).ready(function(){
        $("#tambahCriteria9").click(function(){
            var x = jQuery('#Criteria9').val();
            var x = parseInt(x) + 1;
            $('#Criteria9').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiCriteria9").click(function(){
            var x = jQuery('#Criteria9').val();
            var x = parseInt(x) - 1;
            $('#Criteria9').val(x);
            alert(s);
            });
        });

        // Beautiful
        $(document).ready(function(){
        $("#TambahBeautiful").click(function(){
            var x = jQuery('#Beautiful').val();
            var x = parseInt(x) + 1;
            $('#Beautiful').val(x);
            alert(s);
            });
        });

        $(document).ready(function(){
        $("#kurangiBeautiful").click(function(){
            var x = jQuery('#Beautiful').val();
            var x = parseInt(x) - 1;
            $('#Beautiful').val(x);
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
    <form action="?BA=PorsesEditKretiria" method="post">
        <div class="content-wrapper">
            <div class="container">
                <div class="row" style="background-color: lightgray">
                    <div class="col-md-12">
                        <h2 class="page-head-line" style="color: black;">Beautiful Product Audit Report FTW (Matrix evalution) : <?php echo $fetchDataDok['id_ba']; ?></h2>
                    </div>
                        <div class="form-group col-md-4">
                            <h6><label>PLAN</label></h6>
                            <input type="hidden" name="id_ba" value="<?php echo $fetchDataDok['id_ba']; ?>">
                            <input class="form-control input-sm" type="text" value="<?php echo $fetchDataDok['plan']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <h6><label>CELL</label></h6>
                            <input class="form-control input-sm" type="text" value="<?php echo $fetchDataDok['cell']; ?>" disabled>
                        </div>
                        <div class="form-group col-md-4">
                            <h6><label>BRAND</label></h6>
                            <input name="brand" class="form-control input-sm" type="text" placeholder="BRAND" value="<?php echo $fetchDataDok['brand']; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <h6><label>PO NUMBER</label></h6>
                            <input name="po_number" class="form-control input-sm" type="text" placeholder="PO NUMBER" value="<?php echo $fetchDataDok['po_number']; ?>">
                        </div>

                        <div class="form-group col-md-4">
                            <h6><label>LO</label></h6>
                            <input name="lo" class="form-control input-sm" type="text" placeholder="LO" value="<?php echo $fetchDataDok['lo']; ?>" >
                        </div>
                        <div class="form-group col-md-4">
                            <h6><label>MODEL NAME</label></h6>
                            <input name="model_name" class="form-control input-sm" type="text" placeholder="MODEL NAME" value="<?php echo $fetchDataDok['model_name']; ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <h6><label>PO TOTAL QUANTITY</label></h6>
                            <input name="po_total_qty" class="form-control input-sm" type="text" placeholder="PO TOTAL QUANTITY" value="<?php echo $fetchDataDok['po_total_qty']; ?>" >
                        </div>

                       <div class="form-group col-md-4">
                            <h6><label>AUDIT DATE</label></h6>
                            <input name="audit_date" class="form-control input-sm" type="Date" value="<?php echo $fetchDataDok['audit_date']; ?>" >
                        </div>
                        <div class="form-group col-md-4">
                            <h6><label>ARTICLE #</label></h6>
                            <input name="article" class="form-control input-sm" type="text" placeholder="ARTICLE #" value="<?php echo $fetchDataDok['article']; ?>" >
                        </div>
                        <div class="form-group col-md-4">
                            <h6><label>QUANTITY INSPECTED(10% OUTPUT)</label>
                            <input name="quantity_inspec" class="form-control input-sm" type="text" placeholder="QUANTITY INSPECTED(10% OUTPUT)" value="<?php echo $fetchDataDok['quantity_inspected']; ?>" >
                        </div>

                        <div class="form-group col-md-4">
                            <h6><label>AUDITOR NAME</label></h6>
                            <input name="auditor_name" class="form-control input-sm" type="text" placeholder="AUDITOR NAME" value="<?php echo $fetchDataDok['auditor_name']; ?>" >
                        </div>
                        <div class="form-group col-md-4">
                            <h6><label>CATEGORY</label></h6>
                            <input name="category" class="form-control input-sm" type="text" placeholder="CATEGORY" value="<?php echo $fetchDataDok['category']; ?>" >
                        </div>
                       <div class="form-group col-md-4">
                            <h6><label>TIME</label></h6>
                            <input class="form-control input-sm" type="TIME" placeholder="TIME" value="<?php echo $fetchDataDok['time_ba']; ?>" disabled>
                       </div>

                       <div class="form-group col-md-4">
                            <h6><label>Nomor QC</label></h6>
                            <input name="nomor_qc" class="form-control input-sm" type="text" placeholder="Nomor QC" value="<?php echo $fetchDataDok['nomor_qc']; ?>" >
                        </div>
                </div>
                    <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="tambahCriteria1">(+) Criteria 1</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="tambahCriteria2">(+) Criteria 2 </a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="tambahCriteria3">(+) Criteria 3</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="tambahCriteria4">(+) Criteria 4</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="tambahCriteria5">(+) Criteria 5</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="tambahCriteria6">(+) Criteria 6</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="tambahCriteria7">(+) Criteria 7</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="tambahCriteria8">(+) Criteria 8</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="tambahCriteria9">(+) Criteria 9</a></center></th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="TambahBeautiful">(+) Beatiful</a></center></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiCriteria1">(-) Criteria 1</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiCriteria2">(-) Criteria 2</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiCriteria3">(-) Criteria 3</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiCriteria4">(-) Criteria 4</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiCriteria5">(-) Criteria 5</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiCriteria6">(-) Criteria 6</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiCriteria7">(-) Criteria 7</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiCriteria8">(-) Criteria 8</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiCriteria9">(-) Criteria 9</a></center>
                            </th>
                            <th><center><a href="#" class="btn btn-default btn-sm" id="kurangiBeautiful">(-) Beautiful</a></center>
                            </th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <tr>
                            <td><input name="c1" class="form-control input-sm" type="Number" id="Criteria1" value="<?php echo $fetchDataDokKriteria['c1']; ?>"></td>
                            <td><input name="c2" class="form-control input-sm" type="Number" id="Criteria2" value="<?php echo $fetchDataDokKriteria['c2']; ?>"></td>
                            <td><input name="c3" class="form-control input-sm" type="Number" id="Criteria3" value="<?php echo $fetchDataDokKriteria['c3']; ?>"></td>
                            <td><input name="c4" class="form-control input-sm" type="Number" id="Criteria4" value="<?php echo $fetchDataDokKriteria['c4']; ?>"></td>
                            <td><input name="c5" class="form-control input-sm" type="Number" id="Criteria5" value="<?php echo $fetchDataDokKriteria['c5']; ?>"></td>
                            <td><input name="c6" class="form-control input-sm" type="Number" id="Criteria6" value="<?php echo $fetchDataDokKriteria['c6']; ?>"></td>
                            <td><input name="c7" class="form-control input-sm" type="Number" id="Criteria7" value="<?php echo $fetchDataDokKriteria['c7']; ?>"></td>
                            <td><input name="c8" class="form-control input-sm" type="Number" id="Criteria8" value="<?php echo $fetchDataDokKriteria['c8']; ?>"></td>
                            <td><input name="c9" class="form-control input-sm" type="Number" id="Criteria9" value="<?php echo $fetchDataDokKriteria['c9']; ?>"></td>
                            <td><input name="beautiful" class="form-control input-sm" type="Number" id="Beautiful" value="<?php echo $fetchDataDokKriteria['beautiful']; ?>"></td>
                        </tr>
                    </tbody>
                </table>
                        <button class="btn btn-default btn-sm" type="submit" name="submit">Simpan</button>
                        <a href="?BA=TabelBA" class="btn btn-success btn-sm">Back</a>
            </div>
        </div>
    </form>

    <!-- CONTENT-WRAPPER SECTION END-->
    <?php include_once "Footer.php"; ?>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>

</body>
</html>