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
			width: 179px;
			height: 45px;
			position: relative;
			top: 15px;
		}
		header{
			background-image: url();
			height: 75px;
			width: 100%;
			margin-bottom: 40px;
		}
		a{
			color: #883ced;
		}
		a:hover{
			color: #af4cf0;
		}
		.center {
   			margin: auto;
    		width: 50%;
    		border: 3px solid green;
   	 		padding: 10px;
		}

		.btn.btn-primary{color:#ffffff!important;background-color:#883ced;background-repeat:repeat-x;background-image:-khtml-gradient(linear, left top, left bottom, from(#fd6ef7), to(#883ced));background-image:-moz-linear-gradient(top, #fd6ef7, #883ced);background-image:-ms-linear-gradient(top, #fd6ef7, #883ced);background-image:-webkit-gradient(linear, left top, left bottom, color-stop(0%, #fd6ef7), color-stop(100%, #883ced));background-image:-webkit-linear-gradient(top, #fd6ef7, #883ced);background-image:-o-linear-gradient(top, #fd6ef7, #883ced);background-image:linear-gradient(top, #fd6ef7, #883ced);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#fd6ef7', endColorstr='#883ced', GradientType=0);text-shadow:0 -1px 0 rgba(0, 0, 0, 0.25);border-color:#883ced #883ced #003f81;border-color:rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);}
		body { margin: 0px 0px 40px 0px; }
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
		<div class="container">
			<div id="logo"></div>
		</div>
	</header>
	<div class="container">
		<div class="jumbotron">
			<h1>Welcome!</h1>
			<p>You have successfully reached The Converse</p>
			<p><a class="btn btn-primary btn-lg" href="">Read the Mission Statement</a></p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div style="padding:20px;"> <button id="moveleft" class="btn btn-primary btn-lg">Comment For</button></div>
			</div>
			<div class="col-md-4">
<div id="textbox" style="position:absolute;padding:10px;background:#FFFFCC;" class="center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas nec tincidunt purus. Donec eleifend libero in orci mattis pulvinar. Ut et felis eu leo malesuada eleifend. Ut sit amet odio eu ipsum rutrum consequat. Aliquam congue ultricies sagittis.</div>
			</div>
			<div class="col-md-4">
				<div><button id="moveright" class="btn btn-primary btn-lg">Comment Against</button></div>
				  <!--<button id="movedown" class="btn btn-primary btn-lg">Move Down</button> <button id="moveup" class="btn btn-primary btn-lg">Move Up</button>!-->
			</div>
		</div>
		<hr/>
		<footer>
			<p class="pull-right">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<a href="http://fuelphp.com">FuelPHP</a> is released under the MIT license.<br>
				<small>Version: <?php echo Fuel::VERSION; ?></small>
			</p>
		</footer>
	</div>
</body>
</html>