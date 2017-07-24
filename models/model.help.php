<?php

	if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();}
//------------------------------------------------------------------------

	$data = getMainStatistic();

	function getProc($data){
		$i = 0;
		$procent = 0;
		foreach ($data as $item) {
			$i++;
			$procent += $item['minus'] / ($item['kdv_add']/100);
		}
		return number_format($procent/$i, 1, '.', '');
	}

	$m_proc = getProc($data);

//------------------------------------------------------------------------
	$title = "Помощь настоящему майнеру | Эксперемент с HashFlare";

?>