<?php

	require('../config.php'); 
	require('../function.php');
 
 	if($_POST['sum']){$sum = $_POST['sum']; $sun = trim($sum);}
 	if($_POST['proc']){$proc = $_POST['proc']; $proc = trim($proc);}
 	if($_POST['days']){$days = $_POST['days']; $days = (int)trim($days);}
 	$data = array();

 	$data['data'] = array();

	$data['curs']          = getCurs('USD'); //курс BTC/$
	$data['sum']           = $sum;           //введенная сумма
	$data['btc']           = number_format($sum/$data['curs'], 8, '.', '');//BTC инвестированно
	$data['btc_one_hash']  = number_format(1.2/$data['curs'], 8, '.', '');//стоимость 0.01TH за BTC
	$data['count_hash']    = number_format($sum/1.2/100, 2, '.', '');//количество купленного TH

	$data['sour'] = json_decode(file_get_contents('https://alloscomp.com/bitcoin/calculator/json?hashrate=1000000000000'));

	$profit = 0;
	$data['count_hash_total'] = $data['count_hash'];
	$data['result'] = number_format(number_format($data['count_hash_total']*($data['sour']->coins_per_hour*24), 8, '.', '')*$data['curs'], 2, '.', '');
	$total_reinvest = 0;

	for($i = 0; $i < $days; $i++){
		$reinvest = 0;
		$data['data'][$i] = array();

		$profit_one_day = number_format((number_format($data['count_hash_total']*($data['sour']->coins_per_hour*24), 8, '.', '') - number_format($data['count_hash_total']*($data['sour']->coins_per_hour*24), 8, '.', '') / 100 * $proc) * $data['curs'], 3, '.', '');

		$data['data'][$i]['profit_per_day_btc'] = number_format($data['count_hash_total']*($data['sour']->coins_per_hour*24) - ($data['count_hash_total']*($data['sour']->coins_per_hour*24) / 100 * $proc), 8, '.', '');

		$data['data'][$i]['profit_per_day_usd'] = number_format(number_format($data['count_hash_total']*($data['sour']->coins_per_hour * 24 - $data['sour']->coins_per_hour * 24 / 100 * $proc), 8, '.', '') * $data['curs'], 3, '.', '');

		$profit = $profit + $profit_one_day;
		$data['data'][$i]['profit'] = $profit;
		if($profit > 1.2){
			$data['count_hash_total'] = $data['count_hash_total'] + floor($profit / 1.2)/100;
			$data['data'][$i]['count_hash_total'] = $data['count_hash_total'];
			$total_reinvest = $total_reinvest + floor($profit / 1.2) * 1.2;
			$reinvest = $reinvest + floor($profit / 1.2) * 1.2;
			while($profit > 1.2){
				$profit = $profit - 1.2;
			}
		}
		$data['data'][$i]['total_reinvest'] = $total_reinvest;
		$data['data'][$i]['reinvest'] = $reinvest;
	}

	$data['ost_profit'] = $profit;

	echo json_encode($data);
?>