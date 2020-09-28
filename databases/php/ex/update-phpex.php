<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id = $_POST["id-phpex"];
		$q 	= $_POST["q-phpex"];
		$c1 = $_POST["c1-phpex"];
		$c2 = $_POST["c2-phpex"];
		$c3	= $_POST["c3-phpex"];
		$c4	= $_POST["c4-phpex"];
		$a	= $_POST["a-phpex"];
		$query 	= "UPDATE phpex SET Q_PHPEX='{$q}', C1_PHPEX='{$c1}', C2_PHPEX='{$c2}', C3_PHPEX='{$c3}', C4_PHPEX='{$c4}', A_PHPEX='{$a}' WHERE ID_PHPEX='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-phpex.php");
		echo json_encode($result);
	}
	
 ?>