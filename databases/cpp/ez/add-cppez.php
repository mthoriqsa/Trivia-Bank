<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$q 	= $_POST["q-cppez"];
		$c1 = $_POST["c1-cppez"];
		$c2 = $_POST["c2-cppez"];
		$c3	= $_POST["c3-cppez"];
		$c4	= $_POST["c4-cppez"];
		$a	= $_POST["a-cppez"];
		$query	= "INSERT INTO cppez (ID_CPPEZ, Q_CPPEZ, C1_CPPEZ, C2_CPPEZ, C3_CPPEZ, C4_CPPEZ, A_CPPEZ) VALUES (NULL, '{$q}', '{$c1}', '{$c2}', '{$c3}', '{$c4}', '{$a}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-cppez.php");
		echo json_encode($result);
	}
	
 ?>