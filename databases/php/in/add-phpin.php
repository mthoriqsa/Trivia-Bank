<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$q 	= $_POST["q-phpin"];
		$c1 = $_POST["c1-phpin"];
		$c2 = $_POST["c2-phpin"];
		$c3	= $_POST["c3-phpin"];
		$c4	= $_POST["c4-phpin"];
		$a	= $_POST["a-phpin"];
		$query	= "INSERT INTO phpin (ID_PHPIN, Q_PHPIN, C1_PHPIN, C2_PHPIN, C3_PHPIN, C4_PHPIN, A_PHPIN) VALUES (NULL, '{$q}', '{$c1}', '{$c2}', '{$c3}', '{$c4}', '{$a}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-phpin.php");
		echo json_encode($result);
	}
	
 ?>