<?php if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} ?>
		<div class="gray-bg" id="page-wrapper">
			<div class="row border-bottom">
				<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
					<div class="navbar-header">
						<a class="navbar-minimalize minimalize btn btn-primary" href="#" data="show"><i class="fa fa-bars"></i></a>
					</div>
					<ul class="nav navbar-top-links navbar-right">
						<li class="right_top_promo_kod">Промо код на скидку 10%: <b>B4573CB5</b></li>
						<li class="right_top_cel">Цель: 100$/день</li>
					</ul>
				</nav>
				<?php echo $_SESSION['error']; unset($_SESSION['error']); ?>