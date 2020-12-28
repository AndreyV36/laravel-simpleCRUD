<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Шаблоны сайтов бесплатно, дизайн сайта бесплатно, адаптивный дизайн">
		<meta name="keywords" content="Шаблоны сайтов бесплатно, дизайн сайта бесплатно, адаптивный дизайн">
		<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
		<title>Бесплатные шаблоны сайтов</title>
	</head>
	<body>
		<div class="wrapper">
			<!--Шапка-->
			<div class="header">
				<div class="headerContent">
					<div class="logo"><a href="#"><img src="images/logo.png"></a></div>
					<form class="search">
						<input type="text">
						<input type="image" src="images/button-search.png">
					</form>
				</div>
			</div>
			<!--Слайдер-->
			@include('slider')
			<!--Контент-->
			<div class="content">
				<!--Навигация-->
				<ul class="nav">
					<li><a href="/">Home</a></li>
					<li><a href="/about">About</a></li>
					<li><a href="/work">Work</a></li>
					<li><a href="/blog">Blog</a></li>
					<li><a href="/contacts">Contacts</a></li>
				</ul>
				<!--Основная часть-->
				<div class="main">
					
					<h1>Test task result(simple crud application)</h1>
					<div id="crud">
						<div class="row">
							<div class="col-12">
								<button class="btn btn-primary float-right mr-2" @click.prevent="openCreateForm()">Create article</button>
							</div>
						</div>
						<div class="row">
	                        <div class="col-1"><b>ID</b></div>
	                        <div class="col-3"><b>Article name</b></div>
	                        <div class="col-6"><b>Article content</b></div>
	                        <div class="col-2"></div>
	                    </div>
						<div v-for="article in articles">
							<div class="row" :key='article.id'>
		                        <div class="col-1">@{{article.id}}</div>
		                        <div class="col-3">@{{article.name}}</div>
		                        <div class="col-6">@{{article.content}}</div>
		                        <div class="col-2">
		                        	<button class="btn btn-primary" @click.prevent="openEditForm(article)">Edit</button>
		                        	<button class="btn btn-primary" @click.prevent="deleteArticle(article)">Delete</button>
		                        </div>
		                    </div>
						</div>
						

						<!--edit form-->
						<div class="modal" role="dialog" id="articleEditForm">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Edit article <span class="article_id"></span></h5>        
										<button type="button" class="close" @click.prevent="closeModal()">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<input type="hidden" name="articleId">
										<p>Name:</p><p><input type="text" required placeholder="Article name" name="name" v-model="changeArticleData.name"  /></p>
										<p>Content:</p><p><textarea name="content" v-model="changeArticleData.content"></textarea></p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" @click.prevent="editArticle(article)">Save changes</button>
										<button type="button" class="btn btn-secondary" @click.prevent="closeModal()">Close</button>
									</div>
								</div>
							</div>
						</div>

						<!--create form-->
						<div class="modal" role="dialog" id="articleCreateForm">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title">Create article</h5>        
										<button type="button" class="close" @click.prevent="closeModal()">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>
									<div class="modal-body">
										<input type="hidden" name="id" value="">
										<p>Name:</p><p><input type="text" name="name" required placeholder="Article name" v-model="newArticleData.name" /></p>
										<p>Content:</p><p><textarea name="content" required placeholder="Article content" v-model="newArticleData.content"></textarea></p>
									</div>
									<div class="modal-footer">
										<button type="button" class="btn btn-primary" @click.prevent="createArticle()">Save</button>
										<button type="button" class="btn btn-secondary" @click.prevent="closeModal()">Close</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			@include('footer')
		</div>
		<!--Подключение скриптов-->
		<script src="{{ asset('js/jquery.js') }}"></script>
		<script src="{{ asset('js/bootstrap-transition.js') }}"></script>
		<script src="{{ asset('js/bootstrap-carousel.js') }}"></script>
        <script src="{{ asset('js/js.js') }}"></script>
        <script src="js/crud.js"></script>

	</body>
</html>
