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
			background-color: #eeeeee;
			width: 179px;
			height: 45px;
			position: relative;
			top: 15px;
		}
		header{
			/*background-image: url("assets/img/remove-bias.jpg");*/
			background: url(assets/img/brainwaves.png) no-repeat center center fixed; 
  			-webkit-background-size: cover;
  			-moz-background-size: cover;
  			-o-background-size: cover;
  			background-size: cover;
			background-color: #eeeeee;
			height: 300px;
			width: 100%;
			margin-bottom: 10px;
			margin-top: 0px;
		}
		a{
			color: #883ced;
		}
		a:hover{
			color: #af4cf0;
		}
		html, body {
  			height: 100%;
		}

		.center {
   			margin: auto;
    		width: 100%;
    		border: 3px solid grey;
   	 		padding: 10px;
		}
		.container-fluid{
			width: 100% !important;
			height: 100% !important;
			display: block !important;
		}

		.setheading{
			margin-left: auto;
			padding-top: 15px;
			margin-right: auto;
			width: 10%;
			margin-top: 0px;
			color: #ffffff;
		}

		.leftparty{
			float:left;
			margin-right: auto;
			width:25%;
			display: block;
			background-color: #000000;
			height: 100%;
			/*height: 1000px;
			padding-bottom: 100%;*/
		}

		.rightparty{
    		float: right;
    		margin-right: auto;
		    width: 25%;
		    display: block;
		    background-color: #000000;
		    height: 100%;
		    /*height: 1000px;
		    padding-bottom: 100%;*/

		}

		.btn.btn-primary{
				color:#ffffff!important;background-color:#883ced;background-repeat:repeat-x;background-image:-khtml-gradient(linear, left top, left bottom, from(#fd6ef7), to(#883ced));background-image:-moz-linear-gradient(top, #fd6ef7, #883ced);background-image:-ms-linear-gradient(top, #fd6ef7, #883ced);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #fd6ef7), color-stop(100%, #883ced));background-image:-webkit-linear-gradient(top, #fd6ef7, #883ced);background-image:-o-linear-gradient(top, #fd6ef7, #883ced);background-image:linear-gradient(top, #fd6ef7, #883ced);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fd6ef7', endColorstr='#883ced', GradientType=0);text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);border-color:#883ced #883ced #003f81;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
		}
		body { margin: 0px 0px 40px 0px; }

		.commentboxcoloring {
			background-image:-webkit-linear-gradient(top, #fd6ef7, #883ced);background-image:-o-linear-gradient(top, #fd6ef7, #883ced);background-image:linear-gradient(top, #fd6ef7, #883ced);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fd6ef7', endColorstr='#883ced', GradientType=0);text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);
		}

		#commenttextbox {
		}
	</style>
</head>
<body>
	<script type="text/javascript">
$(document).ready(function() {
    $('#moveleft').click(function() {
        $('#textbox').animate({
        'marginLeft' : "-=30px" //moves left
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
	<header>
		<h1 class="setheading">The Converse</h1>
		<p class="setheading" style="text-align:center;padding-top: 10px;width:100%;">The place for constructive conversation and fun debating of any topic! Be kind to your fellow human.</p>
		<p style="padding-left: 31.5%;padding-right: 31.5%;"><a class="btn btn-primary btn-lg" style="margin-right: auto;margin-left: 35%;" href="">Read the Mission Statement</a></p>
	</header>

	<div class="container-fluid">
	<div class="row" style="height:100%;width: 100%;">
		<div class="leftparty col-sm-3">
			<div id="commenttextbox" contenteditable="true" style="padding:10px;width:80%;padding-left: 5%;padding-right: 5%;margin-top: 5%; color: #ffffff;" class="center commentboxcoloring">Add Comment with a Different opinion to main topic:</div>
		</div>
		<div class="jumbotron" style="width: 50%;margin-left: auto;margin-right:auto;float: left;height:100%;background-color: #cccccc;">
			<div class="col-md-6">
				<div id="textbox" style="padding:10px;background:#FFFFCC;" class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec tincidunt purus. Donec eleifend libero in orci mattis pulvinar. Ut et felis eu leo malesuada eleifend. Ut sit amet odio eu ipsum rutrum consequat. Aliquam congue ultricies sagittis.</div>
				<div id="textbox" style="padding:10px;background:#FFFFCC;" class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec tincidunt purus. Donec eleifend libero in orci mattis pulvinar. Ut et felis eu leo malesuada eleifend. Ut sit amet odio eu ipsum rutrum consequat. Aliquam congue ultricies sagittis.</div>
				<div id="textbox" style="padding:10px;background:#FFFFCC;" class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec tincidunt purus. Donec eleifend libero in orci mattis pulvinar. Ut et felis eu leo malesuada eleifend. Ut sit amet odio eu ipsum rutrum consequat. Aliquam congue ultricies sagittis.</div>
				<div id="textbox" style="padding:10px;background:#FFFFCC;" class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec tincidunt purus. Donec eleifend libero in orci mattis pulvinar. Ut et felis eu leo malesuada eleifend. Ut sit amet odio eu ipsum rutrum consequat. Aliquam congue ultricies sagittis.</div>
				<div id="textbox" style="padding:10px;background:#FFFFCC;" class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec tincidunt purus. Donec eleifend libero in orci mattis pulvinar. Ut et felis eu leo malesuada eleifend. Ut sit amet odio eu ipsum rutrum consequat. Aliquam congue ultricies sagittis.</div>
				<!--<div style="padding:20px;"> <button id="moveleft" class="btn btn-primary btn-lg">Comment For</button></div>-->
			</div>
		</div>
		<div class="rightparty col-sm-3">
			<div id="commenttextbox" contenteditable="true" style="padding:10px;width:80%;padding-left: 5%;padding-right: 5%;margin-top: 5%;color: #ffffff;" class="center commentboxcoloring">Add Comment In Favour of Topic: </div>
		</div>
	</div>
				<!--<div><button id="moveright" class="btn btn-primary btn-lg">Comment Against</button></div>
				<button id="movedown" class="btn btn-primary btn-lg">Move Down</button> <button id="moveup" class="btn btn-primary btn-lg">Move Up</button></div>-->
	<div>
		<hr/>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo Fuel::VERSION; ?></small>
			</p>
		</footer>
	</div>
	</div>
	
</body>
</html>