<?php 
	require_once('connect.php');
	require('fisher.php');

	$getid = mysqli_query($con, "SELECT ID_CPPEZ FROM cppez");
	$arr = array();
	while ($row = mysqli_fetch_array($getid, MYSQLI_NUM)) {
		$arr[] = $row[0];
	}

	$g = new fisheryates;
	$g->MyShuffle($arr);

	$ids = implode(',', $arr);

	$sql = "SELECT * FROM cppez WHERE ID_CPPEZ IN ($ids) ORDER BY FIELD(ID_CPPEZ, $ids)";
	$r = mysqli_query($con, $sql);
	$result = array();

	while ($row = mysqli_fetch_array($r)) {
		array_push($result, array(
			"ID"=>$row['ID_CPPEZ'],
			"Q"=>$row['Q_CPPEZ'],
			"C1"=>$row['C1_CPPEZ'],
			"C2"=>$row['C2_CPPEZ'],
			"C3"=>$row['C3_CPPEZ'],
			"C4"=>$row['C4_CPPEZ'],
			"A"=>$row['A_CPPEZ']
		));
	}

	echo json_encode(array('result'=>$result));

?>