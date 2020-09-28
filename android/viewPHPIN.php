<?php 
	require_once('connect.php');
	require('fisher.php');

	$getid = mysqli_query($con, "SELECT ID_PHPIN FROM phpin");
	$arr = array();
	while ($row = mysqli_fetch_array($getid, MYSQLI_NUM)) {
		$arr[] = $row[0];
	}

	$g = new fisheryates;
	$g->MyShuffle($arr);

	$ids = implode(',', $arr);

	$sql = "SELECT * FROM phpin WHERE ID_PHPIN IN ($ids) ORDER BY FIELD(ID_PHPIN, $ids)";
	$r = mysqli_query($con, $sql);
	$result = array();

	while ($row = mysqli_fetch_array($r)) {
		array_push($result, array(
			"ID"=>$row['ID_PHPIN'],
			"Q"=>$row['Q_PHPIN'],
			"C1"=>$row['C1_PHPIN'],
			"C2"=>$row['C2_PHPIN'],
			"C3"=>$row['C3_PHPIN'],
			"C4"=>$row['C4_PHPIN'],
			"A"=>$row['A_PHPIN']
		));
	}

	echo json_encode(array('result'=>$result));

?>