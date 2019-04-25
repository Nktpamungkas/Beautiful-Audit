<?php
	if(isset($_POST['submit'])){
		include_once 'connection/connection.php';
		$id_fi = $_POST['id_fi'];
		$article = $_POST['article'];
		$model = $_POST['model'];
		$brand = $_POST['brand'];
		$po = $_POST['po'];
		$total_qty_order = $_POST['total_qty_order'];
		$customer = $_POST['customer'];
		$final_qc = $_POST['final_qc'];

		$defect_cut = $_POST['defect_cut'];
		$benang_pjg = $_POST['benang_pjg'];
		$langkah_jht = $_POST['langkah_jht'];
		$wrinkle_collar = $_POST['wrinkle_collar'];
		$open_bond = $_POST['open_bond'];
		$overcement = $_POST['overcement'];
		$kotor = $_POST['kotor'];
		$heel = $_POST['heel'];
		$overbuffing = $_POST['overbuffing'];
		$defect_outsole = $_POST['defect_outsole'];
		$wrinkle_lasting = $_POST['wrinkle_lasting'];
		$a_grade = $_POST['a_grade'];
		$bc_grade = $_POST['bc_grade'];

		$TotalDefect = $defect_cut + $benang_pjg + $langkah_jht + $wrinkle_collar + $open_bond + $overcement + $kotor + $heel + $overbuffing + $defect_outsole + $wrinkle_lasting;

		$hasil1 = $a_grade + $TotalDefect;
		$hasil2 = $a_grade / $hasil1;
		$hasil3 = $hasil2 * 100;

		$updateFI = mysql_query("UPDATE final_inspection SET article = '$article',
															 model = '$model',
															 brand = '$brand',
															 po = '$po',
															 total_qty_order = '$total_qty_order',
															 customer = '$customer',
															 final_qc = '$final_qc',
															 bc_grade = '$bc_grade',
															 defect = '$hasil3'
														WHERE id_fi = '$id_fi'");
		$updateDefect = mysql_query("UPDATE defect SET defect_cut = '$defect_cut',
														benang_pjg = '$benang_pjg',
														langkah_jht = '$langkah_jht',
														wrinkle_collar = '$wrinkle_collar',
														open_bond = '$open_bond',
														overcement = '$overcement',
														kotor = '$kotor',
														heel = '$heel',
														overbuffing = '$overbuffing',
														defect_outsole = '$defect_outsole',
														wrinkle_lasting = '$wrinkle_lasting',
														a_grade = '$a_grade',
														total_defect = '$TotalDefect',
														hasil = '$hasil3',
														bc_grade = '$bc_grade'");
		if($updateFI && $updateDefect){
			header("Location: ?BA=TabelFI");
		} else {
            echo "QUERY ERROR";
        }
    } else {
    header("Location: ?");
}
?>