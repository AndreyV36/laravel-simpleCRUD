<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Шаблоны сайтов бесплатно, дизайн сайта бесплатно, адаптивный дизайн">
		<meta name="keywords" content="Шаблоны сайтов бесплатно, дизайн сайта бесплатно, адаптивный дизайн">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
		<title>Бесплатные шаблоны сайтов</title>
	</head>
	<body>
		<div class="wrapper">
			@include('header')
			@include('slider')
			<!--Контент-->
			<div class="content">
				<!--Навигация-->
				@include('nav_menu')
				<!--Основная часть-->
				<div class="main">
					<h1>Contacts</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis repudiandae accusantium quae officiis voluptate saepe earum cumque! Iusto repellat minus enim voluptatibus. Optio, deleniti odit dicta minima quaerat non fugiat.</p>
					<div id="demo">
					  <p>Message</p>
					  <input v-model="message">
					</div>

				</div>
			</div>
			<!--Подвал-->
			@include('footer')
		</div>
		<!--Подключение скриптов-->
		<script src="js/jquery.js"></script>
		<script src="js/bootstrap-transition.js"></script>
		<script src="js/bootstrap-carousel.js"></script>
        <script src="js/js.js"></script>
        <script src="js/contacts.js"></script>
	</body>
</html>
