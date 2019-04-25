<?php
	if(isset($_POST['submit'])){
		include_once 'connection/connection.php';

		$id_fi = $_POST['id_fi'];
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

		$saveFolder = mysql_query("INSERT INTO defect(id_fi,defect_cut,benang_pjg,langkah_jht,wrinkle_collar,open_bond,overcement,kotor,heel,overbuffing,defect_outsole,wrinkle_lasting,a_grade,total_defect,hasil, bc_grade) VALUES('$id_fi','$defect_cut','$benang_pjg','$langkah_jht','$wrinkle_collar','$open_bond','$overcement','$kotor','$heel','$overbuffing','$defect_outsole','$wrinkle_lasting','$a_grade','$TotalDefect','$hasil3','$bc_grade')");
		$updateDefect = mysql_query("UPDATE final_inspection SET defect = '$hasil3', bc_grade = '$bc_grade' WHERE id_fi = '$id_fi'");
		if($saveFolder){
			header("Location: ?BA=Dashboard");
		} else {
			echo "QUERY ERROR";
		}
	} else{
		header("Location: ?");
	}
?> 