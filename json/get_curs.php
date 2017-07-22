<?php

	require('../config.php'); 
	require('../function.php');
 
 	if($_POST['naminal']){$naminal = $_POST['naminal'];}
 	$data = array();

	$data['curs'] = getCurs($naminal);
		
	 echo json_encode($data);
?>