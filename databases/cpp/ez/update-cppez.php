<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id = $_POST["id-cppez"];
		$q 	= $_POST["q-cppez"];
		$c1 = $_POST["c1-cppez"];
		$c2 = $_POST["c2-cppez"];
		$c3	= $_POST["c3-cppez"];
		$c4	= $_POST["c4-cppez"];
		$a	= $_POST["a-cppez"];
		$query 	= "UPDATE cppez SET Q_CPPEZ='{$q}', C1_CPPEZ='{$c1}', C2_CPPEZ='{$c2}', C3_CPPEZ='{$c3}', C4_CPPEZ='{$c4}', A_CPPEZ='{$a}' WHERE ID_CPPEZ='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-cppez.php");
		echo json_encode($result);
	}
	
 ?>