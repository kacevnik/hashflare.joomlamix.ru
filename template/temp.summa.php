<?php if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} ?>
			</div>
			<div class="wrapper wrapper-content">
				<div id="panelindex">
					<div class="row">
						<div class="col-xs-12">
							<div class="ibox float-e-margins">
								<div class="ibox-title">
									<h5>BTC Баланс</h5>
									<a class="btn btn-primary btn-xs m-l-sm pull-right" target="_blank" href="https://hashflare.io/r/B4573CB5">Регистрация на hashflare</a> 
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
													<h3 class="m-l-md m-b-none" style="font-weight:400;">0 BTC</h3><small class="m-l-md">SHA-256 Выплата вчера</small>
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
					</div>