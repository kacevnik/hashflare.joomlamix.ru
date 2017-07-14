<?php

	if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();}
//------------------------------------------------------------------------

	function addData($add, $minus, $hash=0, $bay_hash, $balans, $comment='', $kod, $kurs){
		global $db;
		$bay_hash = $hash + $bay_hash;
		$sql = "INSERT INTO kdv_balans (unix_date, kdv_add, minus, balans, hash, bay_hash, kurs, comment) VALUES ('".TIMES."', '$add', '$minus', '$balans', '$hash', '$bay_hash', '$kurs', '$comment')";
		if(mysqli_query($db, $sql)){
			return true;
		}else{
			return false;
		}
	}

	if($_POST['submit']){
		if($_POST['add'])     {$add     = $_POST['add'];     $add     = (float)htmlspecialchars(trim($add));}
		if($_POST['minus'])   {$minus   = $_POST['minus'];   $minus   = (float)htmlspecialchars(trim($minus));}
		if($_POST['hash'])    {$hash    = $_POST['hash'];    $hash    = htmlspecialchars(trim($hash));}
		if($_POST['balans'])  {$balans  = $_POST['balans'];  $balans  = (float)htmlspecialchars(trim($balans));}
		if($_POST['kurs'])    {$kurs    = $_POST['kurs'];    $kurs    = (float)htmlspecialchars(trim($kurs));}
		if($_POST['comment']) {$comment = $_POST['comment']; $comment = htmlspecialchars(trim($comment));}
		if($_POST['kod'])     {$kod     = $_POST['kod'];     $kod     = htmlspecialchars(trim($kod));}

		if(!$add || !$minus || !$balans || !$kurs || !$kod){
			$_SESSION['error'] = '<div class="error_message">Заполните все поля!</div>';
			header("Location: index.php?page=settings");
			exit();
		}

		if($kod != date("H").'9564'){
			$_SESSION['error'] = '<div class="error_message">Код подтверждения неверный!</div>';
			header("Location: index.php?page=settings");
			exit();
		}

		if(addData($add, $minus, $hash, getMainStatistic()[0]["hash"], $balans, $comment, $kod, $kurs)){
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