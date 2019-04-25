<?php
    include_once 'connection/connection.php';
    $id_ba = $_GET['id_ba'];
    
    $dataDok = mysql_query("SELECT * FROM BA WHERE id_ba='$id_ba'");
    if(mysql_num_rows($dataDok) == 0){
        echo '<script>window.history.back()</script>';
    }else{
        $fetchDataDok = mysql_fetch_assoc($dataDok);   
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

        function kriteria(){
            var myForm = document.form1;

            var beautiful=eval(myForm.beautiful.value);
            var quantity_inspec=eval(myForm.quantity_inspec.value);

            var rating1 = beautiful / quantity_inspec;
            var rating2 = rating1 * 5;

            var angka = rating2;
            hasil = angka.toFixed(2);
            myForm.kriteria.value = hasil;
        }
    </script>

</head>
<body onload="kriteria()">
    
    <!-- HEADER END-->
    <!-- LOGO HEADER END-->
    <?php include_once "MenuBar.php"; ?>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row" style="background-color: lightgray">
                <div class="col-md-12">
                    <h2 class="page-head-line" style="color: black;">Beautiful Product Audit Report FTW (Matrix evalution)</h2>
                </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">PLAN/CELL</label> -->
                        <input class="form-control input-sm" type="text" value="<?php echo $fetchDataDok['plan']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">PLAN/CELL</label> -->
                        <input class="form-control input-sm" type="text" value="<?php echo $fetchDataDok['cell']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">BRAND</label> -->
                        <input class="form-control input-sm" type="text" value="<?php echo $fetchDataDok['id_ba']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">BRAND</label> -->
                        <input class="form-control input-sm" type="text" placeholder="BRAND" value="<?php echo $fetchDataDok['brand']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">PO NUMBER</label> -->
                        <input class="form-control input-sm" type="text" placeholder="PO NUMBER" value="<?php echo $fetchDataDok['po_number']; ?>" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">LO</label> -->
                        <input class="form-control input-sm" type="text" placeholder="LO" value="<?php echo $fetchDataDok['lo']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">MODEL NAME</label> -->
                        <input class="form-control input-sm" type="text" placeholder="MODEL NAME" value="<?php echo $fetchDataDok['model_name']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">PO TOTAL QUANTITY</label> -->
                        <input class="form-control input-sm" type="text" placeholder="PO TOTAL QUANTITY" value="<?php echo $fetchDataDok['po_total_qty']; ?>" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">AUDIT DATE</label> -->
                        <input class="form-control input-sm" type="Date" placeholder="AUDIT DATE" value="<?php echo $fetchDataDok['audit_date']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">ARTICLE #</label> -->
                        <input class="form-control input-sm" type="text" placeholder="ARTICLE #" value="<?php echo $fetchDataDok['article']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">QUANTITY INSPECTED(10% OUTPUT)</label> -->
                        <input class="form-control input-sm" name="quantity_inspec" type="text" placeholder="QUANTITY INSPECTED(10% OUTPUT)" value="<?php echo $fetchDataDok['quantity_inspected']; ?>" disabled>
                    </div>

                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">AUDITOR NAME</label> -->
                        <input class="form-control input-sm" type="text" placeholder="AUDITOR NAME" value="<?php echo $fetchDataDok['auditor_name']; ?>" disabled>
                    </div>
                    <div class="form-group col-md-4">
                        <!-- <label for="inputsm">CATEGORY</label> -->
                        <input class="form-control input-sm" type="text" placeholder="CATEGORY" value="<?php echo $fetchDataDok['category']; ?>" disabled>
                    </div>
                   <div class="form-group col-md-4">
                        <!-- <label for="inputsm">TIME</label> -->
                        <input class="form-control input-sm" type="TIME" placeholder="TIME" value="<?php echo $fetchDataDok['time_ba']; ?>" disabled>
                   </div>

                   <div class="form-group col-md-4">
                        <!-- <label for="inputsm">TIME</label> -->
                        <input class="form-control input-sm" type="text" placeholder="Nomor QC" name="nomorqc" value="<?php echo $fetchDataDok['nomor_qc']; ?>" disabled>
                    </div>
            </div>
                <hr>
            <form action="?BA=PorsesKretiria" method="post" name="form1">
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
                        <input type="hidden" name="id_ba" value="<?php echo $fetchDataDok['id_ba']; ?>">
                        <input name="quantity_inspec" type="hidden" value="<?php echo $fetchDataDok['quantity_inspected']; ?>">
                        <td><input name="c1" class="form-control input-sm" type="Number" id="Criteria1" value="0" min="0"></td>
                        <td><input name="c2" class="form-control input-sm" type="Number" id="Criteria2" value="0" min="0"></td>
                        <td><input name="c3" class="form-control input-sm" type="Number" id="Criteria3" value="0" min="0"></td>
                        <td><input name="c4" class="form-control input-sm" type="Number" id="Criteria4" value="0" min="0"></td>
                        <td><input name="c5" class="form-control input-sm" type="Number" id="Criteria5" value="0" min="0"></td>
                        <td><input name="c6" class="form-control input-sm" type="Number" id="Criteria6" value="0" min="0"></td>
                        <td><input name="c7" class="form-control input-sm" type="Number" id="Criteria7" value="0" min="0"></td>
                        <td><input name="c8" class="form-control input-sm" type="Number" id="Criteria8" value="0" min="0"></td>
                        <td><input name="c9" class="form-control input-sm" type="Number" id="Criteria9" value="0" min="0"></td>
                        <td><input name="beautiful" class="form-control input-sm" type="Number" id="Beautiful" value="0" min="0"></td>
                    </tr>
                </tbody>
            </table>
                    <button class="btn btn-default btn-sm" type="submit" name="submit">Simpan</button>
                    <hr>
                    <input name="kriteria" class="form-control input-sm" type="text" id="kriteria">
            </form>
                    <button class="btn btn-default btn-sm"" type="hitung" name="hitung" onclick="kriteria()">Hitung Kriteria</button>
        </div>
    </div>
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