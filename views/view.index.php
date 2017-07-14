<?php if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} ?>
	<div class="row animated fadeInRight">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>История</h5>
				</div>
				<div class="ibox-content">
					<div class="table-responsive">
						<div class="dataTables_wrapper form-inline" id="DataTables_Table_0_wrapper">
							<div class="clear"></div>
							<table class="table table-striped table-bordered table-hover dataTable" style="font-size: 12px;">
								<thead>
									<tr role="row">
										<th class="sorting" colspan="1" rowspan="1" style="width: 80px;" tabindex="0">#</th>
										<th class="sorting_desc" colspan="1" rowspan="1" style="width: 80px;" tabindex="0">Дата</th>
										<th class="sorting" colspan="1" rowspan="1" style="width: 110px;" tabindex="0">Баланс</th>
										<th class="sorting" colspan="1" rowspan="1" style="width: 110px;" tabindex="0">Последняя выплата</th>
										<th class="sorting" colspan="1" rowspan="1" style="width: 110px;" tabindex="0">Вычет системы</th>
										<th class="sorting" colspan="1" rowspan="1" style="width: 35px;" tabindex="0">Вычет системы (%)</th>
										<th class="sorting" colspan="1" rowspan="1" style="width: 145px;" tabindex="0">Прибыль</th>
										<th class="sorting" colspan="1" rowspan="1" style="width: 30px;" tabindex="0">Хэшрейт</th>										
										<th class="sorting" colspan="1" rowspan="1" style="width: 30px;" tabindex="0">Куплено хэшрейт</th>
										<th class="sorting" colspan="1" rowspan="1" style="width: 70px;" tabindex="0">Осталось дней</th>
										<th class="sorting" colspan="1" rowspan="1" style="width: 15px;" tabindex="0">Фото</th>
									</tr>
								</thead>
								<tbody>
								<?php
									$i = count($show_statistic);
									foreach($show_statistic as $item){ 
									$procent = $item['minus'] / ($item['kdv_add']/100);
									$pribil = number_format($item['kdv_add'] - $item['minus'], 8, '.', '');
									$pribil_baks = $pribil * $item['kurs'];
									$procent_plus = number_format($pribil_baks/((INVEST+REINVEST)/100), 1, '.', '').'%';
									$days = number_format(100/$procent_plus*100/$pribil_baks, 0, '', ' ');
									$url_img = '/img_data/'.date("dmY", $item['unix_date']).'.jpg';
									$image_caption = 'Статистика за '.getDateOnUnix_1($item['unix_date']);
								?>
									<tr class="odd" role="row">
										<td><?php echo 'день #'.$i--; ?></td>
										<td><?php echo getDateOnUnix_1($item['unix_date']); ?></td>
										<td><?php echo $item['balans']. ' BTC'; ?></td>
										<td><?php echo $item['kdv_add']. ' BTC'; ?></td>
										<td><?php echo $item['minus']. ' BTC'; ?></td>
										<td><?php echo number_format($procent, 1, '.', '').'%'; ?></td>
										<td><?php echo $pribil. '-'.$procent_plus.'-'.number_format($pribil_baks, 3, '.', '').'$'; ?></td>
										<td><?php echo $item['hash'].' TH/s'; ?></td>
										<td><?php echo $item['bay_hash']; ?></td>
										<td><?php echo $days; ?></td>
										<td class="foto_statistic"><a href="<?php echo $url_img; ?>" data-fancybox="images" data-caption="<?php echo $image_caption; ?>"><i class="fa fa-camera"></i></a></td>
									</tr>									
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>