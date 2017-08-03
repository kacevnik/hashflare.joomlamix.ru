<?php if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} ?>
	<div class="row animated fadeInRight">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Реальная окупаемость на HashFlare</h5>
				</div>
				<div class="ibox-content">
				<div class="add_settings" style="margin: 0 0 30px 0;">
					<form method="post" action="" onsubmit="return false;">
						<span class="add_settings_item">Инвестированно* </span>
						<input type="text" name="help_1_invest" class="add_settings_input" value="<?php echo INVEST + REINVEST; ?>"> $<br>
						<span class="add_settings_item">Расчитать на:* </span>
						<input type="text" name="help_1_days" class="add_settings_input" value="365"> дней<br>				<span class="add_settings_item">Средний процент системы:* </span>
						<input type="text" name="help_1_proc" class="add_settings_input" value="<?php echo $m_proc; ?>"> %<br>
					
						<input type="submit" name="submit_1" class="add_settings_submit" value="подсчитать">
					</form>
				</div>
				<div class="help_result_1"></div>
				</div>
			</div>
		</div>
	</div>