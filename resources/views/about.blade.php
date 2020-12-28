<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Шаблоны сайтов бесплатно, дизайн сайта бесплатно, адаптивный дизайн">
		<meta name="keywords" content="Шаблоны сайтов бесплатно, дизайн сайта бесплатно, адаптивный дизайн">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
		<title>Бесплатные шаблоны сайтов</title>
	</head>
	<body>
		<div class="wrapper">
			@include('header')
			@include('slider')
			<!--Контент-->
			<div class="content">
				@include('nav_menu')
				<!--Основная часть-->
				<div class="main">
					<h1>About</h1>
					<p>Lorem ipsum dolor sit amet, <a href="#" title="link">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <b title="bold">reprehenderit in voluptate velit</b> esse cillum dolore eu fugiat nulla pariatur. <i title="italic">Excepteur sint occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt.</p>

                    <p><img src="images/img1.jpg" style="float:left;margin:10px;">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odit pariatur distinctio aperiam ullam nam doloribus ipsam eos commodi. Nisi, nulla, expedita doloremque minima fugit dolore ab totam distinctio accusamus hic.</p>

				</div>
			</div>
			@include('footer')
		</div>
		<!--Подключение скриптов-->
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/bootstrap-transition.js') }}"></script>
		<script src="{{ asset('js/bootstrap-carousel.js') }}"></script>
        <script src="{{ asset('js/js.js') }}"></script>
	</body>
</html>
