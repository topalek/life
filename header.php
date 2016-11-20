<?php
$p=$_GET['p'];
?>
<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="robots" content="noindex,nofollow">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Life is Wonderful</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/lightgallery.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/modernizr-custom.js"></script>
	<script src="js/owl.carousel.js"></script>
	<script src="js/jquery.mousewheel-3.0.6.pack.js"></script>
	<script src="js/lightgallery.js"></script>
	<script src="js/lg-video.min.js"></script>
	<script src="js/lg-fullscreen.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/app.js"></script>
</head>
<body>
<header class="header">
	<div id="header_top">
		<div class="container">
			<div class="row">
				<div class="col-md-7"></div>
				<div class="col-md-2 no-padding">
					<div class="pull-right">
						<div class="header_phone">
							<i class="icon">
								<img src="img/svg/phone-ringing.svg" alt="phone-ringing">
							</i>
							<a href="tel:+380504708819">+38 (050) 470 88 19</a>
						</div>
					</div>

				</div>
				<div class="col-md-3">
					<div class="header_email pull-right">
						<i class="icon">
							<img src="img/svg/evelope.svg" alt="phone-ringing">
						</i>
						<a href="mailto:markiza.topalova@gmail.com">markiza.topalova@gmail.com</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="header_nav">
		<nav>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="nav-container clearfix">
							<div class="nav-item">
								<a href="/" class="logo text-xs-center">
									<div class="logo_header">жизнь прекрасна</div>
									<div class="logo_description">агентство торжеств</div>
								</a>
							</div>
							<div class="nav-item">
								<ul class="nav">
									<li><a href="/" class="nav-link <?php echo (!isset($p))? "active" : ""?>">главная</a></li>
									<li><a href="/?p=service" class="nav-link
<?php echo (isset($p) && $p=="service")? "active" : ""?>">услуги
										</a></li>
									<li><a href="/?p=reviews" class="nav-link <?php echo (isset($p) && $p=="reviews")? "active" : ""?>">отзывы</a></li>
									<li><a href="/?p=portfolio" class="nav-link <?php echo (isset($p) && $p=="portfolio")? "active" : ""?>">портфолио</a></li>
									<li><a href="/?p=contacts" class="nav-link <?php echo (isset($p) && $p=="contacts")? "active" : ""?>">контакты</a></li>
								</ul>
							</div>
							<div class="nav-item">
								<ul class="link_group">
									<li><a href="/?p=sapphire" class="link<?php echo (isset($p) && $p=="sapphire")? " active" : ""?>">Театр песни "<strong>Сапфир</strong>"</a></li>
									<li><a href="/?p=carre" class="link<?php echo (isset($p) && $p=="carre")? " active" : ""?>">Кавер группа "<strong>Carre</strong>"</a></li>
								</ul>
							</div>

							<div class="nav-item">
								<div class="search_triger">
									<i class="fa fa-search"></i>
								</div>
							</div>
							<div class="header_search">
								<form action="" class="form-search">
									<input type="text" class="input-search" name="s"
									       placeholder="Например: прокат лимузина">
									<button class="input-submit" title="Найти">
										<i class="fa fa-search"></i>
									</button>
									<div id="close-search"><i class="fa fa-close"></i></div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
	</div>
</header>
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<div class="row">
					<div class="col-xs-12">
						<div class="modal-top clearfix">
							<svg class="pull-left icon-svg icon-double-bed">
								<use xlink:href="/img/svg/symbol-defs.svg#icon-list"></use>
							</svg>
							<h4 class="modal-title pull-left" id="exampleModalLabel">Заказать консультацию организатора событий</h4>
						</div>
					</div>
				</div>
				<form class="form" action="">
					<div class="row">
						<div class="col-xs-4">
							<div class="form-group">
								<label for="name" class="form-control-label">Имя и фамилия*</label>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<div class="form-group">
								<label for="tel" class="form-control-label">Номер телефона*</label>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="form-group">
								<input type="text" class="form-control" id="tel" name="tel">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">
							<div class="form-group">
								<label for="remark" class="form-control-label">Примечания</label>
							</div>
						</div>
						<div class="col-xs-8">
							<div class="form-group">
								<textarea name="remark" class="form-control"  id="remark" cols="30" rows="10"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-4">&nbsp;</div>
						<div class="col-xs-8">
							<a href="#" class="my-btn">Отправить запрос</a>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<div class="row">
					<div class="col-xs-12">
						<div class="pull-right">
							<h5 class="d-inline-block">Анна</h5>
							<div class="d-inline-block header_phone">
								<i class="icon">
									<img src="img/svg/phone-ringing.svg" alt="phone-ringing">
								</i>
								<a href="tel:+380504708819">+38 (050) 470 88 19</a>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="container">