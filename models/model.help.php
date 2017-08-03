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

	$x = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h'];

	function check($array){
		foreach ($array as $key => $value) {
			$result[$value] = $result;
			if (count($result) > 1)
			array_shift($result);
		}

		echo '<pre>';
		print_r($result);
		echo '</pre>';
	}

	//check($x);

$data1 = [
    'parent.child.field' => 1,
    'parent.child.field2' => 2,
    'parent2.child.name' => 'test',
    'parent2.child2.name' => 'test',
    'parent2.child2.position' => 10,
    'parent3.child3.position' => 10,
];

function parsArray($array){
	$data = [];
	foreach($array as $key => $val) {
		$cursor = &$data;
		foreach(explode('.', $key) as $idx) { 
			$cursor = &$cursor[$idx]; 
		}
		$cursor = $val;
	}
	return $data;
}

?>