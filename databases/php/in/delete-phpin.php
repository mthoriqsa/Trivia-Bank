<?php 
	include '../../../connect.php';
	//echo json_encode($_POST);
		$query="DELETE FROM phpin WHERE ID_PHPIN={$_GET['id_phpin']}";
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
 	window.location.href = 'data-phpin.php'
 </script>