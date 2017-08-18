<?php

	if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();}
//------------------------------------------------------------------------

	function getAllVideo(){
		global $db;
		$arr = array();
		$sql = "SELECT * FROM kdv_video ORDER BY sort_video DESC";
        $res = mysqli_query($db, $sql);
        if(mysqli_num_rows($res)){
            $myr = mysqli_fetch_assoc($res); 
            do{
               $arr[] = $myr; 
            }
            while($myr = mysqli_fetch_assoc($res));               
        }
        else{return false;}
        return $arr;
	}

	$all_video = getAllVideo();



//------------------------------------------------------------------------
	$title = "Видео история | Эксперемент с HashFlare";

 //echo file_get_contents('https://bitcoinwisdom.com/bitcoin/difficulty');

?>