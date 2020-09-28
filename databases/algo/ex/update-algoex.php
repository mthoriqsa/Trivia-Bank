<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id = $_POST["id-algoex"];
		$q 	= $_POST["q-algoex"];
		$c1 = $_POST["c1-algoex"];
		$c2 = $_POST["c2-algoex"];
		$c3	= $_POST["c3-algoex"];
		$c4	= $_POST["c4-algoex"];
		$a	= $_POST["a-algoex"];
		$query 	= "UPDATE algoex SET Q_ALGOEX='{$q}', C1_ALGOEX='{$c1}', C2_ALGOEX='{$c2}', C3_ALGOEX='{$c3}', C4_ALGOEX='{$c4}', A_ALGOEX='{$a}' WHERE ID_ALGOEX='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-algoex.php");
		echo json_encode($result);
	}
	
 ?>