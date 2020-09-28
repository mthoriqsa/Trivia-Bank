<?php 
	include '../../../connect.php';
	//include '../../database/pegawai/data-pegawai.php';
	if(isset($_POST['btn-submit'])){
		$id = $_POST["id-algoin"];
		$q 	= $_POST["q-algoin"];
		$c1 = $_POST["c1-algoin"];
		$c2 = $_POST["c2-algoin"];
		$c3	= $_POST["c3-algoin"];
		$c4	= $_POST["c4-algoin"];
		$a	= $_POST["a-algoin"];
		$query 	= "UPDATE algoin SET Q_ALGOIN='{$q}', C1_ALGOIN='{$c1}', C2_ALGOIN='{$c2}', C3_ALGOIN='{$c3}', C4_ALGOIN='{$c4}', A_ALGOIN='{$a}' WHERE ID_ALGOIN='{$id}'";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-algoin.php");
		echo json_encode($result);
	}
	
 ?>