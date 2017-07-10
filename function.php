<?php
	$pages = array('index', 'settings', 'video', 'back');
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
?>