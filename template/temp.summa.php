<?php 
	if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} 
	$info = getMainStatistic();
	$pribil_info = number_format($info[0]['kdv_add'] - $info[0]['minus'], 8, '.', '');
	$pribil_baks_info = $pribil_info * $info[0]['kurs'];
	$procent_plus_info = number_format($pribil_baks_info/($info[0]['hash']*BUY_HASH/100), 1, '.', '').'%/день';
	$days_info = number_format(100/$procent_plus_info*100/$pribil_baks_info, 0, '', ' ');
?>
			</div>
			<div class="wrapper wrapper-content">
				<div id="panelindex">
					<div class="row">
						<div class="col-xs-12">
							<div class="ibox float-e-margins">
								<div class="ibox-title">
									<h5>Информация по аккаунту
										<span class="show_chart" data="hide" to="container"><i class="fa fa-bar-chart"></i></span>
										<span class="show_chart" data="hide"" to="container_chart"><i class="fa fa-area-chart"></i></span>
									</h5>
									<a class="btn btn-primary btn-xs m-l-sm pull-right" target="_blank" href="https://hashflare.io/r/B4573CB5">Регистрация на hashflare</a> 
								</div>
							<div id="container" style="width:100%; height:400px;"></div>
							<div id="container_chart" style="width:100%; height:400px;"></div>
								<div class="ibox-content">
									<div class="row">
										<div class="col-xs-12 col-md-4">
											<ul class="stat-list">
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
													</div>
													<h2 class="m-l-md m-b-none" style="font-weight:400;"><?php echo number_format($info[0]['balans'], 8, '.', ''); ?> BTC</h2><small class="m-l-md">Баланс</small>
												</li>
												<li>
													<hr>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;"><?php echo number_format($info[0]['kdv_add'], 8, '.', ''); ?> BTC</h3><small class="m-l-md">Последняя SHA-256 Выплата</small>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;"><?php echo number_format($info[1]['kdv_add'], 8, '.', ''); ?> BTC</h3><small class="m-l-md">SHA-256 Выплата вчера</small>
												</li>
											</ul>
										</div>
										<div class="col-xs-12 col-md-4 hidden-xxs">
											<ul class="stat-list">
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
													</div>
													<h2 class="m-l-md m-b-none" style="font-weight:400;"><?php echo INVEST+REINVEST.' $'; ?></h2><small class="m-l-md">Инвестировано всего</small>
												</li>
												<li>
													<hr>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;"><?php echo REINVEST.' $'; ?></h3><small class="m-l-md">Реинвестировано</small>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;"><?php echo INVEST.' $'; ?></h3><small class="m-l-md">Инвестировано</small>
												</li>
											</ul>
										</div>
										<div class="col-xs-12 col-md-4 hidden-xxs">
											<ul class="stat-list">
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
													</div>
													<h2 class="m-l-md m-b-none" style="font-weight:400;"><?php echo $procent_plus_info; ?></h2><small class="m-l-md">Окупаемость</small>
												</li>
												<li>
													<hr>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400; position: relative;">
														<span class="btc_chenge">
															<?php echo number_format(getCurs($simvol='USD'), 2, '.', ' '); ?>
																
														</span>
														<ul class="btc_change_select" data="hide">
															<li class="click_chenge_sec">
																<img src="/img/flag_ico/USD.png">
															</li>
														</ul>		
														<i class="fa fa-caret-down"></i>
														
														<ul class="btc_change_list">
															<li class="click_chenge_sec"><img src="/img/flag_ico/RUB.png"></li>
															<li class="click_chenge_sec"><img src="/img/flag_ico/EUR.png"></li>
															<li class="click_chenge_sec"><img src="/img/flag_ico/GBP.png"></li>
															<li class="click_chenge_sec"><img src="/img/flag_ico/UAH.png"></li>
														</ul>
													</h3><small class="m-l-md">Курс BTC</small>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;"><?php echo $days_info; ?></h3><small class="m-l-md">Осталось дней</small>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="ibox float-e-margins">
								<div class="ibox-title">
									<h5>Помощь проекту</h5>
								</div>
								<div class="ibox-content">
									<div class="row">
										<div class="col-xs-12 col-md-6">
											Кошелек BTC
										</div>										
										<div class="col-xs-12 col-md-6" style="text-align: right;">
											1JEN6bVWgWe4dbmpRJn5PfTUVgwWdjnWDC
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>