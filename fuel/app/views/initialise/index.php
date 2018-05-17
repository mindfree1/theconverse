<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>The Converse</title>
	<?php echo Asset::css('bootstrap.css'); ?>
	<style>
		#logo{
			display: block;
			background-image: url();
			background-color: #cccccc;
			width: 179px;
			height: 45px;
			position: relative;
			top: 15px;
		}
		header{
			background: url(assets/img/dotted-bg.jpg) no-repeat center center fixed; 
  			-webkit-background-size: cover;
  			-moz-background-size: cover;
  			-o-background-size: cover;
  			background-size: cover;
			background-color:#fd6ef7;
			height: 200px;
			width: 100%;
			margin-bottom: 0px;
			margin-top: 0px;
		}
		a{
			color: #883ced;
		}
		a:hover{
			color: #af4cf0;
		}

		.center {
   			margin: auto;
    		width: 100%;
    		border: 3px solid grey;
   	 		padding: 10px;
		}
		.container-fluid{
			width: 100% !important;
			/*height: 100% !important;*/
			display: block !important;
		}

		.setheading{
			margin-left: auto;
			padding-top: 15px;
			margin-right: auto;
			width: 10%;
			margin-top: 0px;
			color: #883ced;
			/*background-color: #fd6ef7;*/
		}

		.leftparty{
			float:left;
			margin-right: auto;
			width:25%;
			display: block;
			background-color: #fafaff;
			height: 100%;
		}

		.rightparty{
    		float: right;
    		margin-right: auto;
		    width: 25%;
		    display: block;
		    background-color: #fafaff;
		    height: 100%;

		}

		.btn.btn-primary{
				color:#ffffff!important;background-color:#883ced;background-repeat:repeat-x;background-image:-khtml-gradient(linear, left top, left bottom, from(#fd6ef7), to(#883ced));background-image:-moz-linear-gradient(top, #fd6ef7, #883ced);background-image:-ms-linear-gradient(top, #fd6ef7, #883ced);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #fd6ef7), color-stop(100%, #883ced));background-image:-webkit-linear-gradient(top, #fd6ef7, #883ced);background-image:-o-linear-gradient(top, #fd6ef7, #883ced);background-image:linear-gradient(top, #fd6ef7, #883ced);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fd6ef7', endColorstr='#883ced', GradientType=0);text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);border-color:#883ced #883ced #003f81;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
		}
		
		html
		{ 
			margin: 0px 0px 0px 0px; 
			overflow-y:auto;
		}

		body {
			margin: 0px 0px 0px 0px; 
			min-height:100%;
		}

		.commentboxcoloring {
			background-image:-webkit-linear-gradient(top, #ffffff, #fafaff);background-image:-o-linear-gradient(top, #ffffff, #fafaff);background-image:linear-gradient(top, #ffffff, #fafaff);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ffffff', endColorstr='#fafaff', GradientType=0);text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);
		}

		#commenttextbox {
		}
	</style>
</head>
<body>
	<script type="text/javascript">
	$(document).ready(function() {
    	$('#commenttextbox').click(function() {
       	 	$('#discussionfeed').animate({
        		'width' : "66%" //should push to the right given the flex-grid layout (test)
        	});
        $('#rightpartycomments').animate({
        	'width' : "9%" //should push to the right given the flex-grid layout (test)
        });
    });
    $('#moveright').click(function() {
        $('#textbox').animate({
        'marginLeft' : "+=30px" //moves right
        });
    });
    $('#movedown').click(function() {
        $('#textbox').animate({
        'marginTop' : "+=30px" //moves down
        });
    });
    $('#moveup').click(function() {
        $('#textbox').animate({
        'marginTop' : "-=30px" //moves up
        });
    });
});
</script>
<script>

	intalise();
	function intalise()
	{
		var url = "/theconverse/discussionFeed";
		loadDiscussionFeedArticles(url);
	}

	function clearDiscussionFeed(url)
	{
		loadDiscussionFeedArticles(url);
	}

	function loadDiscussionFeedArticles(url)
	{
		$.ajax({
    		type: "GET",
        	url: url,
        	dataType: "html",
        	success: function(data) {
            	var len = data.length;
            	for(i=0; i < 1;i++)
            	{
                	newsstories = data[i];
                	$('.feedContent').html(data);
            	}
        	},
        	error: function()
        	{
            	console.log('error occurred, should be handled better');
        	}
    	});
	}

</script>
	<header>
		<h1 class="setheading">The Converse</h1>
		<p class="setheading" style="text-align:center;padding-top: 10px;width:100%;">The place for constructive conversation and fun debating of any topic! Be kind to your fellow human.</p>
		<p style="padding-left: 31.5%;padding-right: 31.5%;"><a class="btn btn-primary btn-lg" style="margin-right: auto;margin-left: 35%;" href="">Read the Mission Statement</a></p>
	</header>

	<!--
			<div><button id="moveright" class="btn btn-primary btn-lg">Comment Against</button></div>
				<button id="movedown" class="btn btn-primary btn-lg">Move Down</button> <button id="moveup" class="btn btn-primary btn-lg">Move Up</button></div>
		</div>
	</div>-->


	<div class="container-fluid" style="height:100%;">
  		<div class="row-fluid" style="height:7676px;">
    		<div class="span2 leftparty" style="height:100%;">
      			<!--Left Sidebar content-->
      			<div id="commenttextbox" contenteditable="true" style="padding:10px;width:80%;padding-left: 5%;padding-right: 5%;margin-top: 5%; color: #333333;height:150px;" class="center commentboxcoloring">
					Add Comment with a Different opinion to main topic:
				</div>
    		</div>
   			<div class="span8 jumbotron offset2">
     			 <!--Body content-->
     			<div class="feedContent">
				</div>
    		</div>
			<div style="height: 100%;" class="row-fluid">
				<div class="rightparty span2 ">
      			<!--Right Sidebar content-->
      				<div id="commenttextbox" contenteditable="true" style="padding:10px;width:80%;padding-left: 5%;padding-right: 5%;margin-top: 5%; color: #333333;height:150px;" class="center commentboxcoloring">
						Add Comment with a Different opinion to main topic:
					</div>
    			</div>
			</div>
  		</div>
	</div>
</body>
</html>