<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id = $_POST["id-algoez"];
		$q 	= $_POST["q-algoez"];
		$c1 = $_POST["c1-algoez"];
		$c2 = $_POST["c2-algoez"];
		$c3	= $_POST["c3-algoez"];
		$c4	= $_POST["c4-algoez"];
		$a	= $_POST["a-algoez"];
		$query 	= "UPDATE algoez SET Q_ALGOEZ='{$q}', C1_ALGOEZ='{$c1}', C2_ALGOEZ='{$c2}', C3_ALGOEZ='{$c3}', C4_ALGOEZ='{$c4}', A_ALGOEZ='{$a}' WHERE ID_ALGOEZ='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-algoez.php");
		echo json_encode($result);
	}
	
 ?>