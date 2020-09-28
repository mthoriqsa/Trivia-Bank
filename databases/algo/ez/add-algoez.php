<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$q 	= $_POST["q-algoez"];
		$c1 = $_POST["c1-algoez"];
		$c2 = $_POST["c2-algoez"];
		$c3	= $_POST["c3-algoez"];
		$c4	= $_POST["c4-algoez"];
		$a	= $_POST["a-algoez"];
		$query	= "INSERT INTO algoez (ID_ALGOEZ, Q_ALGOEZ, C1_ALGOEZ, C2_ALGOEZ, C3_ALGOEZ, C4_ALGOEZ, A_ALGOEZ) VALUES (NULL, '{$q}', '{$c1}', '{$c2}', '{$c3}', '{$c4}', '{$a}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-algoez.php");
		echo json_encode($result);
	}
	
 ?>