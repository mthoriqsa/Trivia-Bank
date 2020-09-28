<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$q 	= $_POST["q-phpez"];
		$c1 = $_POST["c1-phpez"];
		$c2 = $_POST["c2-phpez"];
		$c3	= $_POST["c3-phpez"];
		$c4	= $_POST["c4-phpez"];
		$a	= $_POST["a-phpez"];
		$query	= "INSERT INTO phpez (ID_PHPEZ, Q_PHPEZ, C1_PHPEZ, C2_PHPEZ, C3_PHPEZ, C4_PHPEZ, A_PHPEZ) VALUES (NULL, '{$q}', '{$c1}', '{$c2}', '{$c3}', '{$c4}', '{$a}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-phpez.php");
		echo json_encode($result);
	}
	
 ?>