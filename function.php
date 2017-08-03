<?php
	$pages = array('index', 'settings', 'video', 'back', 'help');
	if($_GET['page']){$page = $_GET['page'];}else{$page = 'index';}
	if(in_array($page, $pages)){
		$model_page = 'models/model.'.$page.'.php';
		$view_page  = 'views/view.'.$page.'.php';
	}else{
		echo "<h1>Error Pages</h1>"; exit();
	}

/***
*  Функция преобразования даты из UNIX метки в формат DD may YYYY
*
***/

	function getDateOnUnix_1($unix){
		$arr = array('янв', 'фев', 'мар', 'апр', 'май', 'июн', 'июл', 'авг', 'сен', 'окт', 'ноя', 'дек');
		return date("d", $unix).' '.$arr[date("n", $unix)-1].' '.date("Y", $unix);
	}

/***
*  Функция получения всех данных по балансу
*
***/

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

/***
*  Получение курсов Валют по API с сайта coindesk.com
*
***/

	function getCurs($simvol='USD'){
		$arr =  json_decode(file_get_contents('http://api.coindesk.com/v1/bpi/currentprice/'.$simvol.'.json'));
		return $arr->bpi->$simvol->rate_float;
	}

/***
*  Функция получения данных для Графика.
*
***/

	function jsonData($type){
		global $db;
		$string = '[';
		$sql = "SELECT kdv_add, minus, balans FROM kdv_balans ORDER BY id";
        $res = mysqli_query($db, $sql);
        if(mysqli_num_rows($res)){
            $myr = mysqli_fetch_assoc($res); 
            $i    = 0;
            $proc = 0;
            do{
            	if($type == 'balans'){
            		$string = $string.$myr["balans"].', '; 
            	}
            	if($type == 'max'){
            		$string = $string.$myr["kdv_add"].', ';
            	}
                if($type == 'min'){
                    $string = $string.$myr["minus"].', ';
                }             	
                if($type == 'm_proc'){
                    if($myr["minus"] == 0 || $myr["kdv_add"] == 0){
                        $str_arr = explode(',', $string);
                        $string  = $string . trim($str_arr[count($str_arr) - 2]) . ', ';
                    }else{
                        $string  = $string.number_format($myr["minus"] / ($myr["kdv_add"]/100), 1, '.', '') . ', ';
                    }
                }                
                if($type == 'proc'){
                    $i++;
                    if($myr["minus"] == 0 || $myr["kdv_add"] == 0){
                        $str_arr = explode(',', $string);
                        $proc += trim($str_arr[count($str_arr) - 2]);
                      }else{
                        $proc += number_format($myr["minus"] / ($myr["kdv_add"]/100), 1, '.', '');
                    }
                    $string = $string . number_format($proc/$i, 1, '.', '') . ', ';
            	}        
            }
            while($myr = mysqli_fetch_assoc($res)); 
            $string = $string.'];';              
        }
        else{return false;}
        return $string;
	}	

?>