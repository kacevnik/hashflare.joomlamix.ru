<?php

	if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();}
//------------------------------------------------------------------------

	function toFirstDateUpdate($date){
		return  $result = $date - $date%86400;
	}

	function addData($add, $minus, $hash_bay, $balans, $comment='', $kod, $kurs, $reinvest, $out){
		global $db;
		$hash = getMainStatistic()[0]["hash"] + getMainStatistic()[0]["bay_hash"];
		$sql = "INSERT INTO kdv_balans (unix_date, kdv_add, minus, balans, hash, bay_hash, kurs, comment, refinans, out_cash) VALUES ('" . toFirstDateUpdate(TIMES) . "', '$add', '$minus', '$balans', '$hash', '$hash_bay', '$kurs', '$comment', '$reinvest', '$out')";
		if(mysqli_query($db, $sql)){
			return true;
		}else{
			return false;
		}
	}

	if($_POST['submit']){
		if($_POST['add'])       {$add       = $_POST['add'];       $add         = (float)htmlspecialchars(trim($add));}
		if($_POST['minus'])     {$minus     = $_POST['minus'];     $minus       = (float)htmlspecialchars(trim($minus));}
		if($_POST['hash'])      {$hash      = $_POST['hash'];      $hash        = htmlspecialchars(trim($hash));}
		if($_POST['reinvest'])  {$reinvest  = $_POST['reinvest'];  $reinvest    = (float)htmlspecialchars(trim($reinvest));}
		if($_POST['out_cash'])  {$out_cash  = $_POST['out_cash'];  $out_cash    = (float)htmlspecialchars(trim($out_cash));}
		if($_POST['balans'])    {$balans    = $_POST['balans'];    $balans      = (float)htmlspecialchars(trim($balans));}
		if($_POST['kurs'])      {$kurs      = $_POST['kurs'];      $kurs        = (float)htmlspecialchars(trim($kurs));}
		if($_POST['comment'])   {$comment   = $_POST['comment'];   $comment     = htmlspecialchars(trim($comment));}
		if($_POST['kod'])       {$kod       = $_POST['kod'];       $kod         = htmlspecialchars(trim($kod));}

		$capcha = $_POST['g-recaptcha-response'];

	    $url_result = CAPCHA_URL . '?secret=' . SECRET . '&response='.$capcha.'&remoteip='.IP_USER;
	    $back_capcha = json_decode(file_get_contents($url_result));

        if($back_capcha->success == false){
            $_SESSION['error'] = '<div class="error_message">Подтвердите, что Вы не робот!</div>';
            header("Location: index.php?page=settings");
            exit(); 
        }

		if(!$add || !$minus || !$balans || !$kurs || !$kod){
			$_SESSION['error'] = '<div class="error_message">Заполните все поля!</div>';
			header("Location: index.php?page=settings");
			exit();
		}

		if($kod != date("H").'9564665'){
			$_SESSION['error'] = '<div class="error_message">Код подтверждения неверный!</div>';
			header("Location: index.php?page=settings");
			exit();
		}

		if(addData($add, $minus, $hash, $balans, $comment, $kod, $kurs, $reinvest, $out_cash)){
			$_SESSION['error'] = '<div class="error_message_plus">Данные добавлены!</div>';
			header("Location: index.php?page=settings");
			exit();

		}else{
			$_SESSION['error'] = '<div class="error_message">Ошибка добавления!</div>';
			header("Location: index.php?page=settings");
			exit();
		}
	}


//------------------------------------------------------------------------
	$title = "Настройки, добавить данные | Эксперемент с HashFlare";

?>