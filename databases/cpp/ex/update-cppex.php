<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id = $_POST["id-cppex"];
		$q 	= $_POST["q-cppex"];
		$c1 = $_POST["c1-cppex"];
		$c2 = $_POST["c2-cppex"];
		$c3	= $_POST["c3-cppex"];
		$c4	= $_POST["c4-cppex"];
		$a	= $_POST["a-cppex"];
		$query 	= "UPDATE cppex SET Q_CPPEX='{$q}', C1_CPPEX='{$c1}', C2_CPPEX='{$c2}', C3_CPPEX='{$c3}', C4_CPPEX='{$c4}', A_CPPEX='{$a}' WHERE ID_CPPEX='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-cppex.php");
		echo json_encode($result);
	}
	
 ?>