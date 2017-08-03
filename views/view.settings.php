<?php if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} ?>

	<div class="row animated fadeInRight">
		<div class="col-lg-12">
			<div class="ibox float-e-margins">
				<div class="ibox-title">
					<h5>Добавить данные</h5>
				</div>
				<div class="ibox-content">
				<div class="add_settings">
					<form method="post" action="">
						<span class="add_settings_item">Выплачено*</span>
						<input type="text" name="add" class="add_settings_input"><br>
						<span class="add_settings_item">Процент системы*</span>
						<input type="text" name="minus" class="add_settings_input"><span class="add_settings_input_proc"></span><br>
						<span class="add_settings_item">Куплено хэшрейта</span>
						<input type="text" name="hash" value="0" class="add_settings_input"><br>
						<span class="add_settings_item">Баланс*</span>
						<input type="text" name="balans" class="add_settings_input"><br>
						<span class="add_settings_item">Курс BTC*</span>
						<input type="text" name="kurs" value="<?php echo number_format(getCurs('USD'), 2, '.', ''); ?>" class="add_settings_input"><br>
						<span class="add_settings_item">Комментарий</span>
						<textarea class="add_settings_textarea" name="comment"></textarea><br>
						<span class="add_settings_item">Проверочный код*</span>
						<input type="password" name="kod" class="add_settings_input"><br>
						<div class="g-recaptcha" data-sitekey="6LetBSkUAAAAAClLu2dRVSSjQYQdX1rQEVOa0Hs_"></div><br>
						<input type="submit" name="submit" class="add_settings_submit">
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>