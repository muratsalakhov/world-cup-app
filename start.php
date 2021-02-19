<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ЧМ-2018</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700&display=swap&subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/start.css">
<body>


<header>
	<div class="container">
		<div class="header-logo">
			<a href="/">Чемпионат мира по футболу 2018</a>
		</div>
		<div class="header-buttons">
			<a href="authentification.php">Вход
			<a href="registration.php">Регистрация</a>
		</div>
	</div>
</header>

<section class="start-main">
	<div class="container">
		<div class="owl-carousel owl-theme">
		    <div class="owl-slide"><img src="img/start/start-1.jpg" alt=""></div>
		    <div class="owl-slide"><img src="img/start/start-2.jpg" alt=""></div>
		    <div class="owl-slide"><img src="img/start/start-3.jpg" alt=""></div>
		    <div class="owl-slide"><img src="img/start/start-4.jpg" alt=""></div>
		    <div class="owl-slide"><img src="img/start/start-5.jpg" alt=""></div>
		    <div class="owl-slide"><img src="img/start/start-6.jpg" alt=""></div>
		    <div class="owl-slide"><img src="img/start/start-7.jpg" alt=""></div>
		</div>
	</div>
</section>

<footer>
	<div class="container">
		<div class="footer-info">
			<p>Создано в учебных целях. 2019 Салахов М.Р.</p>
		</div>
	</div>
</footer>

<div id="unregistered" class="modalbackground">
	<div class="modalwindow">
		<h3>Ошибка!</h3>
		<p>Авторизуйтесь для работы с сайтом</p>
		<a href="start.php">Закрыть</a>
	</div>
</div>

<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script>$(document).ready(function(){
$('.owl-carousel').owlCarousel({
	items:1,
	loop:true, //Зацикливаем слайдер
    autoplay:true, //Автозапуск слайдера
    smartSpeed:1000, //Время движения слайда
    autoplayTimeout:3000, //Время смены слайда
    mouseDrag: true,
    //touchDrag: true,
    dots: false,
    stagePadding: 0
});
});</script>
</body>
</html>
