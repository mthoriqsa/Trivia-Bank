<?php 

	class fisheryates
	{

		function MyShuffle(&$arr) {

	         for($i = 0; $i < sizeof($arr); ++$i) {
	             $r = rand(0, $i);
	             $tmp = $arr[$i];
	             $arr[$i] = $arr[$r];
	             $arr[$r] = $tmp;  
	         }

	         return $arr;

		}
	}

?>