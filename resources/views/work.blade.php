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
				@include('dynamic_menu',['menu_points'=>$menu_points])
				<!--Основная часть-->
				<div class="main">
					<h1>Work</h1>
					<p>Lorem ipsum dolor sit amet, <a href="#" title="link">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <b title="bold">reprehenderit in voluptate velit</b> esse cillum dolore eu fugiat nulla pariatur. <i title="italic">Excepteur sint occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt.</p>

                    <!--Таблица-->
                    <h2>Table</h2>
                    <table class="bordered">
                        <thead>
                            <tr>
                                <th>Purcus</th>
                                <th>Hantis</th>
                                <th>Mastron</th>
                                <th>Jevicon</th>
                                <th>Language</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Gitsome</td>
                                <td>Some one</td>
                                <td>Take mose</td>
                                <td>Likbes</td>
                                <td>Racounter</td>
                            </tr>
                            <tr>
                                <td>Linkage</td>
                                <td>Fordor</td>
                                <td>Miad ron me</td>
                                <td>Diablo core</td>
                                <td>Tidbade</td>
                            </tr>
                            <tr>
                                <td>Hicura</td>
                                <td>Warecom</td>
                                <td>Xamicon</td>
                                <td>Yamama</td>
                                <td>Udoricano</td>
                            </tr>
                            <tr>
                                <td>Lavistaro</td>
                                <td>Micanorta</td>
                                <td>Ebloconte ma</td>
                                <td>Quad ri port</td>
                                <td>Timesquer</td>
                            </tr>
                        </tbody>
                    </table>
                    <p>Lorem ipsum dolor sit amet, <a href="#" title="link">consectetur adipisicing elit</a>, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in <b title="bold">reprehenderit in voluptate velit</b> esse cillum dolore eu fugiat nulla pariatur. <i title="italic">Excepteur sint occaecat</i> cupidatat non proident, sunt in culpa qui officia deserunt.</p>
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
	</body>
</html>
