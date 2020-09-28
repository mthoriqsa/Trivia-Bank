<?php 
	include '../../../connect.php';
	if(isset($_POST['btn-submit'])){
		$q 	= $_POST["q-cppin"];
		$c1 = $_POST["c1-cppin"];
		$c2 = $_POST["c2-cppin"];
		$c3	= $_POST["c3-cppin"];
		$c4	= $_POST["c4-cppin"];
		$a	= $_POST["a-cppin"];
		$query	= "INSERT INTO cppin (ID_CPPIN, Q_CPPIN, C1_CPPIN, C2_CPPIN, C3_CPPIN, C4_CPPIN, A_CPPIN) VALUES (NULL, '{$q}', '{$c1}', '{$c2}', '{$c3}', '{$c4}', '{$a}')";
	    $result = $myPDO->prepare($query);
	    $result->execute();
	    header("location:data-cppin.php");
		echo json_encode($result);
	}
	
 ?>