<?php if(ENTER != 1){echo "<h1>UPS! No enter</h1>"; exit();} ?>
<body>
	<div id="wrapper">
		<nav class="navbar-default navbar-static-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="side-menu">
					<li class="nav-header">
						<div class="dropdown profile-element">
							<div class="m-b-xl">
								<a href="/">
									<img src="/img/logo.png" style="width: 100%;">
								</a>
							</div>
							<span>
								<img alt="kacevnik" class="img-circle" src="https://www.gravatar.com/avatar/5810e5ebff8612f3d2b1f935eaf07b0c?s=128&amp;d=mm&amp;r=g">
							</span> 
							<span class="text-xs block text-white hyphenate"><br>
								<a class="__cf_email__" href="index.php">HashFlare.Joomlamix.ru</a>
							</span>
						</div>
						<div class="logo-element">
							<a href="/"><img src="/img/logomini.png" style="width:30%;"></a>
						</div>
					</li>
					<li class="<?php if($page == 'index'){echo 'active';}else{ echo 'inactive';} ?>">
						<a href="index.php">
							<i class="fa fa-th-large"></i> 
							<span class="nav-label">Личный Кабинет</span>
						</a>
					</li>
					<li class="<?php if($page == 'video'){echo 'active';}else{ echo 'inactive';} ?>">
						<a href="index.php?page=video">
						<i class="fa fa-video-camera"></i> 
						<span class="nav-label">Видео история</span></a>
					</li>
					<li class="<?php if($page == 'settings'){echo 'active';}else{ echo 'inactive';} ?>">
						<a href="index.php?page=settings">
							<i class="fa fa-cogs"></i> 
							<span class="nav-label">Настройки</span>
						</a>
					</li>					
					<li class="<?php if($page == 'help'){echo 'active';}else{ echo 'inactive';} ?>">
						<a href="index.php?page=help">
							<i class="fa fa-calculator"></i> 
							<span class="nav-label">Помощь</span>
						</a>
					</li>
					<li class="<?php if($page == 'back'){echo 'active';}else{ echo 'inactive';} ?>">
						<a href="index.php?page=back">
							<i class="fa fa-question"></i> 
							<span class="nav-label">Обртная связь</span> 
						</a>
					</li>
				</ul>
			</div>
		</nav>