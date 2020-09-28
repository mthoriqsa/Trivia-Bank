<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id = $_POST["id-phpin"];
		$q 	= $_POST["q-phpin"];
		$c1 = $_POST["c1-phpin"];
		$c2 = $_POST["c2-phpin"];
		$c3	= $_POST["c3-phpin"];
		$c4	= $_POST["c4-phpin"];
		$a	= $_POST["a-phpin"];
		$query 	= "UPDATE phpin SET Q_PHPIN='{$q}', C1_PHPIN='{$c1}', C2_PHPIN='{$c2}', C3_PHPIN='{$c3}', C4_PHPIN='{$c4}', A_PHPIN='{$a}' WHERE ID_PHPIN='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-phpin.php");
		echo json_encode($result);
	}
	
 ?>