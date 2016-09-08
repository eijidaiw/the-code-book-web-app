<!DOCTYPE html>
	<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<link rel="stylesheet" href="">
	</head>
	<body>
		<button id='ajaxBtn'>Get Ajax</button>
		<div id="result"></div>

		<ul class="nav nav-tabs" role="tablist">
		    <li role="presentation" class="active"  data-type="home"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Home</a></li>
		    <li role="presentation"  data-type="profile"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile</a></li>
		    <li role="presentation"  data-type="messages"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Messages</a></li>
		  </ul>

		  <!-- Tab panes -->
		  <div class="tab-content">
		    <div role="tabpanel" class="tab-pane active" id="home">...</div>
		    <div role="tabpanel" class="tab-pane" id="profile">...</div>
		    <div role="tabpanel" class="tab-pane" id="messages">...</div>
		    <div role="tabpanel" class="tab-pane" id="settings">...</div>
		  </div>


		<script src="//code.jquery.com/jquery.js"></script>
		<script>
			$( document ).ready(function() {

				$('.nav-tabs li').on('click',function(){
					var tab = $(this);
					
					var type = tab.data('type');
					console.log(type);
					$.ajax({
					  url: "http://localhost:8080/laravel/public/thecodebookgetAjax",
					  
					})
					 .done(function( data ) {
					    console.log(data.html);
					    $('#'+type).html(data.html);
					});

				})

				$('#ajaxBtn').on('click',function(){
					
				});
			    
			});
		</script>
	</body>

	</html>	