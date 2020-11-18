<?php

	session_start();
	$session=array();
	$solution=array();
	for($i=0; $i<9; $i++){
		for($j=0; $j<9; $j++){
			//$name=$_SESSION['session'.$i.$j];
			$session[$i][$j] = $_SESSION['session'.$i.$j];
			$solution[$i][$j] = $_SESSION['solution'.$i.$j];
		}
	}

?>