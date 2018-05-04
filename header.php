<?php
session_Start();
define("ROOT", 'http://'.$_SERVER['SERVER_NAME'].'/');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" class=" js csstransitions"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>СДЮСШОР №&nbsp;2». </title>
  	<!-- STYLES -->
	<link href="http://dusshor1.ru/" rel="canonical">
	<link href="<?=ROOT?>css/bootstrap.css" type="text/css" rel="stylesheet">
	<link href="<?=ROOT?>css/colorbox.css" type="text/css" rel="stylesheet">
	<link href="<?=ROOT?>css/styles_main.css" type="text/css" rel="stylesheet">
	<link href="<?=ROOT?>css/theme.css" type="text/css" rel="stylesheet">
	<!-- SCRIPTS -->
	<script type="text/javascript" async="" src="<?=ROOT?>js/watch.js"></script>
  	<script type="text/javascript" src="<?=ROOT?>js/jquery.min.js"></script>
  	<script type="text/javascript" src="<?=ROOT?>js/jquery.cookie.min.js"></script>
  	<script type="text/javascript" src="<?=ROOT?>js/jquery.tools.min.js"></script>
  	<script type="text/javascript" src="<?=ROOT?>js/jquery.colorbox-min.js"></script>
  	<script type="text/javascript" src="<?=ROOT?>js/modernizr.js"></script>
  	<script type="text/javascript" src="<?=ROOT?>js/slick.min.js"></script>
  	<script type="text/javascript" src="<?=ROOT?>js/hoverdir.js"></script>
  	<script type="text/javascript" src="<?=ROOT?>js/site.js"></script>
</head>
<body class="cntSizeMiddle  mainPage c4 l2">
<div class="container container_12  containerWide">
	<div class="headerWrapper">
    	<div class="headerImage">
        	<div class="logoAndInfoWrapper">
            </div>
    	</div>
	</div>
	<div class="mainMenu mainMenuStyleS18 mainMenuPullDown clearfix">
	<ul>
        <li class="item first">
                <a href="<?=ROOT ?>">О нас</a></li>
		    <li class="item">
                <a href="children.php">Наши воспитаники</a></li>
        <li class="item hasChildren">
                <a href="#">Отделения</a>
                <ul style="display: none;">
                  <li>
                    <a href="<?=ROOT?>./aboutus/aerobiks.php">Аэробика</a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>./aboutus/biatlon.php">Биатлон</a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>./aboutus/doschool_otd.php">Дошкольное отделение</a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>./aboutus/greb_slalom.php">Гребня слалом</a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>./aboutus/hud_gimnastika.php">Художественная гимнастика</a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>./aboutus/orientir.php">Спортивное ориентирование</a>
                  </li>
                  <li>
                    <a href="<?=ROOT?>./aboutus/sport_gimnastika.php">Спортивная гимнастика</a>
                  </li>
                </ul>
              </li>
        <li class="item">
            <a href="/admin/">Для тренеров</a></li>
		</ul>
</div>
<div class="grid_12 columnWide">
<div class="columnWidePadding"></div>