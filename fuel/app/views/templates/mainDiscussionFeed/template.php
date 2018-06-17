<div class="container-fluid">
	<div class="row-fluid">
		<div class="textbox">
		<?php if (isset($content)){echo $content;} ?>
		</div>
	</div>
</div>
	<div>
		<hr/>
		<footer>
			<p class="pull-right" style="height:100%;">Page rendered in {exec_time}s using {mem_usage}mb of memory.</p>
			<p>
				<b>The Converse</b> copywright 2018. Start of something hopefully amazing.<br>
				<small>Powered by FuelPHP Version: <?php echo Fuel::VERSION; ?> Fuel is copywrite under the MIT license.</small>
			</p>
		</footer>
	</div>