<?php 
	include '../../../connect.php';
	//echo json_encode($_POST);
		$query="DELETE FROM cppin WHERE ID_CPPIN={$_GET['id_cppin']}";
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
 	window.location.href = 'data-cppin.php'
 </script>