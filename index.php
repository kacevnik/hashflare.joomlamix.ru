<?php require('template/temp.head.php'); ?>
<body>
	<div id="wrapper">
<nav class="navbar-default navbar-static-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="side-menu">
<li class="nav-header">
<div class="dropdown profile-element">
<div class="m-b-xl">
<a href="/"><img src="/img/logo.png" style="width:100%;"></a>
</div>
<span>
<img alt="kacevnik" class="img-circle" src="https://www.gravatar.com/avatar/5810e5ebff8612f3d2b1f935eaf07b0c?s=128&amp;d=mm&amp;r=g"/>
</span>
<span class="text-xs block text-white hyphenate"><br/><a class="__cf_email__" href="/cdn-cgi/l/email-protection" data-cfemail="d8b3b9bbbdaeb6b1b398a1b9b6bcbda0f6aaad">[email&#160;protected]</a><script data-cfhash='f9e31' type="text/javascript">/* <![CDATA[ */!function(t,e,r,n,c,a,p){try{t=document.currentScript||function(){for(t=document.getElementsByTagName('script'),e=t.length;e--;)if(t[e].getAttribute('data-cfhash'))return t[e]}();if(t&&(c=t.previousSibling)){p=t.parentNode;if(a=c.getAttribute('data-cfemail')){for(e='',r='0x'+a.substr(0,2)|0,n=2;a.length-n;n+=2)e+='%'+('0'+('0x'+a.substr(n,2)^r).toString(16)).slice(-2);p.replaceChild(document.createTextNode(decodeURIComponent(e)),c)}p.removeChild(t)}}catch(u){}}()/* ]]> */</script></span>
</div>
<div class="logo-element">
<a href="/"><img src="/img/logomini.png" style="width:30%;"></a>
</div>
</li>
<li class="inactive">
<a href="#">
<i class="fa fa-shopping-cart pulse-orange"></i>
<span class="nav-label pulse-orange">Купить хэшрейт </span>
<span class="fa arrow pulse-orange"></span>
</a>
 
<ul class="nav nav-second-level">
<li class="inactive"><a href="/panel/upgrade?target=sha#sha">SHA-256</a></li><li class="inactive"><a href="/panel/upgrade?target=scrypt#scrypt">Scrypt</a></li><li class="inactive"><a href="/panel/upgrade?target=ether#ether">ETHASH</a></li><li class="inactive"><a href="/panel/upgrade?target=dash#dash">X11</a></li><input type="hidden" id="types" data-json="%5B%22sha%22%2C%22scrypt%22%2C%22ether%22%2C%22dash%22%5D"/> </ul>
</li>
<li class="active">
<a href="/panel">
<i class="fa fa-th-large"></i> <span class="nav-label">Личный Кабинет</span>
</a>
</li>
<li class="inactive">
<a href="/panel/history">
<i class="fa fa-bars"></i> <span class="nav-label">История</span>
</a>
</li>
<li class="inactive">
<a class="redeem-toggle" data-target=".redeem" data-toggle="collapse" aria-expanded="false" aria-controls="redeem">
<i class="fa fa-star"></i> <span class="nav-label">Ваучер</span>
</a>
</li>
<li class="inactive">
<a>
<i class="fa fa-arrows-alt"></i>
<span class="nav-label">Рефералы</span>
<span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
<li class="inactive">
<a href="/panel/referrals/tools">
Инструменты </a>
</li>
<li class="inactive">
<a href="/panel/referrals/materials">
Материалы </a>
</li>
</ul>
</li>
<li class="inactive">
<a href="/panel/settings">
<i class="fa fa-cogs"></i> <span class="nav-label">Настройки</span>
</a>
</li>
<li>
<a href="#">
<i class="fa fa-question"></i>
<span class="nav-label">Помощь</span>
<span class="fa arrow"></span>
</a>
<ul class="nav nav-second-level">
<li>
<a href="/contact-us" target="_blank">
Свяжитесь с нами </a>
</li>
<li>
<a href="http://support.hashflare.io/hc/ru" target="_blank">Частые вопросы</a>
</li>
 
</ul>
</li>
<li>
<a href="https://cryptopay.me/join/c7bb216e" target="_blank">
<i class="fa fa-credit-card pulse-orange-rev"></i>
<span class="nav-label pulse-orange-rev">Дебетовая карта BTC </span>
</a>
</li>
<li class="visible-xs">
<a href="/logout">
<i class="fa fa-sign-out"></i>
</a>
</li>
</ul>
</div>
</nav>
<div id="page-wrapper" class="gray-bg">
<div class="row border-bottom">
<nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
<div class="navbar-header">
<a class="navbar-minimalize minimalize btn btn-primary " href="#">
<i class="fa fa-bars"></i>
</a>
</div>
<ul class="nav navbar-top-links navbar-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
Русский <span class="caret"></span>
</a>
<ul class="dropdown-menu">
<li class="">
<a href="?lang=eng"><img src="/img/flags/eng.png" alt="English"> English</a>
</li>
<li class="active">
<a href="?lang=rus"><img src="/img/flags/rus.png" alt="Русский"> Русский</a>
</li>
<li class="">
<a href="?lang=deu"><img src="/img/flags/deu.png" alt="Deutsch"> Deutsch</a>
</li>
<li class="">
<a href="?lang=ita"><img src="/img/flags/ita.png" alt="Italiano"> Italiano</a>
</li>
<li class="">
<a href="?lang=spa"><img src="/img/flags/spa.png" alt="Español"> Español</a>
</li>
<li class="">
<a href="?lang=por"><img src="/img/flags/por.png" alt="Português"> Português</a>
</li>
<li class="">
<a href="?lang=ell"><img src="/img/flags/ell.png" alt="Ελληνικά"> Ελληνικά</a>
</li>
<li class="">
<a href="?lang=trk"><img src="/img/flags/trk.png" alt="Türkçe"> Türkçe</a>
</li>
<li class="">
<a href="?lang=jpn"><img src="/img/flags/jpn.png" alt="日本語"> 日本語</a>
</li>
<li class="">
<a href="?lang=cmn"><img src="/img/flags/cmn.png" alt="官話"> 官話</a>
</li>
<li class="">
<a href="?lang=geo"><img src="/img/flags/geo.png" alt="ქართული"> ქართული</a>
</li>
</ul>
</li>
<li>
<a href="/logout" class="no-mobile hidden-xs">
<i class="fa fa-sign-out"></i> Выйти </a>
</li>
</ul>
</nav>
</div>
<div class="wrapper wrapper-content">
<div id="panelindex">
<input type="hidden" id="usdprice" value="0.00039977980128545"/>
<input type="hidden" id="btcprice" value="2501.377"/>
<div class="row">
<div class="col-xs-12">
<div class="widget no-padding">
<div class="p-sm collapse  redeem" style="border: 1px solid #dee1e2;">
<form action="/panel/code" class="" id="CampaignIndexForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div> <div class="row">
<div class="col-sm-6 col-lg-4">
<h2 style="color:#5a93c4;" class="m-t-none m-b-xs">
Активировать код </h2>
</div>
<div class="col-sm-6 col-lg-4">
<div class="form-group required m-b-xs required"><input name="data[Campaign][code]" class="form-control m-n" placeholder="Код" maxlength="25" type="text" id="CampaignCode" required="required"/></div> </div>
<div class="col-sm-12 col-lg-4">
<div class="form-group m-b-xs"><div class="submit"><input class="btn btn-success btn-block" type="submit" value="Активировать"/></div></div> </div>
</div>
</form> </div>
</div>
</div>
</div>
<div class="row">
<div class="col-xs-12">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>BTC Баланс </h5>
<a class="btn btn-primary btn-xs m-l-sm pull-right" data-toggle="modal" data-target="#reinvestModal">
Реинвестировать </a>
<span class="btn btn-white btn-xs m-l-sm pull-right" data-toggle="popover" data-placement="left" data-container="body" tabindex="0" data-trigger="focus" data-html="true" data-content='Account hold <a href="https://hashflare.zendesk.com/hc/ru/articles/202879272-Why-am-I-unable-to-withdraw-funds-from-my-account-balance" rel="nofollow" target="_blank">FAQ</a>'>
Вывод </span>
</div>
<div class="ibox-content">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3">
<ul class="stat-list">
<li>
<div class="m-t-n-sm" style="position:absolute;top:50%;">
<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
</div>
<h2 class="m-l-md m-b-none" style="font-weight:400;">0.00000793 BTC</h2>
<small class="m-l-md">Баланс</small>
</li>
<li><hr></li>
<li>
<div class="m-t-n-sm" style="position:absolute;top:50%;">
<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
</div>
<h3 class="m-l-md m-b-none" style="font-weight:400;">0.00000334 BTC</h3>
<small class="m-l-md">Последняя SHA-256 Выплата</small>
</li>
<li>
<div class="m-t-n-sm" style="position:absolute;top:50%;">
<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
</div>
<h3 class="m-l-md m-b-none" style="font-weight:400;">0 BTC</h3>
<small class="m-l-md">Последняя Scrypt Выплата</small>
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
<input type="hidden" value="0.1200" id="shaprice">
<div class="row">
<div class="col-xs-12">
<div class="widget style1">
<div class="row">
<h2 id="sha">
<a class="header-toggle" data-target="#sha-row" data-toggle="collapse" aria-expanded="false" aria-controls="sha-row">
<span class="fa fa-angle-down"></span>
<span class="fa fa-angle-right"></span>
SHA-256 </a>
<a class="purchase-toggle" data-target=".purchase-sha" data-toggle="collapse" aria-expanded="false" aria-controls="purchase-sha">
<i class="fa fa-shopping-cart text-success"></i>
</a>
</h2>
</div>
</div>
</div>
</div>
<div class="collapse in" id="sha-row">
 
<div class="row collapse  purchase-sha">
<div class="col-xs-12">
<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
<div>
<div class="row">
<div class="col-xs-12">
<h3 class="text-center p-xs" style="color:#5a93c4;">
Выберите хэшрейт </h3>
<div class="col-xs-12">
<div id="slider-sha" class="uislider m-t m-b" data-step="10" data-start="0" data-min="0" data-max="100000" data-unit="giga" data-type="sha"></div>
</div>
</div>
</div>
<div class="row hidden-xs hidden-sm">&nbsp;</div>
<div class="row hidden-xs hidden-sm">&nbsp;</div>
<div class="row purchase-sha" id="collapse-sha">
<div class="col-xs-12">
<div class="widget style1">
<form action="/panel/purchase" class="form-horizontal" id="PurchaseIndexForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div><input type="hidden" name="data[Purchase][product]" value="1" id="PurchaseProduct"/><input type="hidden" name="data[Purchase][amount]" class="slider-sha-total" value="0" id="PurchaseAmount"/> <div class="hidden-md hidden-lg text-center well well-sm m-b-sm" style="padding: 7px;">
<span class="slider-sha-usd">0</span> USD
или <span class="slider-sha-btc">0</span> BTC
</div>
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3 m-b-sm">
</div>
<div class="hidden-xs hidden-sm col-md-offset-1 col-md-4 text-center well well-sm" style="padding: 7px;">
<span class="slider-sha-usd">0</span> USD
или <span class="slider-sha-btc">0</span> BTC
</div>
<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-3 m-b-sm">
<button type="submit" class="btn btn-success btn-block">Дальше</button>
</div>
</div>
</form> </div>
</div>
</div>
</div>
</div>
</div>
</div>
 
 
<div class="row collapse " id="collapse-sha-pool">
<div class="col-xs-12">
<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
<div class="row m-l-xs m-r-xs m-t-n-md m-b-sm">
<div class="col-xs-12">
<h3 class="text-center p-sm" style="color:#5a93c4;">
Пулы </h3>
<form class="form-horizontal form-pools sha">
<div class="pools">
 
</div>
<div class="form-group">
<div class="col-xs-12">
<button type="button" class="btn btn-primary add m-b-sm" style="display:none;">
<span class="glyphicon glyphicon-plus-sign"></span>
Добавить пул </button>
<button type="submit" class="btn btn-success save m-b-sm" data-loading-text="Saving..." style="display:none;">
<span class="glyphicon glyphicon-ok"></span>
Сохранить </button>
<button type="button" class="btn btn-link m-b-sm cancel" data-target="#collapse-sha-pool" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-sha-pool">
<span class="glyphicon glyphicon-remove"></span>
Отменить </button>
</div>
</div>
<div class="template" style="display:none;">
<div class="form-group pool">
<div class="col-xs-10">
<select class="form-control"></select>
</div>
<div class="col-xs-2">
<button type="button" class="btn btn-danger remove">
<span class="glyphicon glyphicon-remove"></span>
</button>
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
<br><br>
<i class="fa fa-flash fa-4x"></i>
<h1 class="m-xs">0.01 TH/s</h1>
<h3 class="font-bold no-margins">
Хэшрейт<br><br>
</h3>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Пулы</h5>
<div class="ibox-tools">
<a data-target="#collapse-sha-pool" data-toggle="collapse" aria-expanded="false" class="pull-right" aria-controls="collapse-sha-pool">
<i class="fa fa-cog fa-lg"></i>
</a>
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Хэшрейт" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день.">
<i class="fa fa-info fa-lg"></i>
</a>
 
 
 
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
<h5>
Доходность за 1 TH/s </h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прибыльность" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно.">
<i class="fa fa-info fa-lg"></i>
</a>
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
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прогноз доходности" data-content="If the BTC price and mining difficulty do not change, then this is how big would be your payout.">
<i class="fa fa-info fa-lg"></i>
</a>
</div>
</div>
<div class="ibox-content">
<p class="p-n m-t-n-xxs">
<span class="pull-right badge badge-info" style="background-color: #9ad1ed" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 день">
1д </span>
0.00000334 BTC = 0.01 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-primary" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 неделя">
1н </span>
0.00002338 BTC = 0.06 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-success" style="background-color: #A0F3BB" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 месяц">
1м </span>
0.0001002 BTC = 0.25 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-danger" rel="tooltip" data-toggle="tooltip" data-placement="left" title="6 месяцев">
6м </span>
0.0006012 BTC = 1.50 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n m-b-n-xxs">
<span class="pull-right badge badge-warning" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 год">
1г </span>
0.0012191 BTC = 3.05 USD
</p>
 
</div>
</div>
</div>
</div>
</div>
<input type="hidden" value="13.5000" id="scryptprice">
<div class="row">
<div class="col-xs-12">
<div class="widget style1">
<div class="row">
<h2 id="scrypt">
<a class="header-toggle" data-target="#scrypt-row" data-toggle="collapse" aria-expanded="false" aria-controls="scrypt-row">
<span class="fa fa-angle-down"></span>
<span class="fa fa-angle-right"></span>
Scrypt </a>
<a class="purchase-toggle" data-target=".purchase-scrypt" data-toggle="collapse" aria-expanded="false" aria-controls="purchase-scrypt">
<i class="fa fa-shopping-cart text-success"></i>
</a>
</h2>
</div>
</div>
</div>
</div>
<div class="collapse in" id="scrypt-row">
 
<div class="row collapse  purchase-scrypt">
<div class="col-xs-12">
<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
<div>
<div class="row">
<div class="col-xs-12">
<h3 class="text-center p-xs" style="color:#5a93c4;">
Выберите хэшрейт </h3>
<div class="col-xs-12">
<div id="slider-scrypt" class="uislider m-t m-b" data-step="1" data-start="0" data-min="0" data-max="10000" data-unit="mega" data-type="scrypt"></div>
</div>
</div>
</div>
<div class="row hidden-xs hidden-sm">&nbsp;</div>
<div class="row hidden-xs hidden-sm">&nbsp;</div>
<div class="row purchase-scrypt" id="collapse-scrypt">
<div class="col-xs-12">
<div class="widget style1">
<form action="/panel/purchase" class="form-horizontal" id="PurchaseIndexForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div><input type="hidden" name="data[Purchase][product]" value="2" id="PurchaseProduct"/><input type="hidden" name="data[Purchase][amount]" class="slider-scrypt-total" value="0" id="PurchaseAmount"/> <div class="hidden-md hidden-lg text-center well well-sm m-b-sm" style="padding: 7px;">
<span class="slider-scrypt-usd">0</span> USD
или <span class="slider-scrypt-btc">0</span> BTC
</div>
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3 m-b-sm">
</div>
<div class="hidden-xs hidden-sm col-md-offset-1 col-md-4 text-center well well-sm" style="padding: 7px;">
<span class="slider-scrypt-usd">0</span> USD
или <span class="slider-scrypt-btc">0</span> BTC
</div>
<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-3 m-b-sm">
<button type="submit" class="btn btn-success btn-block">Дальше</button>
</div>
</div>
</form> </div>
</div>
</div>
</div>
</div>
</div>
</div>
 
 
<div class="row collapse " id="collapse-scrypt-pool">
<div class="col-xs-12">
<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
<div class="row m-l-xs m-r-xs m-t-n-md m-b-sm">
<div class="col-xs-12">
<h3 class="text-center p-sm" style="color:#5a93c4;">
Пулы </h3>
<form class="form-horizontal form-pools scrypt">
<div class="pools">
 
</div>
<div class="form-group">
<div class="col-xs-12">
<button type="button" class="btn btn-primary add m-b-sm" style="display:none;">
<span class="glyphicon glyphicon-plus-sign"></span>
Добавить пул </button>
<button type="submit" class="btn btn-success save m-b-sm" data-loading-text="Saving..." style="display:none;">
<span class="glyphicon glyphicon-ok"></span>
Сохранить </button>
<button type="button" class="btn btn-link m-b-sm cancel" data-target="#collapse-scrypt-pool" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-scrypt-pool">
<span class="glyphicon glyphicon-remove"></span>
Отменить </button>
</div>
</div>
<div class="template" style="display:none;">
<div class="form-group pool">
<div class="col-xs-10">
<select class="form-control"></select>
</div>
<div class="col-xs-2">
<button type="button" class="btn btn-danger remove">
<span class="glyphicon glyphicon-remove"></span>
</button>
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
<br><br>
<i class="fa fa-flash fa-4x"></i>
<h1 class="m-xs">0 MH/s</h1>
<h3 class="font-bold no-margins">
Хэшрейт<br><br>
</h3>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Пулы</h5>
<div class="ibox-tools">
<a data-target="#collapse-scrypt-pool" data-toggle="collapse" aria-expanded="false" class="pull-right" aria-controls="collapse-scrypt-pool">
<i class="fa fa-cog fa-lg"></i>
</a>
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Хэшрейт" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день.">
<i class="fa fa-info fa-lg"></i>
</a>
 
 
 
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
<h5>
Доходность за 1 MH/s </h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прибыльность" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно.">
<i class="fa fa-info fa-lg"></i>
</a>
</div>
</div>
<div class="ibox-content">
<div style="height: 170px;">
<p class="well m-xs">
У Вас еще не было начислений, невозможно отобразить доходность.
</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Прогноз доходности</h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прогноз доходности" data-content="If the BTC price and mining difficulty do not change, then this is how big would be your payout.">
<i class="fa fa-info fa-lg"></i>
</a>
</div>
</div>
<div class="ibox-content">
<p class="p-n m-t-n-xxs">
<span class="pull-right badge badge-info" style="background-color: #9ad1ed" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 день">
1д </span>
0 BTC = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-primary" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 неделя">
1н </span>
0 BTC = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-success" style="background-color: #A0F3BB" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 месяц">
1м </span>
0 BTC = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-danger" rel="tooltip" data-toggle="tooltip" data-placement="left" title="6 месяцев">
6м </span>
0 BTC = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n m-b-n-xxs">
<span class="pull-right badge badge-warning" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 год">
1г </span>
0 BTC = 0.00 USD
</p>
 
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-xs-12">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>ETH Баланс </h5>
<span class="btn btn-white btn-xs m-l-sm pull-right" data-toggle="popover" data-placement="left" data-container="body" tabindex="0" data-trigger="focus" data-html="true" data-content="Account hold <a href='https://hashflare.zendesk.com/hc/ru/articles/202879272-Why-am-I-unable-to-withdraw-funds-from-my-account-balance' rel='nofollow' target='_blank'>FAQ</a>">
Вывод </span>
</div>
<div class="ibox-content">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3">
<ul class="stat-list">
<li>
<div class="m-t-n-sm" style="position:absolute;top:50%;">
<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
</div>
<h2 class="m-l-md m-b-none" style="font-weight:400;">0 ETH</h2>
<small class="m-l-md">Баланс</small>
</li>
<li><hr></li>
<li>
<div class="m-t-n-sm" style="position:absolute;top:50%;">
<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
</div>
<h3 class="m-l-md m-b-none" style="font-weight:400;">0 ETH</h3>
<small class="m-l-md">Последняя ETHASH Выплата</small>
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
</div>
<input type="hidden" value="0.0220" id="etherprice">
<div class="row">
<div class="col-xs-12">
<div class="widget style1">
<div class="row">
<h2 id="ether">
<a class="header-toggle" data-target="#ether-row" data-toggle="collapse" aria-expanded="false" aria-controls="ether-row">
<span class="fa fa-angle-down"></span>
<span class="fa fa-angle-right"></span>
ETHASH (ETH) - 1 год </a>
<a class="purchase-toggle" data-target=".purchase-ether" data-toggle="collapse" aria-expanded="false" aria-controls="purchase-ether">
<i class="fa fa-shopping-cart text-success"></i>
</a>
</h2>
</div>
</div>
</div>
</div>
<div class="collapse in" id="ether-row">
 
<div class="row collapse  purchase-ether">
<div class="col-xs-12">
<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
<div>
<div class="row">
<div class="col-xs-12">
<h3 class="text-center p-xs" style="color:#5a93c4;">
Выберите хэшрейт </h3>
<div class="col-xs-12">
<div id="slider-ether" class="uislider m-t m-b" data-step="100" data-start="0" data-min="0" data-max="1000000" data-unit="kilo" data-type="ether"></div>
</div>
</div>
</div>
<div class="row hidden-xs hidden-sm">&nbsp;</div>
<div class="row hidden-xs hidden-sm">&nbsp;</div>
<div class="row purchase-ether" id="collapse-ether">
<div class="col-xs-12">
<div class="widget style1">
<form action="/panel/purchase" class="form-horizontal" id="PurchaseIndexForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div><input type="hidden" name="data[Purchase][product]" value="5" id="PurchaseProduct"/><input type="hidden" name="data[Purchase][amount]" class="slider-ether-total" value="0" id="PurchaseAmount"/> <div class="hidden-md hidden-lg text-center well well-sm m-b-sm" style="padding: 7px;">
<span class="slider-ether-usd">0</span> USD
или <span class="slider-ether-btc">0</span> BTC
</div>
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3 m-b-sm">
</div>
<div class="hidden-xs hidden-sm col-md-offset-1 col-md-4 text-center well well-sm" style="padding: 7px;">
<span class="slider-ether-usd">0</span> USD
или <span class="slider-ether-btc">0</span> BTC
</div>
<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-3 m-b-sm">
<button type="submit" class="btn btn-success btn-block">Дальше</button>
</div>
</div>
</form> </div>
</div>
</div>
</div>
</div>
</div>
</div>
 
 
<div class="row collapse " id="collapse-ether-pool">
<div class="col-xs-12">
<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
<div class="row m-l-xs m-r-xs m-t-n-md m-b-sm">
<div class="col-xs-12">
<h3 class="text-center p-sm" style="color:#5a93c4;">
Пулы </h3>
<form class="form-horizontal form-pools ether">
<div class="pools">
 
</div>
<div class="form-group">
<div class="col-xs-12">
<button type="button" class="btn btn-primary add m-b-sm" style="display:none;">
<span class="glyphicon glyphicon-plus-sign"></span>
Добавить пул </button>
<button type="submit" class="btn btn-success save m-b-sm" data-loading-text="Saving..." style="display:none;">
<span class="glyphicon glyphicon-ok"></span>
Сохранить </button>
<button type="button" class="btn btn-link m-b-sm cancel" data-target="#collapse-ether-pool" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-ether-pool">
<span class="glyphicon glyphicon-remove"></span>
Отменить </button>
</div>
</div>
<div class="template" style="display:none;">
<div class="form-group pool">
<div class="col-xs-10">
<select class="form-control"></select>
</div>
<div class="col-xs-2">
<button type="button" class="btn btn-danger remove">
<span class="glyphicon glyphicon-remove"></span>
</button>
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
<br><br>
<i class="fa fa-flash fa-4x"></i>
<h1 class="m-xs">0 MH/s</h1>
<h3 class="font-bold no-margins">
Хэшрейт<br><br>
</h3>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Пулы</h5>
<div class="ibox-tools">
<a data-target="#collapse-ether-pool" data-toggle="collapse" aria-expanded="false" class="pull-right" aria-controls="collapse-ether-pool">
<i class="fa fa-cog fa-lg"></i>
</a>
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Хэшрейт" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день.">
<i class="fa fa-info fa-lg"></i>
</a>
 
 
 
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
<h5>
Доходность за 1 MH/s </h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прибыльность" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно.">
<i class="fa fa-info fa-lg"></i>
</a>
</div>
</div>
<div class="ibox-content">
<div style="height: 170px;">
<p class="well m-xs">
У Вас еще не было начислений, невозможно отобразить доходность.
</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Прогноз доходности</h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прогноз доходности" data-content="If the ETH price and mining difficulty do not change, then this is how big would be your payout.">
<i class="fa fa-info fa-lg"></i>
</a>
</div>
</div>
<div class="ibox-content">
<p class="p-n m-t-n-xxs">
<span class="pull-right badge badge-info" style="background-color: #9ad1ed" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 день">
1д </span>
0 ETH = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-primary" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 неделя">
1н </span>
0 ETH = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-success" style="background-color: #A0F3BB" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 месяц">
1м </span>
0 ETH = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-danger" rel="tooltip" data-toggle="tooltip" data-placement="left" title="6 месяцев">
6м </span>
0 ETH = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n m-b-n-xxs">
<span class="pull-right badge badge-warning" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 год">
1г </span>
0 ETH = 0.00 USD
</p>
 
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-xs-12">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>DASH Баланс </h5>
<span class="btn btn-white btn-xs m-l-sm pull-right" data-toggle="popover" data-placement="left" data-container="body" tabindex="0" data-trigger="focus" data-html="true" data-content="Account hold <a href='https://hashflare.zendesk.com/hc/ru/articles/202879272-Why-am-I-unable-to-withdraw-funds-from-my-account-balance' rel='nofollow' target='_blank'>FAQ</a>">
Вывод </span>
</div>
<div class="ibox-content">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3">
<ul class="stat-list">
<li>
<div class="m-t-n-sm" style="position:absolute;top:50%;">
<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
</div>
<h2 class="m-l-md m-b-none" style="font-weight:400;">0 DASH</h2>
<small class="m-l-md">Баланс</small>
</li>
<li><hr></li>
<li>
<div class="m-t-n-sm" style="position:absolute;top:50%;">
<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
</div>
<h3 class="m-l-md m-b-none" style="font-weight:400;">0 DASH</h3>
<small class="m-l-md">Последняя DASH Выплата</small>
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
</div>
<input type="hidden" value="5.8000" id="dashprice">
<div class="row">
<div class="col-xs-12">
<div class="widget style1">
<div class="row">
<h2 id="dash">
<a class="header-toggle" data-target="#dash-row" data-toggle="collapse" aria-expanded="false" aria-controls="dash-row">
<span class="fa fa-angle-down"></span>
<span class="fa fa-angle-right"></span>
X11 (DASH) - 1 год </a>
<a class="purchase-toggle" data-target=".purchase-dash" data-toggle="collapse" aria-expanded="false" aria-controls="purchase-dash">
<i class="fa fa-shopping-cart text-success"></i>
</a>
</h2>
</div>
</div>
</div>
</div>
<div class="collapse in" id="dash-row">
 
<div class="row collapse  purchase-dash">
<div class="col-xs-12">
<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
<div>
<div class="row">
<div class="col-xs-12">
<h3 class="text-center p-xs" style="color:#5a93c4;">
Выберите хэшрейт </h3>
<div class="col-xs-12">
<div id="slider-dash" class="uislider m-t m-b" data-step="1" data-start="0" data-min="0" data-max="10000" data-unit="mega" data-type="dash"></div>
</div>
</div>
</div>
<div class="row hidden-xs hidden-sm">&nbsp;</div>
<div class="row hidden-xs hidden-sm">&nbsp;</div>
<div class="row purchase-dash" id="collapse-dash">
<div class="col-xs-12">
<div class="widget style1">
<form action="/panel/purchase" class="form-horizontal" id="PurchaseIndexForm" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div><input type="hidden" name="data[Purchase][product]" value="6" id="PurchaseProduct"/><input type="hidden" name="data[Purchase][amount]" class="slider-dash-total" value="0" id="PurchaseAmount"/> <div class="hidden-md hidden-lg text-center well well-sm m-b-sm" style="padding: 7px;">
<span class="slider-dash-usd">0</span> USD
или <span class="slider-dash-btc">0</span> BTC
</div>
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3 m-b-sm">
</div>
<div class="hidden-xs hidden-sm col-md-offset-1 col-md-4 text-center well well-sm" style="padding: 7px;">
<span class="slider-dash-usd">0</span> USD
или <span class="slider-dash-btc">0</span> BTC
</div>
<div class="col-xs-12 col-sm-6 col-md-offset-1 col-md-3 m-b-sm">
<button type="submit" class="btn btn-success btn-block">Дальше</button>
</div>
</div>
</form> </div>
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
<br><br>
<i class="fa fa-flash fa-4x"></i>
<h1 class="m-xs">0 MH/s</h1>
<h3 class="font-bold no-margins">
Хэшрейт<br><br>
</h3>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Пулы</h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Хэшрейт" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день.">
<i class="fa fa-info fa-lg"></i>
</a>
 
 
 
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
<h5>
Доходность за 1 MH/s </h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прибыльность" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно.">
<i class="fa fa-info fa-lg"></i>
</a>
</div>
</div>
<div class="ibox-content">
<div style="height: 170px;">
<p class="well m-xs">
У Вас еще не было начислений, невозможно отобразить доходность.
</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Прогноз доходности</h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прогноз доходности" data-content="If the DASH price and mining difficulty do not change, then this is how big would be your payout.">
<i class="fa fa-info fa-lg"></i>
</a>
</div>
</div>
<div class="ibox-content">
<p class="p-n m-t-n-xxs">
<span class="pull-right badge badge-info" style="background-color: #9ad1ed" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 день">
1д </span>
0 DASH = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-primary" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 неделя">
1н </span>
0 DASH = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-success" style="background-color: #A0F3BB" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 месяц">
1м </span>
0 DASH = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-danger" rel="tooltip" data-toggle="tooltip" data-placement="left" title="6 месяцев">
6м </span>
0 DASH = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n m-b-n-xxs">
<span class="pull-right badge badge-warning" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 год">
1г </span>
0 DASH = 0.00 USD
</p>
 
</div>
</div>
</div>
</div>
</div>
<hr/>
<div class="row">
<div class="col-xs-12">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>ZEC Баланс </h5>
<span class="btn btn-white btn-xs m-l-sm pull-right" data-toggle="popover" data-placement="left" data-container="body" tabindex="0" data-trigger="focus" data-html="true" data-content="Account hold <a href='https://hashflare.zendesk.com/hc/ru/articles/202879272-Why-am-I-unable-to-withdraw-funds-from-my-account-balance' rel='nofollow' target='_blank'>FAQ</a>">
Вывод </span>
</div>
<div class="ibox-content">
<div class="row">
<div class="col-xs-12 col-sm-6 col-md-3">
<ul class="stat-list">
<li>
<div class="m-t-n-sm" style="position:absolute;top:50%;">
<span class="btn btn-xs p-xxs" style="background-color:#5A93c4;cursor:default;"></span>
</div>
<h2 class="m-l-md m-b-none" style="font-weight:400;">0 ZEC</h2>
<small class="m-l-md">Баланс</small>
</li>
<li><hr></li>
<li>
<div class="m-t-n-sm" style="position:absolute;top:50%;">
<span class="btn btn-xs p-xxs" style="background-color:#c2dfe9;cursor:default;"></span>
</div>
<h3 class="m-l-md m-b-none" style="font-weight:400;">0 ZEC</h3>
<small class="m-l-md">Последняя ZEC Выплата</small>
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
</div>
<input type="hidden" value="0.0200" id="zcashprice">
<div class="row">
<div class="col-xs-12">
<div class="widget style1">
<div class="row">
<h2 id="zcash">
<a class="header-toggle" data-target="#zcash-row" data-toggle="collapse" aria-expanded="false" aria-controls="zcash-row">
<span class="fa fa-angle-down"></span>
<span class="fa fa-angle-right"></span>
EQUIHASH (ZEC) - 1 год </a>
</h2>
</div>
</div>
</div>
</div>
<div class="collapse in" id="zcash-row">
 
<div class="row collapse " id="collapse-zcash-pool">
<div class="col-xs-12">
<div class="widget slider-widget" style="border: 1px solid #dee1e2;">
<div class="row m-l-xs m-r-xs m-t-n-md m-b-sm">
<div class="col-xs-12">
<h3 class="text-center p-sm" style="color:#5a93c4;">
Пулы </h3>
<form class="form-horizontal form-pools zcash">
<div class="pools">
 
</div>
<div class="form-group">
<div class="col-xs-12">
<button type="button" class="btn btn-primary add m-b-sm" style="display:none;">
<span class="glyphicon glyphicon-plus-sign"></span>
Добавить пул </button>
<button type="submit" class="btn btn-success save m-b-sm" data-loading-text="Saving..." style="display:none;">
<span class="glyphicon glyphicon-ok"></span>
Сохранить </button>
<button type="button" class="btn btn-link m-b-sm cancel" data-target="#collapse-zcash-pool" data-toggle="collapse" aria-expanded="true" aria-controls="collapse-zcash-pool">
<span class="glyphicon glyphicon-remove"></span>
Отменить </button>
</div>
</div>
<div class="template" style="display:none;">
<div class="form-group pool">
<div class="col-xs-10">
<select class="form-control"></select>
</div>
<div class="col-xs-2">
<button type="button" class="btn btn-danger remove">
<span class="glyphicon glyphicon-remove"></span>
</button>
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
<br><br>
<i class="fa fa-flash fa-4x"></i>
<h1 class="m-xs">0 H/s </h1>
<h3 class="font-bold no-margins">
Хэшрейт<br><br>
</h3>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Пулы</h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Хэшрейт" data-content="Выберите до 3-х пулов, по которым хотите распределить мощность. Различные комбинации обеспечивают различные значения прибыльности. Вы можете изменить распределение один раз в день.">
<i class="fa fa-info fa-lg"></i>
</a>
 
 
 
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
<h5>
Доходность за 1 H/s </h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прибыльность" data-content="Это число показывает, какую примерную выплату вы получаете в день с данным распределением хэшрейта. Значение обновляется ежедневно.">
<i class="fa fa-info fa-lg"></i>
</a>
</div>
</div>
<div class="ibox-content">
<div style="height: 170px;">
<p class="well m-xs">
У Вас еще не было начислений, невозможно отобразить доходность.
</p>
</div>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="ibox float-e-margins">
<div class="ibox-title">
<h5>Прогноз доходности</h5>
<div class="ibox-tools">
<a data-container="body" data-toggle="popover" data-placement="top" tabindex="0" data-trigger="focus" title="Прогноз доходности" data-content="If the ZEC price and mining difficulty do not change, then this is how big would be your payout.">
<i class="fa fa-info fa-lg"></i>
</a>
</div>
</div>
<div class="ibox-content">
<p class="p-n m-t-n-xxs">
<span class="pull-right badge badge-info" style="background-color: #9ad1ed" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 день">
1д </span>
0 ZEC = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-primary" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 неделя">
1н </span>
0 ZEC = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-success" style="background-color: #A0F3BB" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 месяц">
1м </span>
0 ZEC = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n">
<span class="pull-right badge badge-danger" rel="tooltip" data-toggle="tooltip" data-placement="left" title="6 месяцев">
6м </span>
0 ZEC = 0.00 USD
</p>
<hr class="m-t-xxs m-b-sm">
<p class="p-n m-b-n-xxs">
<span class="pull-right badge badge-warning" rel="tooltip" data-toggle="tooltip" data-placement="left" title="1 год">
1г </span>
0 ZEC = 0.00 USD
</p>
 
</div>
</div>
</div>
</div>
</div>
<div class="modal fade" id="withdrawModal" tabindex="-1" role="dialog" aria-labelledby="withdrawModalLabel" aria-hidden="true" data-replace="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
<form action="/panel/withdraw" id="withdraw-form" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div> <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Вывод</h4>
</div>
<div class="modal-body">
<input type="hidden" name="data[Withdraw][commission]" value="0.00075000" id="WithdrawCommission"/><input type="hidden" name="data[Withdraw][minimum]" value="0.00010000" id="WithdrawMinimum"/> <div class="row">
<div class="col-md-4">
<div class="form-group"><label for="WithdrawCurrent" class="control-label">Current</label><input name="data[Withdraw][current]" class="form-control" value="0.00000793" disabled="disabled" type="text" id="WithdrawCurrent"/></div> </div>
<div class="col-md-4">
<div class="form-group"><label for="WithdrawAmount" class="control-label">Сумма</label><input name="data[Withdraw][amount]" class="form-control" value="-0.00074207" type="text" id="WithdrawAmount"/><p class="help-block">+ 0.00075000 комиссия</p></div> </div>
<div class="col-md-4">
<div class="form-group"><label for="WithdrawRemaining" class="control-label">Осталось</label><input name="data[Withdraw][remaining]" class="form-control" value="0.00000000" type="text" id="WithdrawRemaining"/></div> </div>
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
<strong>Кошелёк:</strong> 1GJCFYep1jUyHqaBCNtQLggFbHdYfCSBTF </div>
</div>
<div class="row text-info">
<div class="col-xs-12">
<a href="https://cryptopay.me/join/c7bb216e">
Получи дебетовую Bitcoin карту Cryptopay со скидкой! </a>
</div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
<button type="submit" class="btn btn-primary" id="withdraw-button">Вывод</button>
</div>
</form> </div>
</div>
</div>
<div class="modal fade" id="ethWithdrawModal" tabindex="-1" role="dialog" aria-labelledby="ethWithdrawModalLabel" aria-hidden="true" data-replace="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
<form action="/panel/withdraw/eth" id="eth-withdraw-form" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div> <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Вывод</h4>
</div>
<div class="modal-body">
<input type="hidden" name="data[EthWithdraw][commission]" value="0.0006" id="EthWithdrawCommission"/><input type="hidden" name="data[EthWithdraw][minimum]" value="0.0001" id="EthWithdrawMinimum"/> <div class="row">
<div class="col-md-4">
<div class="form-group"><label for="EthWithdrawCurrent" class="control-label">Current</label><input name="data[EthWithdraw][current]" class="form-control" value="0" disabled="disabled" type="text" id="EthWithdrawCurrent"/></div> </div>
<div class="col-md-4">
<div class="form-group"><label for="EthWithdrawAmount" class="control-label">Сумма</label><input name="data[EthWithdraw][amount]" class="form-control" value="-0.0006" type="text" id="EthWithdrawAmount"/><p class="help-block">+ 0.00060000 комиссия</p></div> </div>
<div class="col-md-4">
<div class="form-group"><label for="EthWithdrawRemaining" class="control-label">Осталось</label><input name="data[EthWithdraw][remaining]" class="form-control" value="0.00000000" type="text" id="EthWithdrawRemaining"/></div> </div>
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
<strong>Кошелёк:</strong> Нет </div>
</div>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
<button type="submit" class="btn btn-primary" id="withdraw-button">Вывод</button>
</div>
</form> </div>
</div>
</div>
<div class="modal fade" id="dashWithdrawModal" tabindex="-1" role="dialog" aria-labelledby="dashWithdrawModalLabel" aria-hidden="true" data-replace="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
<form action="/panel/withdraw/dash" id="dash-withdraw-form" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div> <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Вывод</h4>
</div>
<div class="modal-body">
<input type="hidden" name="data[DashWithdraw][commission]" value="0.0003" id="DashWithdrawCommission"/><input type="hidden" name="data[DashWithdraw][minimum]" value="0.0001" id="DashWithdrawMinimum"/> <div class="row">
<div class="col-md-4">
<div class="form-group"><label for="DashWithdrawCurrent" class="control-label">Current</label><input name="data[DashWithdraw][current]" class="form-control" value="0" disabled="disabled" type="text" id="DashWithdrawCurrent"/></div> </div>
<div class="col-md-4">
<div class="form-group"><label for="DashWithdrawAmount" class="control-label">Сумма</label><input name="data[DashWithdraw][amount]" class="form-control" value="-0.0003" type="text" id="DashWithdrawAmount"/><p class="help-block">+ 0.00030000 комиссия</p></div> </div>
<div class="col-md-4">
<div class="form-group"><label for="DashWithdrawRemaining" class="control-label">Осталось</label><input name="data[DashWithdraw][remaining]" class="form-control" value="0.00000000" type="text" id="DashWithdrawRemaining"/></div> </div>
</div>
<div class="row">
<div class="col-xs-12 well" style="word-break:normal">
<strong>Кошелёк:</strong> Нет </div>
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
<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
<button type="submit" class="btn btn-primary" id="withdraw-button">Вывод</button>
</div>
</form> </div>
</div>
</div>
<div class="modal fade" id="zecWithdrawModal" tabindex="-1" role="dialog" aria-labelledby="zecWithdrawModalLabel" aria-hidden="true" data-replace="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
<form action="/panel/withdraw/zec" id="zec-withdraw-form" method="post" accept-charset="utf-8"><div style="display:none;"><input type="hidden" name="_method" value="POST"/></div> <div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Вывод</h4>
</div>
<div class="modal-body">
<input type="hidden" name="data[ZecWithdraw][commission]" value="3.0E-5" id="ZecWithdrawCommission"/><input type="hidden" name="data[ZecWithdraw][minimum]" value="0.001" id="ZecWithdrawMinimum"/> <div class="row">
<div class="col-md-4">
<div class="form-group"><label for="ZecWithdrawCurrent" class="control-label">Current</label><input name="data[ZecWithdraw][current]" class="form-control" value="0" disabled="disabled" type="text" id="ZecWithdrawCurrent"/></div> </div>
<div class="col-md-4">
<div class="form-group"><label for="ZecWithdrawAmount" class="control-label">Сумма</label><input name="data[ZecWithdraw][amount]" class="form-control" value="-3.0E-5" type="text" id="ZecWithdrawAmount"/><p class="help-block">+ 0.00003000 комиссия</p></div> </div>
<div class="col-md-4">
<div class="form-group"><label for="ZecWithdrawRemaining" class="control-label">Осталось</label><input name="data[ZecWithdraw][remaining]" class="form-control" value="0.00000000" type="text" id="ZecWithdrawRemaining"/></div> </div>
</div>
<div class="row">
<div class="col-xs-12 well" style="word-break:normal">
<strong>Кошелёк:</strong> Нет </div>
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
<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
<button type="submit" class="btn btn-primary" id="withdraw-button">Вывод</button>
</div>
</form> </div>
</div>
</div>
<div class="modal fade" id="reinvestModal" tabindex="-1" role="dialog" aria-labelledby="reinvestModalLabel" aria-hidden="true" data-replace="true">
<div class="modal-dialog modal-md">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Реинвестировать</h4>
</div>
<div class="modal-body">
<p>Функция Реинвест позволяет Вам автоматически докупать мощность, если на Вашем балансе достаточно средств.</p>
<p>При включении этой функции, все средства на Вашем балансе будут использованы для покупки мощности.</p>
<p>После каждой выплаты, система проверит, достаточно ли средств на Балансе для покупки минимального количества мощности (10 GH/s для SHA-256 или 1 MH/s для Scrypt). Если средств достаточно, покупка будет создана и подтверждена автоматически.</p>
<form id="reinvest-form" action="" method="post">
<div class="form-group">
<label class="sr-only" for="reinvest">Реинвестировать</label>
<select name="reinvest" id="reinvest" class="form-control">
<option value="" selected>Do not reinvest</option>
<option value="sha">Reinvest in SHA-256</option>
<option value="scrypt">Reinvest in Scrypt</option> </select>
</div>
</form>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
<button type="button" class="btn btn-primary" id="reinvest-save">Сохранить</button>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="footer">
<div class="row">
<div class="col-md-5">
<strong>Copyright</strong> &copy; HashCoins LP, Все права защищены. 2014-2017 </div>
<div class="col-md-4">
Время на сервере: 08.07.2017 14:58:16 UTC 00:00 </div>
<div class="col-md-3" style="text-align:right">
Последнее обновление: 21.11.2016
</div>
</div>
</div>
</div>
</div>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js" language="javascript" type="text/javascript"></script>
 
<script type="text/javascript" src="/js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="/js/jquery-ui-1.10.4.min.js"></script>
<script type="text/javascript" src="/js/jquery-ui.custom.min.js"></script>
<script type="text/javascript" src="/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script type="text/javascript" src="/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="/js/plugins/pace/pace.min.js"></script>
<script type="text/javascript" src="/js/plugins/iCheck/icheck.min.js"></script>
<script type="text/javascript" src="/js/plugins/steps/jquery.steps.min.js"></script>
<script type="text/javascript" src="/js/plugins/nouislider/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="/js/plugins/flot/jquery.flot.js"></script>
<script type="text/javascript" src="/js/plugins/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="/js/plugins/flot/jquery.flot.tooltip.min.js"></script>
<script type="text/javascript" src="/js/plugins/flot/jquery.flot.stackpercent.js"></script>
<script type="text/javascript" src="/js/plugins/flot/jquery.flot.resize.js"></script>
<script type="text/javascript" src="/js/plugins/flot/jquery.flot.time.js"></script>
<script type="text/javascript" src="/js/plugins/peity/jquery.peity.min.js"></script>
<script type="text/javascript" src="/js/plugins/easypiechart/jquery.easypiechart.js"></script>
<script type="text/javascript" src="/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="/js/plugins/dataTables/jquery.dataTables.js"></script>
<script type="text/javascript" src="/js/plugins/dataTables/dataTables.bootstrap.js"></script>
<script type="text/javascript" src="/js/plugins/dataTables/dataTables.tableTools.min.js"></script>
<script type="text/javascript" src="//cdn.datatables.net/plug-ins/1.10.10/sorting/datetime-moment.js"></script>
<script type="text/javascript" src="/js/inspinia.js"></script>
<script type="text/javascript" src="/js/poolsAndSliders.js?v=1.1.1"></script>
<script type="text/javascript" src="/js/panel.js?v=3.3.10.7"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flot/0.8.3/jquery.flot.selection.min.js"></script>
 
<script type="text/javascript">
$(document).ready(function () {
	$("#reinvest-save").click(function(event) {
	    event.preventDefault();

	    var self = $(this);

	    self.button("loading");

	    var data = $("#reinvest-form").serialize();

	    $.post("/panel/reinvest", data, function(response) {
	        self.button("reset");

	        document.location.reload();
	    }, "json");
	});

	function labelFormatter(label, series) {
		return "<div class='badge badge-white'>" + label + "</div>";
	}

    function tooltipper(label, xval, yval, flotItem) {
		return (yval.toFixed(8).replace(/([0-9]+(\.[0-9]+[1-9])?)(\.?0+$)/,"$1")) + " %s " + "  %x";
	}

    var balanceoptions = {
        xaxis: {
            mode: "time",
            tickSize: [1, "day"],
            tickLength: 0,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: "Arial",
            axisLabelPadding: 10,
            color: "#d5d5d5",
            timeformat: "%d.%m"
        },
        yaxes: [
	        {
	            position: "left",
	            //max: 1070,
	            color: "#f5f5f5",
	            axisLabelUseCanvas: true,
	            axisLabelFontSizePixels: 12,
	            axisLabelFontFamily: "Arial",
	            axisLabelPadding: 3
	        },
	        {
	            position: "right",
	            color: "#f5f5f5",
	            axisLabelUseCanvas: true,
	            axisLabelFontSizePixels: 12,
	            axisLabelFontFamily: "Arial",
	            axisLabelPadding: 67
	        }
        ],
//        legend: {
//            noColumns: 2,
//            labelBoxBorderColor: "#000000",
//            position: "nw"
//        },
        legend: false,
        grid: {
            hoverable: true,
            borderWidth: 0
        },
        tooltip: true,
	    tooltipOpts: {
			content: tooltipper,
			xDateFormat: "%d.%m.%y"
	    }
    };
    var pooloptions = {
        series: {
	        pie: {
	            show: true,
	            //radius: 1/2,
	            radius: 1,
	            label: {
	                show: false,
	                radius: 1,
	                formatter: labelFormatter,
	                threshold: 0.1
	            },
	            stroke: {
	                width: 2
                },
                shadow: {
                    top: 5
                }
	        }
	    },
	    legend: {
	        show: true
	    },
	    grid: {
            hoverable: true
	    },
        tooltip: true,
        tooltipOpts: {
            content: "%p.0%, %s", // show percentages, rounding to 2 decimal places
            shifts: {
                x: 20,
                y: 0
            },
            defaultTheme: true
        }
    };
    var profitoptions = {
        xaxis: {
            mode: "time",
            tickSize: [1, "day"],
            tickLength: 0,
            axisLabel: "Date",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: "Arial",
            axisLabelPadding: 10,
            color: "#d5d5d5",
            timeformat: "%d.%m"
        },
        yaxes: [
	        {
	            position: "left",
	            color: "#f5f5f5",
	            axisLabelUseCanvas: true,
	            axisLabelFontSizePixels: 12,
	            axisLabelFontFamily: "Arial",
	            axisLabelPadding: 3
	        }
        ],
        legend: false,
        grid: {
            hoverable: true,
            borderWidth: 0
        },
        tooltip: true,
	    tooltipOpts: {
			content: tooltipper,
			xDateFormat: "%d.%m.%y"
	    }
    };

	var payouts = [[1499212800000,0.00000364], [1499299200000,0.00000328], [1499385600000,0.00000325], [1499472000000,0.00000334]];
	var ETH_payouts = [];
	var DASH_payouts = [];
	var ZEC_payouts = [];
    var balances = [[1499212800000, 0.00000225], [1499299200000, 0.00000413], [1499385600000, 0.000006], [1499472000000, 0.00000793]];
    var ETH_balances = [[1499212800000, 0]];
    var DASH_balances = [[1499212800000, 0]];
    var ZEC_balances = [[1499212800000, 0]];

	var balancedata = [
        {
            label: "BTC Выплата&nbsp;",
            data: payouts,
            color: "#84defb",
            bars: {
                show: true,
                align: "center",
                barWidth: 24 * 60 * 60 * 600,
                lineWidth: 0,
                fill: 1.0,
                fillColor: "rgba(199,237,252,0.5)"
            },
			yaxis: 1,
			highlightColor: "rgba(199,237,252,0.5)"
        }, {
            label: "BTC Баланс",
            data: balances,
            yaxis: 2,
            color: "#5A93c4",
            lines: {
                lineWidth: 2,
                show: true,
                fill: false,
                fillColor: {
                    colors: [{
                        opacity: 0.2
                    }, {
                        opacity: 0
                    }]
                }
            },
            splines: {
                show: false,
                tension: 0.6,
                lineWidth: 1,
                fill: 0.1
            }
        }
    ];

	var ETH_balancedata = [
        {
            label: "ETH Выплата&nbsp;",
            data: ETH_payouts,
            color: "#84defb",
            bars: {
                show: true,
                align: "center",
                barWidth: 24 * 60 * 60 * 600,
                lineWidth: 0,
                fill: 1.0,
                fillColor: "rgba(199,237,252,0.5)"
            },
			yaxis: 1,
			highlightColor: "rgba(199,237,252,0.5)"
        }, {
            label: "ETH Баланс",
            data: ETH_balances,
            yaxis: 2,
            color: "#5A93c4",
            lines: {
                lineWidth: 2,
                show: true,
                fill: false,
                fillColor: {
                    colors: [{
                        opacity: 0.2
                    }, {
                        opacity: 0
                    }]
                }
            },
            splines: {
                show: false,
                tension: 0.6,
                lineWidth: 1,
                fill: 0.1
            }
        }
    ];

	var DASH_balancedata = [
        {
            label: "DASH Выплата&nbsp;",
            data: DASH_payouts,
            color: "#84defb",
            bars: {
                show: true,
                align: "center",
                barWidth: 24 * 60 * 60 * 600,
                lineWidth: 0,
                fill: 1.0,
                fillColor: "rgba(199,237,252,0.5)"
            },
			yaxis: 1,
			highlightColor: "rgba(199,237,252,0.5)"
        }, {
            label: "DASH Баланс",
            data: DASH_balances,
            yaxis: 2,
            color: "#5A93c4",
            lines: {
                lineWidth: 2,
                show: true,
                fill: false,
                fillColor: {
                    colors: [{
                        opacity: 0.2
                    }, {
                        opacity: 0
                    }]
                }
            },
            splines: {
                show: false,
                tension: 0.6,
                lineWidth: 1,
                fill: 0.1
            }
        }
    ];

	var ZEC_balancedata = [
        {
            label: "ZEC Выплата&nbsp;",
            data: ZEC_payouts,
            color: "#84defb",
            bars: {
                show: true,
                align: "center",
                barWidth: 24 * 60 * 60 * 600,
                lineWidth: 0,
                fill: 1.0,
                fillColor: "rgba(199,237,252,0.5)"
            },
			yaxis: 1,
			highlightColor: "rgba(199,237,252,0.5)"
        }, {
            label: "ZEC Баланс",
            data: ZEC_balances,
            yaxis: 2,
            color: "#5A93c4",
            lines: {
                lineWidth: 2,
                show: true,
                fill: false,
                fillColor: {
                    colors: [{
                        opacity: 0.2
                    }, {
                        opacity: 0
                    }]
                }
            },
            splines: {
                show: false,
                tension: 0.6,
                lineWidth: 1,
                fill: 0.1
            }
        }
    ];

    $.plot($("#flot-balance"), balancedata, balanceoptions);
    if ($("#flot-eth-balance").length) $.plot($("#flot-eth-balance"), ETH_balancedata, balanceoptions);
    if ($("#flot-dash-balance").length) $.plot($("#flot-dash-balance"), DASH_balancedata, balanceoptions);
    if ($("#flot-zec-balance").length) $.plot($("#flot-zec-balance"), ZEC_balancedata, balanceoptions);

	var shapools = [{data: [34], label: 'VB', color: '#6cb8f7'}, {data: [33], label: 'SL', color: '#A0F3BB'}, {data: [33], label: 'BW', color: '#9ad1ed'}];
    if ($("#flot-pools-sha").length) $.plot($("#flot-pools-sha"), shapools, pooloptions);
	var shaprofitdata = [
        {
            label: "BTC за 1 TH/s",
            data: [[1499212800000,0.000364],[1499299200000,0.000328],[1499385600000,0.000325],[1499472000000,0.000334]],
            color: "#DBEAF9",
            bars: {
                show: true,
                align: "center",
                barWidth: 24 * 60 * 60 * 600,
                lineWidth: 0,
                fillColor: "rgba(199,237,252,0.5)"
            },
			highlightColor: "rgba(199,237,252,0.5)"
        }
    ];
    $.plot($("#flot-profit-sha"), shaprofitdata, profitoptions);
    
	var scryptpools = [{data: [33], label: 'LP', color: '#6cb8f7'}, {data: [33], label: 'LG', color: '#A0F3BB'}, {data: [34], label: 'F2P', color: '#9ad1ed'}];
    if ($("#flot-pools-scrypt").length) $.plot($("#flot-pools-scrypt"), scryptpools, pooloptions);
	var etherpools = [{data: [50], label: 'DP', color: '#6cb8f7'}, {data: [50], label: 'EP', color: '#A0F3BB'}];
    if ($("#flot-pools-ether").length) $.plot($("#flot-pools-ether"), etherpools, pooloptions);
	var dashpools = [{data: [100], label: 'CM', color: '#6cb8f7'}];
    if ($("#flot-pools-dash").length) $.plot($("#flot-pools-dash"), dashpools, pooloptions);
	var zcashpools = [{data: [100], label: 'FP', color: '#6cb8f7'}];
    if ($("#flot-pools-zcash").length) $.plot($("#flot-pools-zcash"), zcashpools, pooloptions);
		$(".form-pools.sha").each(function(){
	        $(this).poolsAndSliders({
	            pools: [{"id":"2","title":"ViaBTC"},{"id":"5","title":"BW.com"},{"id":"6","title":"Slush"},{"id":"7","title":"BTCchina"},{"id":"8","title":"F2pool"},{"id":"18","title":"Antpool"}],
	            set: [{"id":"2","percentage":"34"},{"id":"6","percentage":"33"},{"id":"5","percentage":"33"}],
	            custom: {
	                type: "sha"
	            },
	            url: "/panel",
	            success: function(data) {
	                var result = jQuery.parseJSON(data);
	                if (result.status == "error") alert(result.reason);
	                else location.reload();
	            }
	        });
	    });

		$(".form-pools.scrypt").each(function(){
	        $(this).poolsAndSliders({
	            pools: [{"id":"10","title":"F2Pool"},{"id":"12","title":"LiteGuardian"},{"id":"14","title":"Litecoinpool"},{"id":"15","title":"LTC1BTC"},{"id":"16","title":"Coinotron"},{"id":"17","title":"Give Me Coins"}],
	            set: [{"id":"14","percentage":"33"},{"id":"12","percentage":"33"},{"id":"10","percentage":"34"}],
	            custom: {
	                type: "scrypt"
	            },
	            url: "/panel",
	            success: function(data) {
	                var result = jQuery.parseJSON(data);
	                if (result.status == "error") alert(result.reason);
	                else location.reload();
	            }
	        });
	    });

		$(".form-pools.ether").each(function(){
	        $(this).poolsAndSliders({
	            pools: [{"id":"19","title":"EthereumPool.co"},{"id":"20","title":"Dwarfpool.com"}],
	            set: [{"id":"20","percentage":"50"},{"id":"19","percentage":"50"}],
	            custom: {
	                type: "ether"
	            },
	            url: "/panel",
	            success: function(data) {
	                var result = jQuery.parseJSON(data);
	                if (result.status == "error") alert(result.reason);
	                else location.reload();
	            }, maxPools: 2
	        });
	    });

		$(".form-pools.dash").each(function(){
	        $(this).poolsAndSliders({
	            pools: [{"id":"23","title":"Coinmine.pl"}],
	            set: [{"id":"23","percentage":"100"}],
	            custom: {
	                type: "dash"
	            },
	            url: "/panel",
	            success: function(data) {
	                var result = jQuery.parseJSON(data);
	                if (result.status == "error") alert(result.reason);
	                else location.reload();
	            }
	        });
	    });

		$(".form-pools.zcash").each(function(){
	        $(this).poolsAndSliders({
	            pools: [{"id":"24","title":"FlyPool"}],
	            set: [{"id":"24","percentage":"100"}],
	            custom: {
	                type: "zcash"
	            },
	            url: "/panel",
	            success: function(data) {
	                var result = jQuery.parseJSON(data);
	                if (result.status == "error") alert(result.reason);
	                else location.reload();
	            }
	        });
	    });
});</script>
<script>
	$(document).ready(function(){
		$('.i-checks').iCheck({
			checkboxClass: 'icheckbox_square-green',
			radioClass: 'iradio_square-green'
		});

		$(".todo-list").sortable({
			placeholder: "sort-highlight",
			handle: ".handle",
			forcePlaceholderSize: true,
			zIndex: 999999
		}).disableSelection();
	});
</script>
 
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter = new Ya.Metrika({id:28931545,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/28931545" style="position:absolute; left:-9999px;" alt=""/></div></noscript>
 
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59948222-1', 'auto');
  ga('send', 'pageview');
  ga('require', 'ecommerce');

</script>
</body>
</html>

