<?php 
	require_once('connect.php');
	require('fisher.php');

	$getid = mysqli_query($con, "SELECT ID_PHPEZ FROM phpez");
	$arr = array();
	while ($row = mysqli_fetch_array($getid, MYSQLI_NUM)) {
		$arr[] = $row[0];
	}

	$g = new fisheryates;
	$g->MyShuffle($arr);

	$ids = implode(',', $arr);

	$sql = "SELECT * FROM phpez WHERE ID_PHPEZ IN ($ids) ORDER BY FIELD(ID_PHPEZ, $ids)";
	$r = mysqli_query($con, $sql);
	$result = array();

	while ($row = mysqli_fetch_array($r)) {
		array_push($result, array(
			"ID"=>$row['ID_PHPEZ'],
			"Q"=>$row['Q_PHPEZ'],
			"C1"=>$row['C1_PHPEZ'],
			"C2"=>$row['C2_PHPEZ'],
			"C3"=>$row['C3_PHPEZ'],
			"C4"=>$row['C4_PHPEZ'],
			"A"=>$row['A_PHPEZ']
		));
	}

	echo json_encode(array('result'=>$result));

?>