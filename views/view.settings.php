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
						<span class="add_settings_item">Выплачено</span>
						<input type="text" name="add" class="add_settings_input"><br>
						<span class="add_settings_item">Процент системы</span>
						<input type="text" name="minus" class="add_settings_input"><br>
						<span class="add_settings_item">Куплено хэшрейта</span>
						<input type="text" name="hash" class="add_settings_input"><br>
						<span class="add_settings_item">Баланс</span>
						<input type="text" name="balans" class="add_settings_input"><br>
						<span class="add_settings_item">Курс BTC</span>
						<input type="text" name="kurs" class="add_settings_input"><br>
						<span class="add_settings_item">Комментарий</span>
						<textarea class="add_settings_textarea" name="comment"></textarea><br>
						<span class="add_settings_item">Проверочный код</span>
						<input type="password" name="kod" class="add_settings_input"><br>
						<input type="submit" name="submit" class="add_settings_submit">
					</form>
				</div>
				</div>
			</div>
		</div>
	</div>