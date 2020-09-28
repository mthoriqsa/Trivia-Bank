<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id = $_POST["id-phpez"];
		$q 	= $_POST["q-phpez"];
		$c1 = $_POST["c1-phpez"];
		$c2 = $_POST["c2-phpez"];
		$c3	= $_POST["c3-phpez"];
		$c4	= $_POST["c4-phpez"];
		$a	= $_POST["a-phpez"];
		$query 	= "UPDATE phpez SET Q_PHPEZ='{$q}', C1_PHPEZ='{$c1}', C2_PHPEZ='{$c2}', C3_PHPEZ='{$c3}', C4_PHPEZ='{$c4}', A_PHPEZ='{$a}' WHERE ID_PHPEZ='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-phpez.php");
		echo json_encode($result);
	}
	
 ?>