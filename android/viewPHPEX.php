<?php 
	require_once('connect.php');
	require('fisher.php');

	$getid = mysqli_query($con, "SELECT ID_PHPEX FROM phpex");
	$arr = array();
	while ($row = mysqli_fetch_array($getid, MYSQLI_NUM)) {
		$arr[] = $row[0];
	}

	$g = new fisheryates;
	$g->MyShuffle($arr);

	$ids = implode(',', $arr);

	$sql = "SELECT * FROM phpex WHERE ID_PHPEX IN ($ids) ORDER BY FIELD(ID_PHPEX, $ids)";
	$r = mysqli_query($con, $sql);
	$result = array();

	while ($row = mysqli_fetch_array($r)) {
		array_push($result, array(
			"ID"=>$row['ID_PHPEX'],
			"Q"=>$row['Q_PHPEX'],
			"C1"=>$row['C1_PHPEX'],
			"C2"=>$row['C2_PHPEX'],
			"C3"=>$row['C3_PHPEX'],
			"C4"=>$row['C4_PHPEX'],
			"A"=>$row['A_PHPEX']
		));
	}

	echo json_encode(array('result'=>$result));

?>