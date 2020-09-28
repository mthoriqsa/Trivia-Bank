<?php 
	require_once('connect.php');
	require('fisher.php');

	//get id from database
	$getid = mysqli_query($con, "SELECT ID_ALGOEZ FROM algoez");
	$arr = array();
	while ($row = mysqli_fetch_array($getid, MYSQLI_NUM)) {
		$arr[] = $row[0];
	}

	//echo "Scratch : ";
	//print_r($arr);
	//echo "<br>";
	//echo "<br>";

	//call Fisher-Yates algorithm to shuffle id
	//$g = new fisheryates;
	//$g->MyShuffle($arr);

	//echo "Shuffled : ";
	//print_r($arr);
	//echo "<br>";
	//echo "<br>";

	//implode the arrays so it able to put in the query
	$ids = implode(',', $arr);

	//get all data from database where id has been shuffled
	$sql = "SELECT * FROM algoez WHERE ID_ALGOEZ IN ($ids) ORDER BY FIELD(ID_ALGOEZ, $ids)";
	//$sql = "SELECT * FROM algoez WHERE ID_ALGOEZ IN (".implode(',',$arr).") ORDER BY FIELD(ID_ALGOEZ, ".implode(',',$arr).")";
	$r = mysqli_query($con, $sql);
	$result = array();

	while ($row = mysqli_fetch_array($r)) {
		array_push($result, array(
			"ID"=>$row['ID_ALGOEZ'],
			"Q"=>$row['Q_ALGOEZ'],
			"C1"=>$row['C1_ALGOEZ'],
			"C2"=>$row['C2_ALGOEZ'],
			"C3"=>$row['C3_ALGOEZ'],
			"C4"=>$row['C4_ALGOEZ'],
			"A"=>$row['A_ALGOEZ']
		));
	}

	//print query result in JSON
	echo json_encode(array('result'=>$result));

?>