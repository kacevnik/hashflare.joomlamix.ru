<?php require('config.php'); ?>
<?php require('template/temp.head.php'); ?>
<body>
	<div id="wrapper">
		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<div class="m-b-xl">
								<a href="/"><img src="/img/logo.png"></a>
							</div><span><img alt="kacevnik" class="img-circle" src="https://www.gravatar.com/avatar/5810e5ebff8612f3d2b1f935eaf07b0c?s=128&amp;d=mm&amp;r=g"></span> <span class="text-xs block text-white hyphenate"><br>
							<a class="__cf_email__" data-cfemail="d8b3b9bbbdaeb6b1b398a1b9b6bcbda0f6aaad" href="/cdn-cgi/l/email-protection">[email&#160;protected]</a></span>
						</div>
						<div class="logo-element">
							<a href="/"><img src="/img/logomini.png" style="width:30%;"></a>
						</div>
					</li>
					<li class="inactive">
						<a href="#"><i class="fa fa-shopping-cart pulse-orange"></i> <span class="nav-label pulse-orange">Купить хэшрейт</span> <span class="fa arrow pulse-orange"></span></a>
					</li>
					<li class="active">
						<a href="/panel"><i class="fa fa-th-large"></i> <span class="nav-label">Личный Кабинет</span></a>
					</li>
					<li class="inactive">
						<a href="/panel/history"><i class="fa fa-bars"></i> <span class="nav-label">История</span></a>
					</li>
					<li class="inactive">
						<a aria-controls="redeem" aria-expanded="false" class="redeem-toggle" data-target=".redeem" data-toggle="collapse"><i class="fa fa-star"></i> <span class="nav-label">Ваучер</span></a>
					</li>
					<li class="inactive">
						<a><i class="fa fa-arrows-alt"></i> <span class="nav-label">Рефералы</span> <span class="fa arrow"></span></a>
					</li>
					<li class="inactive">
						<a href="/panel/settings"><i class="fa fa-cogs"></i> <span class="nav-label">Настройки</span></a>
					</li>
					<li>
						<a href="#"><i class="fa fa-question"></i> <span class="nav-label">Помощь</span> <span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li>
								<a href="/contact-us" target="_blank">Свяжитесь с нами</a>
							</li>
							<li>
								<a href="http://support.hashflare.io/hc/ru" target="_blank">Частые вопросы</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="https://cryptopay.me/join/c7bb216e" target="_blank"><i class="fa fa-credit-card pulse-orange-rev"></i> <span class="nav-label pulse-orange-rev">Дебетовая карта BTC</span></a>
					</li>
					<li class="visible-xs">
						<a href="/logout"><i class="fa fa-sign-out"></i></a>
					</li>
				</ul>
			</div>
		</nav>
		<div class="gray-bg" id="page-wrapper">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize btn btn-primary" href="#"><i class="fa fa-bars"></i></a>
					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li class="dropdown">
							<a aria-expanded="false" aria-haspopup="true" class="dropdown-toggle" data-toggle="dropdown" href="#" role="button">Русский <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li class="">
									<a href="?lang=eng"><img alt="English" src="/img/flags/eng.png"> English</a>
								</li>
								<li class="active">
									<a href="?lang=rus"><img alt="Русский" src="/img/flags/rus.png"> Русский</a>
								</li>
								<li class="">
									<a href="?lang=deu"><img alt="Deutsch" src="/img/flags/deu.png"> Deutsch</a>
								</li>
								<li class="">
									<a href="?lang=ita"><img alt="Italiano" src="/img/flags/ita.png"> Italiano</a>
								</li>
								<li class="">
									<a href="?lang=spa"><img alt="Español" src="/img/flags/spa.png"> Español</a>
								</li>
								<li class="">
									<a href="?lang=por"><img alt="Português" src="/img/flags/por.png"> Português</a>
								</li>
								<li class="">
									<a href="?lang=ell"><img alt="Ελληνικά" src="/img/flags/ell.png"> Ελληνικά</a>
								</li>
								<li class="">
									<a href="?lang=trk"><img alt="Türkçe" src="/img/flags/trk.png"> Türkçe</a>
								</li>
								<li class="">
									<a href="?lang=jpn"><img alt="日本語" src="/img/flags/jpn.png"> 日本語</a>
								</li>
								<li class="">
									<a href="?lang=cmn"><img alt="官話" src="/img/flags/cmn.png"> 官話</a>
								</li>
								<li class="">
									<a href="?lang=geo"><img alt="ქართული" src="/img/flags/geo.png"> ქართული</a>
								</li>
							</ul>
						</li>
						<li>
							<a class="no-mobile hidden-xs" href="/logout"><i class="fa fa-sign-out"></i> Выйти</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="wrapper wrapper-content">
				<div id="panelindex">
					<input id="usdprice" type="hidden" value="0.00039977980128545"> <input id="btcprice" type="hidden" value="2501.377">
					<div class="row">
						<div class="col-xs-12">
							<div class="widget no-padding">
								<div class="p-sm collapse redeem" style="border: 1px solid #dee1e2;">
									<form accept-charset="utf-8" action="/panel/code" class="" id="CampaignIndexForm" method="post" name="CampaignIndexForm">
										<div style="display:none;">
											<input name="_method" type="hidden" value="POST">
										</div>
										<div class="row">
											<div class="col-sm-6 col-lg-4">
												<h2 class="m-t-none m-b-xs" style="color:#5a93c4;">Активировать код</h2>
											</div>
											<div class="col-sm-6 col-lg-4">
												<div class="form-group required m-b-xs required">
													<input class="form-control m-n" id="CampaignCode" maxlength="25" name="data[Campaign][code]" placeholder="Код" required="required" type="text">
												</div>
											</div>
											<div class="col-sm-12 col-lg-4">
												<div class="form-group m-b-xs">
													<div class="submit">
														<input class="btn btn-success btn-block" type="submit" value="Активировать">
													</div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12">
							<div class="ibox float-e-margins">
								<div class="ibox-title">
									<h5>BTC Баланс</h5><a class="btn btn-primary btn-xs m-l-sm pull-right" data-target="#reinvestModal" data-toggle="modal">Реинвестировать</a> <span class="btn btn-white btn-xs m-l-sm pull-right" data-container="body" data-content='Account hold &lt;a href="https://hashflare.zendesk.com/hc/ru/articles/202879272-Why-am-I-unable-to-withdraw-funds-from-my-account-balance" rel="nofollow" target="_blank"&gt;FAQ&lt;/a&gt;' data-html="true" data-placement="left" data-toggle="popover" data-trigger="focus" tabindex="0">Вывод</span>
								</div>
								<div class="ibox-content">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-3">
											<ul class="stat-list">
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
													</div>
													<h2 class="m-l-md m-b-none" style="font-weight:400;">0.00000793 BTC</h2><small class="m-l-md">Баланс</small>
												</li>
												<li>
													<hr>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;">0.00000334 BTC</h3><small class="m-l-md">Последняя SHA-256 Выплата</small>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;">0 BTC</h3><small class="m-l-md">Последняя Scrypt Выплата</small>
												</li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-9 hidden-xxs">
											<div class="flot-chart">
												<div class="flot-chart-content" id="flot-balance"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><input id="shaprice" type="hidden" value="0.1200">
					<div class="row">
						<div class="col-xs-12">
							<div class="widget style1">
								<div class="row">
									<h2 id="sha"><a aria-controls="sha-row" aria-expanded="false" class="header-toggle" data-target="#sha-row" data-toggle="collapse"><span class="fa fa-angle-down"></span> <span class="fa fa-angle-right"></span> SHA-256</a> <a aria-controls="purchase-sha" aria-expanded="false" class="purchase-toggle" data-target=".purchase-sha" data-toggle="collapse"><i class="fa fa-shopping-cart text-success"></i></a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="collapse in" id="sha-row">
						<div class="row collapse purchase-sha">
							<div class="col-xs-12">
								<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
									<div>
										<div class="row">
											<div class="col-xs-12">
												<h3 class="text-center p-xs" style="color:#5a93c4;">Выберите хэшрейт</h3>
												<div class="col-xs-12">
													<div class="uislider m-t m-b" data-max="100000" data-min="0" data-start="0" data-step="10" data-type="sha" data-unit="giga" id="slider-sha"></div>
												</div>
											</div>
										</div>
										<div class="row hidden-xs hidden-sm">
											&nbsp;
										</div>
										<div class="row hidden-xs hidden-sm">
											&nbsp;
										</div>
										<div class="row purchase-sha" id="collapse-sha">
											<div class="col-xs-12">
												<div class="widget style1">
													<form accept-charset="utf-8" action="/panel/purchase" class="form-horizontal" id="PurchaseIndexForm" method="post" name="PurchaseIndexForm">
														<div style="display:none;">
															<input name="_method" type="hidden" value="POST">
														</div><input id="PurchaseProduct" name="data[Purchase][product]" type="hidden" value="1"><input class="slider-sha-total" id="PurchaseAmount" name="data[Purchase][amount]" type="hidden" value="0">
														<div class="hidden-md hidden-lg text-center well well-sm m-b-sm" style="padding: 7px;">
															<span class="slider-sha-usd">0</span> USD или <span class="slider-sha-btc">0</span> BTC
														</div>
														<div class="row">
															<div class="col-xs-12 col-sm-6 col-md-3 m-b-sm"></div>
															<div class="hidden-xs hidden-sm col-md-offset-1 col-md-4 text-center well well-sm" style="padding: 7px;">
																<span class="slider-sha-usd">0</span> USD или <span class="slider-sha-btc">0</span> BTC
															</div>
															<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-3 m-b-sm">
																<button class="btn btn-success btn-block" type="submit">Дальше</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row collapse" id="collapse-sha-pool">
							<div class="col-xs-12">
								<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
									<div class="row m-l-xs m-r-xs m-t-n-md m-b-sm">
										<div class="col-xs-12">
											<h3 class="text-center p-sm" style="color:#5a93c4;">Пулы</h3>
											<form class="form-horizontal form-pools sha">
												<div class="pools"></div>
												<div class="form-group">
													<div class="col-xs-12">
														<button class="btn btn-primary add m-b-sm" style="display:none;" type="button"><span class="glyphicon glyphicon-plus-sign"></span> Добавить пул</button> <button class="btn btn-success save m-b-sm" data-loading-text="Saving..." style="display:none;" type="submit"><span class="glyphicon glyphicon-ok"></span> Сохранить</button> <button aria-controls="collapse-sha-pool" aria-expanded="true" class="btn btn-link m-b-sm cancel" data-target="#collapse-sha-pool" data-toggle="collapse" type="button"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
													</div>
												</div>
												<div class="template" style="display:none;">
													<div class="form-group pool">
														<div class="col-xs-10">
															<select class="form-control">
															</select>
														</div>
														<div class="col-xs-2">
															<button class="btn btn-danger remove" type="button"><span class="glyphicon glyphicon-remove"></span></button>
														</div>
														<div class="col-xs-10">
															<div class="slider"></div>
														</div>
														<div class="col-xs-2">
															<div class="slider-value"></div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="widget lazur-bg p-lg text-center m-n b-t b-b" style="background-color:#9ad1ed;margin-bottom:25px !important;">
									<div class="m-b-xl m-t-md">
										<br>
										<br>
										<i class="fa fa-flash fa-4x"></i>
										<h1 class="m-xs">0.01 TH/s</h1>
										<h3 class="font-bold no-margins">Хэшрейт<br>
										<br></h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Пулы</h5>
										<div class="ibox-tools">
											<a aria-controls="collapse-sha-pool" aria-expanded="false" class="pull-right" data-target="#collapse-sha-pool" data-toggle="collapse"><i class="fa fa-cog fa-lg"></i></a> <a data-container="body" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Хэшрейт"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div class="flot-chart small">
											<div class="flot-chart-content" id="flot-pools-sha"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Доходность за 1 TH/s</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прибыльность"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div class="flot-chart small">
											<div class="flot-chart-content" id="flot-profit-sha"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Прогноз доходности</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="If the BTC price and mining difficulty do not change, then this is how big would be your payout." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прогноз доходности"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<p class="p-n m-t-n-xxs"><span class="pull-right badge badge-info" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #9ad1ed" title="1 день">1д</span> 0.00000334 BTC = 0.01 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-primary" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 неделя">1н</span> 0.00002338 BTC = 0.06 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-success" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #A0F3BB" title="1 месяц">1м</span> 0.0001002 BTC = 0.25 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-danger" data-placement="left" data-toggle="tooltip" rel="tooltip" title="6 месяцев">6м</span> 0.0006012 BTC = 1.50 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n m-b-n-xxs"><span class="pull-right badge badge-warning" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 год">1г</span> 0.0012191 BTC = 3.05 USD</p>
									</div>
								</div>
							</div>
						</div>
					</div><input id="scryptprice" type="hidden" value="13.5000">
					<div class="row">
						<div class="col-xs-12">
							<div class="widget style1">
								<div class="row">
									<h2 id="scrypt"><a aria-controls="scrypt-row" aria-expanded="false" class="header-toggle" data-target="#scrypt-row" data-toggle="collapse"><span class="fa fa-angle-down"></span> <span class="fa fa-angle-right"></span> Scrypt</a> <a aria-controls="purchase-scrypt" aria-expanded="false" class="purchase-toggle" data-target=".purchase-scrypt" data-toggle="collapse"><i class="fa fa-shopping-cart text-success"></i></a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="collapse in" id="scrypt-row">
						<div class="row collapse purchase-scrypt">
							<div class="col-xs-12">
								<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
									<div>
										<div class="row">
											<div class="col-xs-12">
												<h3 class="text-center p-xs" style="color:#5a93c4;">Выберите хэшрейт</h3>
												<div class="col-xs-12">
													<div class="uislider m-t m-b" data-max="10000" data-min="0" data-start="0" data-step="1" data-type="scrypt" data-unit="mega" id="slider-scrypt"></div>
												</div>
											</div>
										</div>
										<div class="row hidden-xs hidden-sm">
											&nbsp;
										</div>
										<div class="row hidden-xs hidden-sm">
											&nbsp;
										</div>
										<div class="row purchase-scrypt" id="collapse-scrypt">
											<div class="col-xs-12">
												<div class="widget style1">
													<form accept-charset="utf-8" action="/panel/purchase" class="form-horizontal" id="PurchaseIndexForm" method="post" name="PurchaseIndexForm">
														<div style="display:none;">
															<input name="_method" type="hidden" value="POST">
														</div><input id="PurchaseProduct" name="data[Purchase][product]" type="hidden" value="2"><input class="slider-scrypt-total" id="PurchaseAmount" name="data[Purchase][amount]" type="hidden" value="0">
														<div class="hidden-md hidden-lg text-center well well-sm m-b-sm" style="padding: 7px;">
															<span class="slider-scrypt-usd">0</span> USD или <span class="slider-scrypt-btc">0</span> BTC
														</div>
														<div class="row">
															<div class="col-xs-12 col-sm-6 col-md-3 m-b-sm"></div>
															<div class="hidden-xs hidden-sm col-md-offset-1 col-md-4 text-center well well-sm" style="padding: 7px;">
																<span class="slider-scrypt-usd">0</span> USD или <span class="slider-scrypt-btc">0</span> BTC
															</div>
															<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-3 m-b-sm">
																<button class="btn btn-success btn-block" type="submit">Дальше</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row collapse" id="collapse-scrypt-pool">
							<div class="col-xs-12">
								<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
									<div class="row m-l-xs m-r-xs m-t-n-md m-b-sm">
										<div class="col-xs-12">
											<h3 class="text-center p-sm" style="color:#5a93c4;">Пулы</h3>
											<form class="form-horizontal form-pools scrypt">
												<div class="pools"></div>
												<div class="form-group">
													<div class="col-xs-12">
														<button class="btn btn-primary add m-b-sm" style="display:none;" type="button"><span class="glyphicon glyphicon-plus-sign"></span> Добавить пул</button> <button class="btn btn-success save m-b-sm" data-loading-text="Saving..." style="display:none;" type="submit"><span class="glyphicon glyphicon-ok"></span> Сохранить</button> <button aria-controls="collapse-scrypt-pool" aria-expanded="true" class="btn btn-link m-b-sm cancel" data-target="#collapse-scrypt-pool" data-toggle="collapse" type="button"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
													</div>
												</div>
												<div class="template" style="display:none;">
													<div class="form-group pool">
														<div class="col-xs-10">
															<select class="form-control">
															</select>
														</div>
														<div class="col-xs-2">
															<button class="btn btn-danger remove" type="button"><span class="glyphicon glyphicon-remove"></span></button>
														</div>
														<div class="col-xs-10">
															<div class="slider"></div>
														</div>
														<div class="col-xs-2">
															<div class="slider-value"></div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="widget lazur-bg p-lg text-center m-n b-t b-b" style="background-color:#9ad1ed;margin-bottom:25px !important;">
									<div class="m-b-xl m-t-md">
										<br>
										<br>
										<i class="fa fa-flash fa-4x"></i>
										<h1 class="m-xs">0 MH/s</h1>
										<h3 class="font-bold no-margins">Хэшрейт<br>
										<br></h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Пулы</h5>
										<div class="ibox-tools">
											<a aria-controls="collapse-scrypt-pool" aria-expanded="false" class="pull-right" data-target="#collapse-scrypt-pool" data-toggle="collapse"><i class="fa fa-cog fa-lg"></i></a> <a data-container="body" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Хэшрейт"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div class="flot-chart small">
											<div class="flot-chart-content" id="flot-pools-scrypt"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Доходность за 1 MH/s</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прибыльность"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div style="height: 170px;">
											<p class="well m-xs">У Вас еще не было начислений, невозможно отобразить доходность.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Прогноз доходности</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="If the BTC price and mining difficulty do not change, then this is how big would be your payout." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прогноз доходности"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<p class="p-n m-t-n-xxs"><span class="pull-right badge badge-info" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #9ad1ed" title="1 день">1д</span> 0 BTC = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-primary" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 неделя">1н</span> 0 BTC = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-success" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #A0F3BB" title="1 месяц">1м</span> 0 BTC = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-danger" data-placement="left" data-toggle="tooltip" rel="tooltip" title="6 месяцев">6м</span> 0 BTC = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n m-b-n-xxs"><span class="pull-right badge badge-warning" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 год">1г</span> 0 BTC = 0.00 USD</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-12">
							<div class="ibox float-e-margins">
								<div class="ibox-title">
									<h5>ETH Баланс</h5><span class="btn btn-white btn-xs m-l-sm pull-right" data-container="body" data-content="Account hold &lt;a href='https://hashflare.zendesk.com/hc/ru/articles/202879272-Why-am-I-unable-to-withdraw-funds-from-my-account-balance' rel='nofollow' target='_blank'&gt;FAQ&lt;/a&gt;" data-html="true" data-placement="left" data-toggle="popover" data-trigger="focus" tabindex="0">Вывод</span>
								</div>
								<div class="ibox-content">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-3">
											<ul class="stat-list">
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
													</div>
													<h2 class="m-l-md m-b-none" style="font-weight:400;">0 ETH</h2><small class="m-l-md">Баланс</small>
												</li>
												<li>
													<hr>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;">0 ETH</h3><small class="m-l-md">Последняя ETHASH Выплата</small>
												</li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-9 hidden-xxs">
											<div class="flot-chart">
												<div class="flot-chart-content" id="flot-eth-balance"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><input id="etherprice" type="hidden" value="0.0220">
					<div class="row">
						<div class="col-xs-12">
							<div class="widget style1">
								<div class="row">
									<h2 id="ether"><a aria-controls="ether-row" aria-expanded="false" class="header-toggle" data-target="#ether-row" data-toggle="collapse"><span class="fa fa-angle-down"></span> <span class="fa fa-angle-right"></span> ETHASH (ETH) - 1 год</a> <a aria-controls="purchase-ether" aria-expanded="false" class="purchase-toggle" data-target=".purchase-ether" data-toggle="collapse"><i class="fa fa-shopping-cart text-success"></i></a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="collapse in" id="ether-row">
						<div class="row collapse purchase-ether">
							<div class="col-xs-12">
								<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
									<div>
										<div class="row">
											<div class="col-xs-12">
												<h3 class="text-center p-xs" style="color:#5a93c4;">Выберите хэшрейт</h3>
												<div class="col-xs-12">
													<div class="uislider m-t m-b" data-max="1000000" data-min="0" data-start="0" data-step="100" data-type="ether" data-unit="kilo" id="slider-ether"></div>
												</div>
											</div>
										</div>
										<div class="row hidden-xs hidden-sm">
											&nbsp;
										</div>
										<div class="row hidden-xs hidden-sm">
											&nbsp;
										</div>
										<div class="row purchase-ether" id="collapse-ether">
											<div class="col-xs-12">
												<div class="widget style1">
													<form accept-charset="utf-8" action="/panel/purchase" class="form-horizontal" id="PurchaseIndexForm" method="post" name="PurchaseIndexForm">
														<div style="display:none;">
															<input name="_method" type="hidden" value="POST">
														</div><input id="PurchaseProduct" name="data[Purchase][product]" type="hidden" value="5"><input class="slider-ether-total" id="PurchaseAmount" name="data[Purchase][amount]" type="hidden" value="0">
														<div class="hidden-md hidden-lg text-center well well-sm m-b-sm" style="padding: 7px;">
															<span class="slider-ether-usd">0</span> USD или <span class="slider-ether-btc">0</span> BTC
														</div>
														<div class="row">
															<div class="col-xs-12 col-sm-6 col-md-3 m-b-sm"></div>
															<div class="hidden-xs hidden-sm col-md-offset-1 col-md-4 text-center well well-sm" style="padding: 7px;">
																<span class="slider-ether-usd">0</span> USD или <span class="slider-ether-btc">0</span> BTC
															</div>
															<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-3 m-b-sm">
																<button class="btn btn-success btn-block" type="submit">Дальше</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row collapse" id="collapse-ether-pool">
							<div class="col-xs-12">
								<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
									<div class="row m-l-xs m-r-xs m-t-n-md m-b-sm">
										<div class="col-xs-12">
											<h3 class="text-center p-sm" style="color:#5a93c4;">Пулы</h3>
											<form class="form-horizontal form-pools ether">
												<div class="pools"></div>
												<div class="form-group">
													<div class="col-xs-12">
														<button class="btn btn-primary add m-b-sm" style="display:none;" type="button"><span class="glyphicon glyphicon-plus-sign"></span> Добавить пул</button> <button class="btn btn-success save m-b-sm" data-loading-text="Saving..." style="display:none;" type="submit"><span class="glyphicon glyphicon-ok"></span> Сохранить</button> <button aria-controls="collapse-ether-pool" aria-expanded="true" class="btn btn-link m-b-sm cancel" data-target="#collapse-ether-pool" data-toggle="collapse" type="button"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
													</div>
												</div>
												<div class="template" style="display:none;">
													<div class="form-group pool">
														<div class="col-xs-10">
															<select class="form-control">
															</select>
														</div>
														<div class="col-xs-2">
															<button class="btn btn-danger remove" type="button"><span class="glyphicon glyphicon-remove"></span></button>
														</div>
														<div class="col-xs-10">
															<div class="slider"></div>
														</div>
														<div class="col-xs-2">
															<div class="slider-value"></div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="widget lazur-bg p-lg text-center m-n b-t b-b" style="background-color:#9ad1ed;margin-bottom:25px !important;">
									<div class="m-b-xl m-t-md">
										<br>
										<br>
										<i class="fa fa-flash fa-4x"></i>
										<h1 class="m-xs">0 MH/s</h1>
										<h3 class="font-bold no-margins">Хэшрейт<br>
										<br></h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Пулы</h5>
										<div class="ibox-tools">
											<a aria-controls="collapse-ether-pool" aria-expanded="false" class="pull-right" data-target="#collapse-ether-pool" data-toggle="collapse"><i class="fa fa-cog fa-lg"></i></a> <a data-container="body" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Хэшрейт"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div class="flot-chart small">
											<div class="flot-chart-content" id="flot-pools-ether"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Доходность за 1 MH/s</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прибыльность"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div style="height: 170px;">
											<p class="well m-xs">У Вас еще не было начислений, невозможно отобразить доходность.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Прогноз доходности</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="If the ETH price and mining difficulty do not change, then this is how big would be your payout." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прогноз доходности"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<p class="p-n m-t-n-xxs"><span class="pull-right badge badge-info" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #9ad1ed" title="1 день">1д</span> 0 ETH = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-primary" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 неделя">1н</span> 0 ETH = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-success" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #A0F3BB" title="1 месяц">1м</span> 0 ETH = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-danger" data-placement="left" data-toggle="tooltip" rel="tooltip" title="6 месяцев">6м</span> 0 ETH = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n m-b-n-xxs"><span class="pull-right badge badge-warning" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 год">1г</span> 0 ETH = 0.00 USD</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-12">
							<div class="ibox float-e-margins">
								<div class="ibox-title">
									<h5>DASH Баланс</h5><span class="btn btn-white btn-xs m-l-sm pull-right" data-container="body" data-content="Account hold &lt;a href='https://hashflare.zendesk.com/hc/ru/articles/202879272-Why-am-I-unable-to-withdraw-funds-from-my-account-balance' rel='nofollow' target='_blank'&gt;FAQ&lt;/a&gt;" data-html="true" data-placement="left" data-toggle="popover" data-trigger="focus" tabindex="0">Вывод</span>
								</div>
								<div class="ibox-content">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-3">
											<ul class="stat-list">
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
													</div>
													<h2 class="m-l-md m-b-none" style="font-weight:400;">0 DASH</h2><small class="m-l-md">Баланс</small>
												</li>
												<li>
													<hr>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;">0 DASH</h3><small class="m-l-md">Последняя DASH Выплата</small>
												</li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-9 hidden-xxs">
											<div class="flot-chart">
												<div class="flot-chart-content" id="flot-dash-balance"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><input id="dashprice" type="hidden" value="5.8000">
					<div class="row">
						<div class="col-xs-12">
							<div class="widget style1">
								<div class="row">
									<h2 id="dash"><a aria-controls="dash-row" aria-expanded="false" class="header-toggle" data-target="#dash-row" data-toggle="collapse"><span class="fa fa-angle-down"></span> <span class="fa fa-angle-right"></span> X11 (DASH) - 1 год</a> <a aria-controls="purchase-dash" aria-expanded="false" class="purchase-toggle" data-target=".purchase-dash" data-toggle="collapse"><i class="fa fa-shopping-cart text-success"></i></a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="collapse in" id="dash-row">
						<div class="row collapse purchase-dash">
							<div class="col-xs-12">
								<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
									<div>
										<div class="row">
											<div class="col-xs-12">
												<h3 class="text-center p-xs" style="color:#5a93c4;">Выберите хэшрейт</h3>
												<div class="col-xs-12">
													<div class="uislider m-t m-b" data-max="10000" data-min="0" data-start="0" data-step="1" data-type="dash" data-unit="mega" id="slider-dash"></div>
												</div>
											</div>
										</div>
										<div class="row hidden-xs hidden-sm">
											&nbsp;
										</div>
										<div class="row hidden-xs hidden-sm">
											&nbsp;
										</div>
										<div class="row purchase-dash" id="collapse-dash">
											<div class="col-xs-12">
												<div class="widget style1">
													<form accept-charset="utf-8" action="/panel/purchase" class="form-horizontal" id="PurchaseIndexForm" method="post" name="PurchaseIndexForm">
														<div style="display:none;">
															<input name="_method" type="hidden" value="POST">
														</div><input id="PurchaseProduct" name="data[Purchase][product]" type="hidden" value="6"><input class="slider-dash-total" id="PurchaseAmount" name="data[Purchase][amount]" type="hidden" value="0">
														<div class="hidden-md hidden-lg text-center well well-sm m-b-sm" style="padding: 7px;">
															<span class="slider-dash-usd">0</span> USD или <span class="slider-dash-btc">0</span> BTC
														</div>
														<div class="row">
															<div class="col-xs-12 col-sm-6 col-md-3 m-b-sm"></div>
															<div class="hidden-xs hidden-sm col-md-offset-1 col-md-4 text-center well well-sm" style="padding: 7px;">
																<span class="slider-dash-usd">0</span> USD или <span class="slider-dash-btc">0</span> BTC
															</div>
															<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-3 m-b-sm">
																<button class="btn btn-success btn-block" type="submit">Дальше</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="widget lazur-bg p-lg text-center m-n b-t b-b" style="background-color:#9ad1ed;margin-bottom:25px !important;">
									<div class="m-b-xl m-t-md">
										<br>
										<br>
										<i class="fa fa-flash fa-4x"></i>
										<h1 class="m-xs">0 MH/s</h1>
										<h3 class="font-bold no-margins">Хэшрейт<br>
										<br></h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Пулы</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Хэшрейт"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div class="flot-chart small">
											<div class="flot-chart-content" id="flot-pools-dash"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Доходность за 1 MH/s</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прибыльность"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div style="height: 170px;">
											<p class="well m-xs">У Вас еще не было начислений, невозможно отобразить доходность.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Прогноз доходности</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="If the DASH price and mining difficulty do not change, then this is how big would be your payout." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прогноз доходности"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<p class="p-n m-t-n-xxs"><span class="pull-right badge badge-info" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #9ad1ed" title="1 день">1д</span> 0 DASH = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-primary" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 неделя">1н</span> 0 DASH = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-success" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #A0F3BB" title="1 месяц">1м</span> 0 DASH = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-danger" data-placement="left" data-toggle="tooltip" rel="tooltip" title="6 месяцев">6м</span> 0 DASH = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n m-b-n-xxs"><span class="pull-right badge badge-warning" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 год">1г</span> 0 DASH = 0.00 USD</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-xs-12">
							<div class="ibox float-e-margins">
								<div class="ibox-title">
									<h5>ZEC Баланс</h5><span class="btn btn-white btn-xs m-l-sm pull-right" data-container="body" data-content="Account hold &lt;a href='https://hashflare.zendesk.com/hc/ru/articles/202879272-Why-am-I-unable-to-withdraw-funds-from-my-account-balance' rel='nofollow' target='_blank'&gt;FAQ&lt;/a&gt;" data-html="true" data-placement="left" data-toggle="popover" data-trigger="focus" tabindex="0">Вывод</span>
								</div>
								<div class="ibox-content">
									<div class="row">
										<div class="col-xs-12 col-sm-6 col-md-3">
											<ul class="stat-list">
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
													</div>
													<h2 class="m-l-md m-b-none" style="font-weight:400;">0 ZEC</h2><small class="m-l-md">Баланс</small>
												</li>
												<li>
													<hr>
												</li>
												<li>
													<div class="m-t-n-sm" style="position:absolute;top:50%;">
														<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
													</div>
													<h3 class="m-l-md m-b-none" style="font-weight:400;">0 ZEC</h3><small class="m-l-md">Последняя ZEC Выплата</small>
												</li>
											</ul>
										</div>
										<div class="col-xs-12 col-sm-6 col-md-9 hidden-xxs">
											<div class="flot-chart">
												<div class="flot-chart-content" id="flot-zec-balance"></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><input id="zcashprice" type="hidden" value="0.0200">
					<div class="row">
						<div class="col-xs-12">
							<div class="widget style1">
								<div class="row">
									<h2 id="zcash"><a aria-controls="zcash-row" aria-expanded="false" class="header-toggle" data-target="#zcash-row" data-toggle="collapse"><span class="fa fa-angle-down"></span> <span class="fa fa-angle-right"></span> EQUIHASH (ZEC) - 1 год</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="collapse in" id="zcash-row">
						<div class="row collapse" id="collapse-zcash-pool">
							<div class="col-xs-12">
								<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
									<div class="row m-l-xs m-r-xs m-t-n-md m-b-sm">
										<div class="col-xs-12">
											<h3 class="text-center p-sm" style="color:#5a93c4;">Пулы</h3>
											<form class="form-horizontal form-pools zcash">
												<div class="pools"></div>
												<div class="form-group">
													<div class="col-xs-12">
														<button class="btn btn-primary add m-b-sm" style="display:none;" type="button"><span class="glyphicon glyphicon-plus-sign"></span> Добавить пул</button> <button class="btn btn-success save m-b-sm" data-loading-text="Saving..." style="display:none;" type="submit"><span class="glyphicon glyphicon-ok"></span> Сохранить</button> <button aria-controls="collapse-zcash-pool" aria-expanded="true" class="btn btn-link m-b-sm cancel" data-target="#collapse-zcash-pool" data-toggle="collapse" type="button"><span class="glyphicon glyphicon-remove"></span> Отменить</button>
													</div>
												</div>
												<div class="template" style="display:none;">
													<div class="form-group pool">
														<div class="col-xs-10">
															<select class="form-control">
															</select>
														</div>
														<div class="col-xs-2">
															<button class="btn btn-danger remove" type="button"><span class="glyphicon glyphicon-remove"></span></button>
														</div>
														<div class="col-xs-10">
															<div class="slider"></div>
														</div>
														<div class="col-xs-2">
															<div class="slider-value"></div>
														</div>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-lg-3 col-sm-6">
								<div class="widget lazur-bg p-lg text-center m-n b-t b-b" style="background-color:#9ad1ed;margin-bottom:25px !important;">
									<div class="m-b-xl m-t-md">
										<br>
										<br>
										<i class="fa fa-flash fa-4x"></i>
										<h1 class="m-xs">0 H/s</h1>
										<h3 class="font-bold no-margins">Хэшрейт<br>
										<br></h3>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Пулы</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Хэшрейт"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div class="flot-chart small">
											<div class="flot-chart-content" id="flot-pools-zcash"></div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Доходность за 1 H/s</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прибыльность"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<div style="height: 170px;">
											<p class="well m-xs">У Вас еще не было начислений, невозможно отобразить доходность.</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-sm-6 col-lg-3">
								<div class="ibox float-e-margins">
									<div class="ibox-title">
										<h5>Прогноз доходности</h5>
										<div class="ibox-tools">
											<a data-container="body" data-content="If the ZEC price and mining difficulty do not change, then this is how big would be your payout." data-placement="top" data-toggle="popover" data-trigger="focus" tabindex="0" title="Прогноз доходности"><i class="fa fa-info fa-lg"></i></a>
										</div>
									</div>
									<div class="ibox-content">
										<p class="p-n m-t-n-xxs"><span class="pull-right badge badge-info" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #9ad1ed" title="1 день">1д</span> 0 ZEC = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-primary" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 неделя">1н</span> 0 ZEC = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-success" data-placement="left" data-toggle="tooltip" rel="tooltip" style="background-color: #A0F3BB" title="1 месяц">1м</span> 0 ZEC = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n"><span class="pull-right badge badge-danger" data-placement="left" data-toggle="tooltip" rel="tooltip" title="6 месяцев">6м</span> 0 ZEC = 0.00 USD</p>
										<hr class="m-t-xxs m-b-sm">
										<p class="p-n m-b-n-xxs"><span class="pull-right badge badge-warning" data-placement="left" data-toggle="tooltip" rel="tooltip" title="1 год">1г</span> 0 ZEC = 0.00 USD</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div aria-hidden="true" aria-labelledby="withdrawModalLabel" class="modal fade" data-replace="true" id="withdrawModal" role="dialog" tabindex="-1">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<form accept-charset="utf-8" action="/panel/withdraw" id="withdraw-form" method="post" name="withdraw-form">
									<div style="display:none;">
										<input name="_method" type="hidden" value="POST">
									</div>
									<div class="modal-header">
										<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Вывод</h4>
									</div>
									<div class="modal-body">
										<input id="WithdrawCommission" name="data[Withdraw][commission]" type="hidden" value="0.00075000"><input id="WithdrawMinimum" name="data[Withdraw][minimum]" type="hidden" value="0.00010000">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="WithdrawCurrent">Current</label><input class="form-control" disabled="disabled" id="WithdrawCurrent" name="data[Withdraw][current]" type="text" value="0.00000793">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="WithdrawAmount">Сумма</label><input class="form-control" id="WithdrawAmount" name="data[Withdraw][amount]" type="text" value="-0.00074207">
													<p class="help-block">+ 0.00075000 комиссия</p>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="WithdrawRemaining">Осталось</label><input class="form-control" id="WithdrawRemaining" name="data[Withdraw][remaining]" type="text" value="0.00000000">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="p-sm">
													<div class="slider"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 well" style="word-break:normal">
												<strong>Кошелёк:</strong> 1GJCFYep1jUyHqaBCNtQLggFbHdYfCSBTF
											</div>
										</div>
										<div class="row text-info">
											<div class="col-xs-12">
												<a href="https://cryptopay.me/join/c7bb216e">Получи дебетовую Bitcoin карту Cryptopay со скидкой!</a>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-default" data-dismiss="modal" type="button">Закрыть</button> <button class="btn btn-primary" id="withdraw-button" type="submit">Вывод</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div aria-hidden="true" aria-labelledby="ethWithdrawModalLabel" class="modal fade" data-replace="true" id="ethWithdrawModal" role="dialog" tabindex="-1">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<form accept-charset="utf-8" action="/panel/withdraw/eth" id="eth-withdraw-form" method="post" name="eth-withdraw-form">
									<div style="display:none;">
										<input name="_method" type="hidden" value="POST">
									</div>
									<div class="modal-header">
										<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Вывод</h4>
									</div>
									<div class="modal-body">
										<input id="EthWithdrawCommission" name="data[EthWithdraw][commission]" type="hidden" value="0.0006"><input id="EthWithdrawMinimum" name="data[EthWithdraw][minimum]" type="hidden" value="0.0001">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="EthWithdrawCurrent">Current</label><input class="form-control" disabled="disabled" id="EthWithdrawCurrent" name="data[EthWithdraw][current]" type="text" value="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="EthWithdrawAmount">Сумма</label><input class="form-control" id="EthWithdrawAmount" name="data[EthWithdraw][amount]" type="text" value="-0.0006">
													<p class="help-block">+ 0.00060000 комиссия</p>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="EthWithdrawRemaining">Осталось</label><input class="form-control" id="EthWithdrawRemaining" name="data[EthWithdraw][remaining]" type="text" value="0.00000000">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="p-sm">
													<div class="slider"></div>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 well" style="word-break:normal">
												<strong>Кошелёк:</strong> Нет
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-default" data-dismiss="modal" type="button">Закрыть</button> <button class="btn btn-primary" id="withdraw-button" type="submit">Вывод</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div aria-hidden="true" aria-labelledby="dashWithdrawModalLabel" class="modal fade" data-replace="true" id="dashWithdrawModal" role="dialog" tabindex="-1">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<form accept-charset="utf-8" action="/panel/withdraw/dash" id="dash-withdraw-form" method="post" name="dash-withdraw-form">
									<div style="display:none;">
										<input name="_method" type="hidden" value="POST">
									</div>
									<div class="modal-header">
										<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Вывод</h4>
									</div>
									<div class="modal-body">
										<input id="DashWithdrawCommission" name="data[DashWithdraw][commission]" type="hidden" value="0.0003"><input id="DashWithdrawMinimum" name="data[DashWithdraw][minimum]" type="hidden" value="0.0001">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="DashWithdrawCurrent">Current</label><input class="form-control" disabled="disabled" id="DashWithdrawCurrent" name="data[DashWithdraw][current]" type="text" value="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="DashWithdrawAmount">Сумма</label><input class="form-control" id="DashWithdrawAmount" name="data[DashWithdraw][amount]" type="text" value="-0.0003">
													<p class="help-block">+ 0.00030000 комиссия</p>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="DashWithdrawRemaining">Осталось</label><input class="form-control" id="DashWithdrawRemaining" name="data[DashWithdraw][remaining]" type="text" value="0.00000000">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 well" style="word-break:normal">
												<strong>Кошелёк:</strong> Нет
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="p-sm">
													<div class="slider"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-default" data-dismiss="modal" type="button">Закрыть</button> <button class="btn btn-primary" id="withdraw-button" type="submit">Вывод</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div aria-hidden="true" aria-labelledby="zecWithdrawModalLabel" class="modal fade" data-replace="true" id="zecWithdrawModal" role="dialog" tabindex="-1">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<form accept-charset="utf-8" action="/panel/withdraw/zec" id="zec-withdraw-form" method="post" name="zec-withdraw-form">
									<div style="display:none;">
										<input name="_method" type="hidden" value="POST">
									</div>
									<div class="modal-header">
										<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Вывод</h4>
									</div>
									<div class="modal-body">
										<input id="ZecWithdrawCommission" name="data[ZecWithdraw][commission]" type="hidden" value="3.0E-5"><input id="ZecWithdrawMinimum" name="data[ZecWithdraw][minimum]" type="hidden" value="0.001">
										<div class="row">
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="ZecWithdrawCurrent">Current</label><input class="form-control" disabled="disabled" id="ZecWithdrawCurrent" name="data[ZecWithdraw][current]" type="text" value="0">
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="ZecWithdrawAmount">Сумма</label><input class="form-control" id="ZecWithdrawAmount" name="data[ZecWithdraw][amount]" type="text" value="-3.0E-5">
													<p class="help-block">+ 0.00003000 комиссия</p>
												</div>
											</div>
											<div class="col-md-4">
												<div class="form-group">
													<label class="control-label" for="ZecWithdrawRemaining">Осталось</label><input class="form-control" id="ZecWithdrawRemaining" name="data[ZecWithdraw][remaining]" type="text" value="0.00000000">
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-xs-12 well" style="word-break:normal">
												<strong>Кошелёк:</strong> Нет
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="p-sm">
													<div class="slider"></div>
												</div>
											</div>
										</div>
									</div>
									<div class="modal-footer">
										<button class="btn btn-default" data-dismiss="modal" type="button">Закрыть</button> <button class="btn btn-primary" id="withdraw-button" type="submit">Вывод</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div aria-hidden="true" aria-labelledby="reinvestModalLabel" class="modal fade" data-replace="true" id="reinvestModal" role="dialog" tabindex="-1">
						<div class="modal-dialog modal-md">
							<div class="modal-content">
								<div class="modal-header">
									<button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
									<h4 class="modal-title">Реинвестировать</h4>
								</div>
								<div class="modal-body">
									<p>Функция Реинвест позволяет Вам автоматически докупать мощность, если на Вашем балансе достаточно средств.</p>
									<p>При включении этой функции, все средства на Вашем балансе будут использованы для покупки мощности.</p>
									<p>После каждой выплаты, система проверит, достаточно ли средств на Балансе для покупки минимального количества мощности (10 GH/s для SHA-256 или 1 MH/s для Scrypt). Если средств достаточно, покупка будет создана и подтверждена автоматически.</p>
									<form action="" id="reinvest-form" method="post" name="reinvest-form">
										<div class="form-group">
											<label class="sr-only" for="reinvest">Реинвестировать</label> <select class="form-control" id="reinvest" name="reinvest">
												<option selected value="">
													Do not reinvest
												</option>
												<option value="sha">
													Reinvest in SHA-256
												</option>
												<option value="scrypt">
													Reinvest in Scrypt
												</option>
											</select>
										</div>
									</form>
								</div>
								<div class="modal-footer">
									<button class="btn btn-default" data-dismiss="modal" type="button">Закрыть</button> <button class="btn btn-primary" id="reinvest-save" type="button">Сохранить</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="row">
					<div class="col-md-5">
						<strong>Copyright</strong> &copy; HashCoins LP, Все права защищены. 2014-2017
					</div>
					<div class="col-md-4">
						Время на сервере: 08.07.2017 14:58:16 UTC 00:00
					</div>
					<div class="col-md-3" style="text-align:right">
						Последнее обновление: 21.11.2016
					</div>
				</div>
			</div>
		</div>
	</div> 
	<script src="/js/jquery.js" type="text/javascript"></script> 
	<script src="/js/bootstrap.min.js" type="text/javascript"></script> 
	<script src="/js/script.js" type="text/javascript"></script> 
</body>
</html>
