<?php
	$pages = array('index', 'settings', 'video', 'back');
	if($_GET['page']){$page = $_GET['page'];}else{$page = 'index';}
	if(in_array($page, $pages)){
		$model_page = 'models/model.'.$page.'.php';
		$view_page  = 'views/view.'.$page.'.php';
	}else{
		echo "<h1>Error Pages</h1>"; exit();
	}
?>