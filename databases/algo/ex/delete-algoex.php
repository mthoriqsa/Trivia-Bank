<?php 
	include '../../../connect.php';
	//echo json_encode($_POST);
		$query="DELETE FROM algoex WHERE ID_ALGOEX={$_GET['id_algoex']}";
	    $result = $myPDO->prepare($query);
	    if($result->execute()){
	    }
	    else{
	    	echo '<script language="javascript">alert("Data tidak dapat dihapus karena Foreign Key!")</script>'
	    }
	    //header("location:data-pegawai.php");
		//echo json_encode($result);
 ?>
 <script>
 	window.location.href = 'data-algoex.php'
 </script>