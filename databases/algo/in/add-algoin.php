<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$q 	= $_POST["q-algoin"];
		$c1 = $_POST["c1-algoin"];
		$c2 = $_POST["c2-algoin"];
		$c3	= $_POST["c3-algoin"];
		$c4	= $_POST["c4-algoin"];
		$a	= $_POST["a-algoin"];
		$query	= "INSERT INTO algoin (ID_ALGOIN, Q_ALGOIN, C1_ALGOIN, C2_ALGOIN, C3_ALGOIN, C4_ALGOIN, A_ALGOIN) VALUES (NULL, '{$q}', '{$c1}', '{$c2}', '{$c3}', '{$c4}', '{$a}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-algoin.php");
		echo json_encode($result);
	}
	
 ?>