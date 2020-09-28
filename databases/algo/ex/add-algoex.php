<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$q 	= $_POST["q-algoex"];
		$c1 = $_POST["c1-algoex"];
		$c2 = $_POST["c2-algoex"];
		$c3	= $_POST["c3-algoex"];
		$c4	= $_POST["c4-algoex"];
		$a	= $_POST["a-algoex"];
		$query	= "INSERT INTO algoex (ID_ALGOEX, Q_ALGOEX, C1_ALGOEX, C2_ALGOEX, C3_ALGOEX, C4_ALGOEX, A_ALGOEX) VALUES (NULL, '{$q}', '{$c1}', '{$c2}', '{$c3}', '{$c4}', '{$a}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-algoex.php");
		echo json_encode($result);
	}
	
 ?>