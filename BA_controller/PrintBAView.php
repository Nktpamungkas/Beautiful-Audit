<?php
	include 'connection/connection.php';
	$id_ba = $_GET['id_ba'];
	$query = mysql_query("SELECT * FROM ba WHERE id_ba='$id_ba'");
	$data = mysql_fetch_array($query);
?>
<?php
	include 'connection/connection.php';
	$id_ba = $_GET['id_ba'];
	$queryKriteria = mysql_query("SELECT * FROM kriteria WHERE id_ba='$id_ba'");
	$dataKriteria = mysql_fetch_array($queryKriteria);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		<?php echo "Nomor BA : ".$data['id_ba']; ?>
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
    </style>
</head>

<body onload="print();">
	<page size="letter" layout="lanscape">
		<div style="text-align: center;"><br>
			<span>
				<b>Beautiful Product Audit Report FTW (MATRIX EVALUTION)</b>
			</span>
		</div>

		<div style="text-align: left;"><br>
			<table>
				<tr>
					<td>Plan</td>
					<td>:</td>
					<td><?php echo $data['plan']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
					<td>Cell</td>
					<td>:</td>
					<td><?php echo $data['cell']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>

					<td>Brand</td>
					<td>:</td>
					<td><?php echo $data['brand']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>PO Number</td>
					<td>:</td>
					<td><?php echo $data['po_number']; ?></td>
				</tr>
				<tr>
					<td>LO</td>
					<td>:</td>
					<td><?php echo $data['lo']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
					<td>Model Name</td>
					<td>:</td>
					<td><?php echo $data['model_name']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>PO Total Quantity</td>
					<td>:</td>
					<td><?php echo $data['po_total_qty']; ?></td>
				</tr>
				<tr>
					<td>Audit Date</td>
					<td>:</td>
					<td><?php echo $data['audit_date']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
					<td>Article #</td>
					<td>:</td>
					<td><?php echo $data['article']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Quantity Inspected (10% Output)</td>
					<td>:</td>
					<td><?php echo $data['quantity_inspected']; ?></td>
				</tr>
				<tr>
					<td>Auditor Name</td>
					<td>:</td>
					<td><?php echo $data['auditor_name']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					
					<td>Category</td>
					<td>:</td>
					<td><?php echo $data['category']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Time</td>
					<td>:</td>
					<td><?php echo $data['time_ba']; ?></td>
				</tr>
				<tr>
					<td>Nomor QC</td>
					<td>:</td>
					<td><?php echo $data['nomor_qc']; ?></td>
				</tr>

				<tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>

					<td>Criteria 1</td>
					<td>:</td>
					<td><?php echo $dataKriteria['c1']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Beautiful</td>
					<td>:</td>
					<td><?php echo $dataKriteria['beautiful']; ?></td>
				</tr>

				<tr>
					<td>Criteria 2</td>
					<td>:</td>
					<td><?php echo $dataKriteria['c2']; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>Rating</td>
					<td>:</td>
					<td><?php echo $dataKriteria['rating']; ?></td>
				</tr>
					
				<tr>
					<td>Criteria 3</td>
					<td>:</td>
					<td><?php echo $dataKriteria['c3']; ?></td>
				</tr>
					
				<tr>
					<td>Criteria 4</td>
					<td>:</td>
					<td><?php echo $dataKriteria['c4']; ?></td>
				</tr>
					
				<tr>
					<td>Criteria 5</td>
					<td>:</td>
					<td><?php echo $dataKriteria['c5']; ?></td>
				</tr>

				<tr>
					<td>Criteria 6</td>
					<td>:</td>
					<td><?php echo $dataKriteria['c6']; ?></td>
				</tr>	

				<tr>
					<td>Criteria 7</td>
					<td>:</td>
					<td><?php echo $dataKriteria['c7']; ?></td>
				</tr>

				<tr>
					<td>Criteria 8</td>
					<td>:</td>
					<td><?php echo $dataKriteria['c8']; ?></td>
				</tr>
				
				<tr>
					<td>Criteria 9</td>
					<td>:</td>
					<td><?php echo $dataKriteria['c9']; ?></td>
				</tr>
			</table>

				<tr>
					<td><br><br><br></td>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td><b>Kepala Bagian,&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></td>
					<td><b>Manager,</b></td>
					<td><br><br><br><br></td>
					<td> Sri Sumiyati </td>
					<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sri Inti</td>
				</tr>
</body>