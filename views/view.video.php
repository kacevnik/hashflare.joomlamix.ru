<?php if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} ?>
<?php 

function invest($invest, $proc, $count_day, $proc_invest){
	$sum = 0;
	for($i = 0; $i < $count_day; $i++){
		echo 'день: ' . $i  . '<br>';
		echo 'доход в день: ' . $invest/100*$proc . 'руб.<br>';
		echo 'реинвестированно: ' . $invest/100*$proc*($proc_invest/100) . 'руб.<br>';
		echo 'заработано всего: ' . $sum += $invest/100*$proc*(1-$proc_invest/100) . 'руб.<br>';
		$invest = $invest + $invest/100*$proc*($proc_invest/100);
		echo '<br>вложенно всего: ' . $invest . 'руб.<br>';
		echo '<br>-----------------------<br>';
	}
}
//invest(88128, 0.4, 60 , 30);
?>
	<div class="row animated fadeInRight">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Видео история</h5>
				</div>
				<div class="ibox-content" style="overflow: hidden;">
					<?php 
						$i = 0;
						foreach ($all_video as $item) {
							$i++;
							if($i == 1 || $i%7 == 0){
					?>
					<div class="video_row row">
					<?php   } ?>
						<div class="col-md-4 col-lg-2 col-sm-12">
							<a data-fancybox href="https://www.youtube.com/watch?v=<?php echo $item['key_video']; ?>&amp;autoplay=1&amp;rel=0&amp;controls=0&amp;showinfo=0">
      							<img src="//img.youtube.com/vi/<?php echo $item['key_video']; ?>/maxresdefault.jpg" width="100%">
    						</a>
    						<div class="video_title"><?php echo $item['name_video']; ?></div>
						</div>
					<?php
						if($i%6 == 0){
					?>
					</div>
					<?php
						} }
					?>
				</div>
			</div>
		</div>
	</div>