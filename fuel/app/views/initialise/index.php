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

		.topicbtns {
			background-color: #ffffff;
			border: none;
			color: #883ced;
			padding: 15px 25px;
			text-align: center;
			font-size: 16px;
			cursor: pointer;
		}

		.topicbtns:hover{
			background-color: #0066CC;
			color: #EEEEEE;
		}

		.nav {
			height: 50px;
			display: flex;
			justify-content: center;
			width: 100%;
			margin: 0;
			padding: 0;
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
		<div class="row-fluid" style="padding-left: 5%;padding-right: 5%;display: flex;">
			<!-- 'Topic' buttons will go in this section, basically making it easy to find a topic to read/follow/disucssion and ultiamtely debate contructively 

				Further to that, current thoughts are that want to make this also dynamically populated to some extent, if not fully, 
				so that it almost provides a quick glance at a 'word cloud' of what is trending / being discussed with the most contructive passion.
			-->
			<ul class="nav">
				<li class="topicsbtns">
					<!-- This one will take some time to setup as should be a quick daily briefing of topics around the net to discuss -->
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/dailybriefing/');">DAILY BREIFING</a>
				</li>
				<li class="topicsbtns">
					<!-- This one will take a bit longer to setup as it should be a custom feed created based on what the userbase is discussing / debating cosntructively the most --> 
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/ourcommunity/');">OUR COMMUNITY</a>
				</li>
				<li class="topicsbtns">
					<!-- This will also be a custom feed created specifically for TheConverse which essentially the idea currently is it will be a blog-typ seciton where people can write-up ideas around items/topics like
					what a 'new democracy' could look like?, 'What future thinking Blockchain uses could be' etc - to help fuel intelligent conversation and progress it forward.
					 -->
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/ideas/');">IDEAS</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/security/');">SECURITY</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/localnews/');">LOCAL NEWS</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/globalnews/');">GLOBAL NEWS</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/tech/');">TECH</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/polotics/');">POLOTICS</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/policy/');">POLICY</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/finance/');">FINANCE</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/business/');">BUSINESS</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/science/');">SCIENCE</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/health/');">HEALTH</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/entertainmentarts/');">ENTERTAINMENT & ART DISCUSSION</a>
				</li>
				<li class="topicsbtns">
					<a href="javascript:loadDiscussionFeedArticles('/theconverse/discussionFeed/topicFeed/opinion/');">OPINION PIECES</a>
				</li>
			</ul>
			<!--<button type="button" class="topicbtns">DAILY BREIFING</button>
			<button type="button" class="topicbtns">OUR COMMUNITY</button>
			<button type="button" class="topicbtns">IDEAS</button>
			<button type="button" class="topicbtns">SECURITY</button>
			<button type="button" class="topicbtns">LOCAL NEWS</button>
			<button type="button" class="topicbtns">GLOBAL NEWS</button>
			<button type="button" class="topicbtns">TECH</button>
			<button type="button" class="topicbtns">POLOTICS</button>
			<button type="button" class="topicbtns">POLICY</button>
			<button type="button" class="topicbtns">FINANCE</button>
			<button type="button" class="topicbtns">BUSINESS</button>
			<button type="button" class="topicbtns">SCIENCE</button>
			<button type="button" class="topicbtns">HEALTH</button>
			<button type="button" class="topicbtns">ENTERTAINMENT & ART DISCUSSION</button>
			<button type="button" class="topicbtns">OPINION PIECES</button>-->
		</div>
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