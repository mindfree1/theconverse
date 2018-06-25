<!DOCTYPE html>
<html>
<head>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU=" crossorigin="anonymous"></script>
	<meta charset="utf-8">
	<title>The Converse</title>
	<?php echo Asset::css(array('bootstrap.css', 'scroller-style.css')); ?>
    <?php echo Asset::js(array('jquery.totemticker.min.js')); ?>
   <!--<?php //echo Asset::img(array('demo-bg.jpg')); ?>-->

   <script type="text/javascript">
		$(function(){
			$('#user-related-linked-comments').totemticker({
				row_height	:	'200px',
				next		:	'#ticker-next',
				previous	:	'#ticker-previous',
				stop		:	'#stop',
				start		:	'#start',
				mousestop	:	true,
			});
		});
	</script>

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
			background-color: #fafaff;
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

		.topnav-scrollable-comments {
			background-color: #fafaff;
			color: #883ced;
			border: none;
			text-align: center;
			cursor: pointer;
			display: inline-block;
			width: auto;
			white-space: nowrap;
			padding: 0 3rem;
      		font-size: 2rem;
			-webkit-animation-iteration-count: infinite; 
            animation-iteration-count: infinite;
    			-webkit-animation-timing-function: linear;
            animation-timing-function: linear;
   				-webkit-animation-name: topnav-scrollable-comments;
           animation-name: topnav-scrollable-comments;
    			-webkit-animation-duration: 30s;
            animation-duration: 30s;
			/*white-space:nowrap;*/
		}

		 @keyframes topnav-scrollable-comments {
  			0% {
			    -webkit-transform: translate3d(0, 0, 0);
			    transform: translate3d(0, 0, 0);
			    visibility: visible;
  			}

  			100% {
			    -webkit-transform: translate3d(-100%, 0, 0);
			    transform: translate3d(-100%, 0, 0);
  			}
		}

		.realtimecomment-nav {
			margin: 0;
			padding: 0;
			justify-content: center;
			height: 50px;
			width: auto;
			overflow-x: auto;
			list-style: none;
			white-space: nowrap;
			/*white-space:nowrap;*/
		}

		#usercomments-linked {
			overflow: hidden;
			height: 1500px;
    		overflow:hidden;
    		margin:0;
    		padding:0;
    		-webkit-box-shadow:0 1px 3px rgba(0,0,0,.4) 
		}

		#usercomments-linked li {
		    padding:35px 20px;
		    display:block;
		    background: #66ccff;
		    color:#333;
		    border-bottom:1px solid #ddd;
		    text-align:center;
		    font-size:25px;
		    font-weight:bold;
		    font-family:Helvetica Neue,times,serif
		}

		.realtimecommnet-nav -webkit-scrollbar {
  			display: none;
		}

		.realtimecommenttext {
			color: #883ced;
    		width: 300px;
    		height: 140px;
    		white-space: nowrap;

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

		.related-news-linked-recent {
			height: 220px;
			background-color: #cccccc; /* just for now so can see the sizing / spacing etc */
			padding-top: 5px;
			padding-bottom: 5px;
			margin-top: 20px;
		}

		.related-news-linked-usercomments {
			height: 1500px;
			/*background-color: #66ccff;*/ /* just for now so can see the sizing / spacing etc */
			padding-top: 5px;
			padding-bottom: 5px;
			margin-top: 20px;
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
		<p style="padding-left: 31.5%;padding-right: 31.5%;"><a class="btn btn-primary btn-lg" style="margin-right: auto;" href="">Read the Mission Statement</a></p>
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

		<div class="row-fluid" style="padding-left: 5%;padding-right: 5%;">
		<div class="realtimecomment-nav">
				<div class="" id="scrolling-comment-ticker">
					<div class="topnav-scrollable-comments">Sample Real-time Comment 1 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 2 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 3 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 4 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 5 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 6 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 7 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 8 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 9 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 10 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 11 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 12 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 13 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
					<div class="topnav-scrollable-comments">Sample Real-time Comment 14 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>																																							<div class="topnav-scrollable-comments">Sample Real-time Comment 15 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>	
					<div class="topnav-scrollable-comments">Sample Real-time Comment 16 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>		
					<div class="topnav-scrollable-comments">Sample Real-time Comment 17 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>		
					<div class="topnav-scrollable-comments">Sample Real-time Comment 18 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>		
					<div class="topnav-scrollable-comments">Sample Real-time Comment 19 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>		
					<div class="topnav-scrollable-comments">Sample Real-time Comment 20 heres a lot of text to test out the size of the real time comments as want to be able to read enough to entice someone to click/hover over it. Will also need a nice UX-wise style to see the whole comment and maybe even comment inline in agreement or very least positvely/negatively add 'karma' to it</div>
				</ul>
			</div>
		</div>
  		<div class="row-fluid" style="height:7676px;">
    		<div class="span2 leftparty" style="height:100%;">
      			<!--Left Sidebar content-->
      			<div id="commenttextbox" contenteditable="false" style="padding:10px;width:80%;padding-left: 5%;padding-right: 5%;margin-top: 5%; color: #333333;height:1500px;" class="center commentboxcoloring">
						<div class="related-news-linked-recent">
							<p style="color:#333333;">The Stock Market Loophole That Screws the Little Guy</p>
							<img src="<?php echo "assets/img/ideas-test-img.jpg" ?>" style="width:200px;height:100px;padding-left: 15px;float: left;" id="news-related-thumb" />
							<p style="text-align: justify;text-indent: 2em;color:#333333;">THE AMERICAN DREAM is the small-business dream: Work hard and achieve success. But the American promise is one of shared prosperity, as encapsulated in the idea that “what is good for General Motors is good for America.”</p>
							

						</div>
						<div class="related-news-linked-recent">
							<img src="" id="news-related-thumb" />
						</div>
						<div class="related-news-linked-recent">
							<img src="" id="news-related-thumb" />
						</div>
						<div class="related-news-linked-recent">
							<img src="" id="news-related-thumb" />
						</div>
						<div class="related-news-linked-recent">
							<img src="" id="news-related-thumb" />
						</div>
						<div class="related-news-linked-recent">
							<img src="" id="news-related-thumb" />
						</div>
					</div>
    		</div>
   			<div class="span8 jumbotron offset2">
     			 <!--Body content-->
     			<div class="feedContent">
				</div>
    		</div>
			<div style="height: 100%;" class="row-fluid">
				<div class="rightparty span2" id="usercomments-linked">
      			<!--Right Sidebar content-->
      				<div id="commenttextbox" contenteditable="false" style="padding:10px;width:80%;padding-left: 5%;padding-right: 5%;margin-top: 5%; color: #333333;height:1500px;" class="center commentboxcoloring">
						<ul class="related-news-linked-usercomments">
							<li><p>Sample 1 User comment</p></li>
							<li><p>Sample 2 User comment</p></li>
							<li><p>Sample 3 User comment</p></li>
							<li><p>Sample 4 User comment</p></li>
							<li><p>Sample 5 User comment</p></li>
							<li><p>Sample 6 User comment</p></li>
							<li><p>Sample 7 User comment</p></li>
							<li><p>Sample 8 User comment</p></li>
							<li><p>Sample 9 User comment</p></li>
							<li><p>Sample 10 User comment</p></li>
							<li><p>Sample 11 User comment</p></li>
							<li><p>Sample 12 User comment</p></li>
							<li><p>Sample 13 User comment</p></li>
							<li><p>Sample 14 User comment</p></li>
							<li><p>Sample 15 User comment</p></li>
							<li><p>Sample 16 User comment</p></li>
							<li><p>Sample 17 User comment</p></li>
							<li><p>Sample 18 User comment</p></li>
						</ul>
					</div>
    			</div>
			</div>
  		</div>
	</div>
			<script type="text/javascript">
			
		$('.related-news-linked-usercomments').totemticker({
			row_height  :   '400px',
			next        :   '#ticker-next',
			previous    :   '#ticker-previous',
			stop        :   '#stop',
			start       :   '#start',
		});

		</script>
</body>
</html>