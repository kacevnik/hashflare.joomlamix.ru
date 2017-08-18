<?php if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} ?>
	<div class="row animated fadeInRight">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Статистика Blockchain</h5>
				</div>
				<div class="ibox-content">
					<div class="table-responsive">
						<div class="dataTables_wrapper form-inline" id="DataTables_Table_0_wrapper">
							<div class="clear"></div>
							<table class="table table-striped table-bordered table-hover dataTable" style="font-size: 12px;">
								<thead>
									<tr role="row">
										<th class="sorting" style="width: 50%;">Характеристика</th>
										<th class="sorting_desc" style="width: 50%;">Данные</th>
									</tr>
								</thead>
								<tbody>
									<tr class="odd">
										<td>Общая капитализация</td>
										<td><?php echo number_format($capital, 2, ".", " ") . " $"; ?></td>
									</tr>									
									<tr class="odd">
										<td>Добыто всего BTC</td>
										<td><?php echo number_format($mineBTC, 1, ".", " ") . " BTC (". number_format($mineBTCproc, 2, ".", "") . "%)"; ?></td>
									</tr>
									<tr class="odd">
										<td>Время между блоками</td>
										<td><?php echo $med_time . " мин."; ?></td>
									</tr>
									<tr class="odd">
										<td>Общая мощность Хешрейта</td>
										<td><?php echo number_format($heshrate, 2, ".", " ") . " TH/s"; ?></td>
									</tr>									
									<tr class="odd">
										<td>Добыто блоков всего</td>
										<td><?php echo number_format($totalMineBlocks, 0, "", " "); ?></td>
									</tr>
									<tr class="odd">
										<td>Текущая сложность</td>
										<td><?php echo number_format($difficulty, 0, "", " "); ?></td>
									</tr>
									<tr class="odd">
										<td>Изменение сложности через</td>
										<td><?php echo number_format($upDiffBlocks, 0, "", " ") . " ~" . $upDiffDays . " дн. " . $upDiffHours . " ч."; ?></td>
									</tr>
									<tr class="odd">
										<td>Смена эпохи через</td>
										<td><?php echo number_format($up_expos, 0, "", " ") . " ~" . $up_expos_days . " дн. " . $up_expos_hours . " ч."; ?></td>
									</tr>
									<tr class="odd">
										<td>Стоимость блока в следующей эпохе</td>
										<td>6.25 BTC</td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>