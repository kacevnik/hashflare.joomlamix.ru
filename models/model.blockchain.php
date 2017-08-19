<?php

	if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();}
//------------------------------------------------------------------------

	function getStatBlockchain(){
		$arr = file_get_contents("https://api.blockchain.info/stats");
		$arr = json_decode($arr);
		return $arr;
	}

	function howMineBTC($countBlock){
		$price = 50;
		$res   = 0;
		$c     = $countBlock;
		do{
			if($c > 210000){
				$c     = $c - 210000; 
				$res   = $res + 210000 * $price; 
				$price = $price / 2; 
			}else{
				$res   = $res + $c * $price;
				$c     = $c - 210000;
			}
		}while($c > 0);
		return $res;
	}

	$statBlockChain  = getStatBlockchain();

	$totalMineBlocks = $statBlockChain->n_blocks_total;
	$mineBTC         = howMineBTC($statBlockChain->n_blocks_total);
	$capital         = $mineBTC * $statBlockChain->market_price_usd;
	$heshrate        = $statBlockChain->hash_rate / 1000;
	$mineBTCproc     = $mineBTC / 210000;
	$difficulty      = $statBlockChain->difficulty;
	$upDiffBlocks    = 2016 - $totalMineBlocks%2016;
	$upDiffDays      = floor($upDiffBlocks /144);
	$upDiffHours     = floor(86400 *($upDiffBlocks /144 - floor($upDiffBlocks /144)) / 3600);
	$med_time        = $statBlockChain->minutes_between_blocks;
	$up_expos        = 210000 - $totalMineBlocks%210000;
	$up_expos_days   = floor($up_expos /144);
	$up_expos_hours  = floor(86400 *($up_expos /144 - floor($up_expos /144)) / 3600);
 


//------------------------------------------------------------------------
	$title = "Статистика Blockchain | Эксперемент с HashFlare";


?>