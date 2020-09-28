<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$q 	= $_POST["q-cppex"];
		$c1 = $_POST["c1-cppex"];
		$c2 = $_POST["c2-cppex"];
		$c3	= $_POST["c3-cppex"];
		$c4	= $_POST["c4-cppex"];
		$a	= $_POST["a-cppex"];
		$query	= "INSERT INTO cppex (ID_CPPEX, Q_CPPEX, C1_CPPEX, C2_CPPEX, C3_CPPEX, C4_CPPEX, A_CPPEX) VALUES (NULL, '{$q}', '{$c1}', '{$c2}', '{$c3}', '{$c4}', '{$a}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-cppex.php");
		echo json_encode($result);
	}
	
 ?>