<?php 
	require_once('connect.php');
	require('fisher.php');

	$getid = mysqli_query($con, "SELECT ID_ALGOEX FROM algoex");
	$arr = array();
	while ($row = mysqli_fetch_array($getid, MYSQLI_NUM)) {
		$arr[] = $row[0];
	}

	$g = new fisheryates;
	$g->MyShuffle($arr);

	$ids = implode(',', $arr);

	$sql = "SELECT * FROM algoex WHERE ID_ALGOEX IN ($ids) ORDER BY FIELD(ID_ALGOEX, $ids)";
	$r = mysqli_query($con, $sql);
	$result = array();

	while ($row = mysqli_fetch_array($r)) {
		array_push($result, array(
			"ID"=>$row['ID_ALGOEX'],
			"Q"=>$row['Q_ALGOEX'],
			"C1"=>$row['C1_ALGOEX'],
			"C2"=>$row['C2_ALGOEX'],
			"C3"=>$row['C3_ALGOEX'],
			"C4"=>$row['C4_ALGOEX'],
			"A"=>$row['A_ALGOEX']
		));
	}

	echo json_encode(array('result'=>$result));

?>