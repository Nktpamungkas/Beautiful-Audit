<?php
	include 'connection/connection.php';
	$id_fi = $_GET['id_fi'];
	$query = mysql_query("SELECT * FROM final_inspection WHERE id_fi='$id_fi'");
	$data = mysql_fetch_array($query);
?>
<?php
	include 'connection/connection.php';
	$id_fi = $_GET['id_fi'];
	$queryKriteria = mysql_query("SELECT * FROM defect WHERE id_fi='$id_fi'");
	$dataKriteria = mysql_fetch_array($queryKriteria);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		<?php echo "Nomor FI : ".$data['id_fi']; ?>
	</title>
	<style type="text/css">
        body {
              background: rgb(204,204,204); 
            }
            page {
              background: white;
              display: block;
              margin: 0 auto;
              margin-bottom: 0.5cm;
              box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
            }
            page[size="A4"] {  
              width: 21cm;
              height: 29.7cm; 
            }
            page[size="A4"][layout="portrait"] {
              width: 29.7cm;
              height: 21cm;  
            }
            page[size="A3"] {
              width: 29.7cm;
              height: 42cm;
            }
            page[size="A3"][layout="portrait"] {
              width: 42cm;
              height: 29.7cm;  
            }
            page[size="A5"] {
              width: 14.8cm;
              height: 21cm;
            }
            page[size="A5"][layout="portrait"] {
              width: 21cm;
              height: 14.8cm;  
            }
            @media print {
              body, page {
                margin: 0;
                box-shadow: 0;
              }
            }

            table, td, th {
			    border: 1px solid black;
			}

			table {
			    border-collapse: collapse;
			    width: 80%;
			}

			th {
			    height: 50px;
			}
    </style>
</head>

<body onload="print();">
	<page size="letter" layout="lanscape">
		<div style="text-align: center;"><br>
			<span>
				<b>100% FINAL INSPECTION IN LINE REPORT</b><br>
				<?php echo "No. : ".$data['id_fi']; ?>
			</span>
		</div>

		<div style="text-align: left;"><br>
			<table align="center">
				<tr>
					<td>PLAN</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['plan']; ?></td>
					
					<td>CELL</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['cell']; ?></td>

					<td>ARTICLE</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['article']; ?></td>
				</tr>
				<tr>
					<td>MODEL</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['model']; ?></td>
					
					<td>BRAND</td>
					<td width="150"><?php echo $data['brand']; ?></td>

					<td>PO</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['po']; ?></td>
				</tr>
				<tr>
					<td>TOTAL QTY ORDER</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['total_qty_order']; ?></td>
					
					<td>CUSTOMER</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['customer']; ?></td>

					<td>DATE FINAL INSPECTION</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['date_fi']; ?></td>
				</tr>
				<tr>
					<td>TIME FINAL INSPECTION</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['time_fi']; ?></td>

					
					<td>FINAL QC</td>
					<td width="150" style="font-weight: bold;"><?php echo $data['final_qc']; ?></td>

					<td></td>
					<td width="150" style="font-weight: bold;"></td>
				</tr>
			</table>
			<br>
			<table align="center">		
				<tr>
					<td>Defect Cut</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['defect_cut']; ?></td>
				</tr>
				<tr>
					<td>Benang Panjang</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['benang_pjg']; ?></td>
				</tr>
				<tr>
					<td>Langkah Jahit</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['langkah_jht']; ?></td>
				</tr>
				<tr>
					<td>Wrinkle Collar</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['wrinkle_collar']; ?></td>
				</tr>
				<tr>
					<td>Open Bond</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['open_bond']; ?></td>
				</tr>
				<tr>
					<td>Overcement</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['overcement']; ?></td>
				</tr>
				<tr>
					<td>Kotor</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['kotor']; ?></td>
				</tr>
				<tr>
					<td>Heel</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['heel']; ?></td>
				</tr>
				<tr>
					<td>Overbuffing</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['overbuffing']; ?></td>
				</tr>
				<tr>
					<td>Defect Outsole</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['defect_outsole']; ?></td>
				</tr>
				<tr>
					<td>Wrinkle Lasting</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['wrinkle_lasting']; ?></td>
				</tr>
				<tr>
					<td>A Grade</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['a_grade']; ?></td>
				</tr>
				<tr>
					<td>Total Defect</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['total_defect']; ?></td>
				</tr>
				<tr>
					<td>Percent Defect</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['hasil']; echo "%"?></td>
				</tr>
				<tr>
					<td>B/C Grade</td>
					<td width="150" style="font-weight: bold;"><?php echo $dataKriteria['bc_grade']; ?></td>
				</tr>
			</table>
			<br>
			<div style="text-align: center;"><br>
				<span>
					<b>LAPORAN SEPATU B GRADE / C GRADE</b>
				</span>
			</div>
			<table align="center">
                <thead>
                    <tr>
                    	<th align="center">Grade</th>
                        <th align="center">Model</th>
                        <th align="center">Art</th>
                        <th align="center">No Po</th>
                        <th align="center">Size</th>
                        <th align="center">Alasan</th>
                    </tr>
                </thead>
                <tbody>
                	<?php
                    	include_once 'connection/connection.php';

                        $dataDok = mysql_query("SELECT * FROM bc_grade WHERE id_fi='$_GET[id_fi]' ");
                        while ($fetchDataDok = mysql_fetch_array($dataDok)){
                    ?>
                    <tr>
                    	<td align="center" width="60"><?php echo $fetchDataDok['grade']; ?></td>
                        <td align="center"><?php echo $fetchDataDok['model']; ?></td>
                        <td align="center"><?php echo $fetchDataDok['art']; ?></td>
                        <td align="center"><?php echo $fetchDataDok['no_po']; ?></td>
                        <td align="center" width="50"><?php echo $fetchDataDok['size']; ?></td>
                        <td width="300"><?php echo $fetchDataDok['alasan_reject']; ?></td>
                    </tr>
                    <?php  }?>   
                </tbody>
            </table>
            <br>
            <table align="center">
				<tr align="center">
					<td><b>Kepala Bagian,</b></td>
					<td><b>Manager,</b></td>
					
				</tr>
				<tr>
					<td>&nbsp;<br>&nbsp;<br>&nbsp;</td>
					<td>&nbsp;<br>&nbsp;<br>&nbsp;</td>
				</tr>
				<tr>
				<tr align="center">
					<td>Sri Sumiyati</td>
					<td>Sri Inti</td>

					
					
				</tr>
			</table>
        </div>
    </page>
</body>
</html>