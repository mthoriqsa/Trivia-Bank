<?php 
	require_once('connect.php');
	require('fisher.php');

	$getid = mysqli_query($con, "SELECT ID_CPPEX FROM cppex");
	$arr = array();
	while ($row = mysqli_fetch_array($getid, MYSQLI_NUM)) {
		$arr[] = $row[0];
	}

	$g = new fisheryates;
	$g->MyShuffle($arr);

	$ids = implode(',', $arr);

	$sql = "SELECT * FROM cppex WHERE ID_CPPEX IN ($ids) ORDER BY FIELD(ID_CPPEX, $ids)";
	$r = mysqli_query($con, $sql);
	$result = array();

	while ($row = mysqli_fetch_array($r)) {
		array_push($result, array(
			"ID"=>$row['ID_CPPEX'],
			"Q"=>$row['Q_CPPEX'],
			"C1"=>$row['C1_CPPEX'],
			"C2"=>$row['C2_CPPEX'],
			"C3"=>$row['C3_CPPEX'],
			"C4"=>$row['C4_CPPEX'],
			"A"=>$row['A_CPPEX']
		));
	}

	echo json_encode(array('result'=>$result));

?>