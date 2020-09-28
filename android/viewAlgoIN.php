<?php 
	require_once('connect.php');
	require('fisher.php');

	$getid = mysqli_query($con, "SELECT ID_ALGOIN FROM algoin");
	$arr = array();
	while ($row = mysqli_fetch_array($getid, MYSQLI_NUM)) {
		$arr[] = $row[0];
	}

	$g = new fisheryates;
	$g->MyShuffle($arr);

	$ids = implode(',', $arr);

	$sql = "SELECT * FROM algoin WHERE ID_ALGOIN IN ($ids) ORDER BY FIELD(ID_ALGOIN, $ids)";
	$r = mysqli_query($con, $sql);
	$result = array();

	while ($row = mysqli_fetch_array($r)) {
		array_push($result, array(
			"ID"=>$row['ID_ALGOIN'],
			"Q"=>$row['Q_ALGOIN'],
			"C1"=>$row['C1_ALGOIN'],
			"C2"=>$row['C2_ALGOIN'],
			"C3"=>$row['C3_ALGOIN'],
			"C4"=>$row['C4_ALGOIN'],
			"A"=>$row['A_ALGOIN']
		));
	}

	echo json_encode(array('result'=>$result));

?>