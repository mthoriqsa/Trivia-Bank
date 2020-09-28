<?php 
	require_once('connect.php');
	require('fisher.php');

	$getid = mysqli_query($con, "SELECT ID_CPPIN FROM cppin");
	$arr = array();
	while ($row = mysqli_fetch_array($getid, MYSQLI_NUM)) {
		$arr[] = $row[0];
	}

	$g = new fisheryates;
	$g->MyShuffle($arr);

	$ids = implode(',', $arr);

	$sql = "SELECT * FROM cppin WHERE ID_CPPIN IN ($ids) ORDER BY FIELD(ID_CPPIN, $ids)";
	$r = mysqli_query($con, $sql);
	$result = array();

	while ($row = mysqli_fetch_array($r)) {
		array_push($result, array(
			"ID"=>$row['ID_CPPIN'],
			"Q"=>$row['Q_CPPIN'],
			"C1"=>$row['C1_CPPIN'],
			"C2"=>$row['C2_CPPIN'],
			"C3"=>$row['C3_CPPIN'],
			"C4"=>$row['C4_CPPIN'],
			"A"=>$row['A_CPPIN']
		));
	}

	echo json_encode(array('result'=>$result));

?>