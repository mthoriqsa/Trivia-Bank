<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$q 	= $_POST["q-phpex"];
		$c1 = $_POST["c1-phpex"];
		$c2 = $_POST["c2-phpex"];
		$c3	= $_POST["c3-phpex"];
		$c4	= $_POST["c4-phpex"];
		$a	= $_POST["a-phpex"];
		$query	= "INSERT INTO phpex (ID_PHPEX, Q_PHPEX, C1_PHPEX, C2_PHPEX, C3_PHPEX, C4_PHPEX, A_PHPEX) VALUES (NULL, '{$q}', '{$c1}', '{$c2}', '{$c3}', '{$c4}', '{$a}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-phpex.php");
		echo json_encode($result);
	}
	
 ?>