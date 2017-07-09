<?php

	if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();}
//------------------------------------------------------------------------

	function getMainStatistic(){
		global $db;
		$arr = array();
		$sql = "SELECT * FROM kdv_balans ORDER BY id DESC";
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

//------------------------------------------------------------------------
	$title = "Статистика | Эксперемент с HashFlare";

	$show_statistic = getMainStatistic();


?>