<?php 
	include '../../../connect.php';
	//echo json_encode($_POST);
		$query="DELETE FROM algoin WHERE ID_ALGOIN={$_GET['id_algoin']}";
	    $result = $myPDO->prepare($query);
	    if($result->execute()){
	    }
	    else{
	    	echo '<script language="javascript">alert("Data tidak dapat dihapus karena Foreign Key!")</script>';
	    }
	    //header("location:data-pegawai.php");
		//echo json_encode($result);
 ?>
 <script>
 	window.location.href = 'data-algoin.php'
 </script>