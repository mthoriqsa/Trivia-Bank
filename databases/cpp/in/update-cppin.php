<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id = $_POST["id-cppin"];
		$q 	= $_POST["q-cppin"];
		$c1 = $_POST["c1-cppin"];
		$c2 = $_POST["c2-cppin"];
		$c3	= $_POST["c3-cppin"];
		$c4	= $_POST["c4-cppin"];
		$a	= $_POST["a-cppin"];
		$query 	= "UPDATE cppin SET Q_CPPIN='{$q}', C1_CPPIN='{$c1}', C2_CPPIN='{$c2}', C3_CPPIN='{$c3}', C4_CPPIN='{$c4}', A_CPPIN='{$a}' WHERE ID_CPPIN='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-cppin.php");
		echo json_encode($result);
	}
	
 ?>