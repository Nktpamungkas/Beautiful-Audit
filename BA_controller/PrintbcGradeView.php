<!DOCTYPE html>
<html lang="en">

<head>
	<title>
		LAPORAN SEPATU B GRADE / C GRADE
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
				<b>LAPORAN SEPATU B GRADE / C GRADE</b>
			</span>
		</div>

		<div style="text-align: left;"><br>
			<table align="center">
				<thead>
					<tr>
						<td width="80" rowspan="2" align="center">Grade</td>
						<td width="80" rowspan="2" align="center">Model</td>
						<td width="100" rowspan="2" align="center">Art</td>
						<td width="120" rowspan="2" align="center">No. PO</td>
						<td width="50" rowspan="2" align="center">Size</td>
						<td width="75" rowspan="2" align="center">KR/KN</td>
					<tr>
						<td width="200" rowspan="2" align="center">Alasan Reject</td>
					</tr>
				</thead>
				<tbody>
					<?php
						include 'connection/connection.php';
						$id_fi = $_GET['id_fi'];
						$query = mysql_query("SELECT * FROM bc_grade WHERE id_fi='$id_fi'");
						while ($data = mysql_fetch_array($query)){
					?>
					<tr>
						<td width="80" rowspan="2" align="center" style="font-weight: bold; font-size: 12px;"><?php echo $data['grade']; ?></td>
						<td width="80" rowspan="2" align="center" style="font-weight: bold; font-size: 12px;"><?php echo $data['model']; ?></td>
						<td width="100" rowspan="2" align="center" style="font-weight: bold; font-size: 12px;"><?php echo $data['art']; ?></td>
						<td width="120" rowspan="2" align="center" style="font-weight: bold; font-size: 12px;"><?php echo $data['no_po']; ?></td>
						<td width="50" rowspan="2" align="center" style="font-weight: bold; font-size: 12px;"><?php echo $data['size']; ?></td>
						<td width="50" rowspan="2" align="center" style="font-weight: bold; font-size: 12px;"><?php echo $data['kr_kn']; ?></td>
						<td width="200" rowspan="2" align="center" style="font-weight: bold; font-size: 12px;"><?php echo $data['alasan_reject']; ?></td>
					</tr>
					<tr></tr>
					<?php } ?>

				</tbody>
			</table>
		</div>
	</page>
</body>
</html>