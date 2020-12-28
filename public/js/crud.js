var crud = new Vue({
  el: '#crud',
  data: {
    newArticleData:{'name': '','content': ''},
    changeArticleData:{'id': '', 'name': '', 'content': ''},
    hasError:true,
    articles: []
  },
  methods: {
  	createArticle: function createArticle(){
  		var _this = this;
  		if(this.newArticleData['name'] == '' || this.newArticleData['content'] == ''){
  			this.hasError = false;
  		}
  		else{
  			this.hasError = true;
  			axios.post('/createArticle',this.newArticleData).then(function(response){
  				_this.newArticleData = {'name':'','content': ''};
  				_this.closeModal();
  				_this.getArticles();
  			}).catch(error=>{
  				console.log("Insert article: "+error);
  			});  			
  		}
  	},
  	getArticles: function getArticles(){
		var _this = this;
		axios.get('/getArticles').then(function(response){
			console.log(_this.articles);
			_this.articles = response.data;
		}).catch(error=>{
			console.log("getArticle: " + error);
		});
	},
	editArticle: function editArticle(){
		var _this = this;
		var articleId = document.querySelector("#articleEditForm input[name='articleId']");
		if(this.changeArticleData['name'] == '' || this.changeArticleData['content'] == '' || parseInt(articleId.value) == 0){
  			this.hasError = false;
  		}
  		else{
  			axios.post('/editArticle/' + articleId.value, {name: this.changeArticleData.name, content: this.changeArticleData.content}).then(response=>{
				_this.closeModal();
				_this.getArticles();
			});
  		}
			
	},
	deleteArticle: function deleteArticle(article){
		var _this = this;
		axios.post('/deleteArticle/' + article.id).then(function(response){
			_this.getArticles();
		}).catch(error=>{
			console.log("Delete article: " + error);
		});
	},
	openEditForm: function openEditForm(article){
		console.log('open edit form');
		document.querySelector("#articleEditForm .article_id").innerHTML = article.id;
		document.querySelector("#articleEditForm input[name='articleId']").value = article.id;
		document.querySelector("#articleEditForm input[name='name']").value = article.name;
		document.querySelector("#articleEditForm textarea[name='content']").value = article.content;
		document.getElementById('articleEditForm').style.display = 'block';
	},
	openCreateForm: function openCreateForm(){
		document.getElementById('articleCreateForm').style.display = 'block';
	},
	closeModal: function closeModal(){
		var elementList = document.querySelectorAll('.modal');
		for(i = 0; i < elementList.length; i++){
			elemArticleId = elementList[i].querySelector(".article_id");
			if(elemArticleId != null){
				elemArticleId.innerHTML = '';
			}
			elementList[i].querySelector("input[name='name']").value = '';
			elementList[i].querySelector("textarea[name='content']").value = '';
			elementList[i].style.display = 'none';
		}
	}
  }
});

crud.getArticles();