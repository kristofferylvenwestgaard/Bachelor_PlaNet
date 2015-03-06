<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<!--HEADER-->
<div class = "container">
	<div class="col-1-3">
		<div class="header">
			<h1 class="htext">Terje</h1>
		</div>
	</div>
	<div class="col-1-3">
		<div class="header">
			<a id="hlink" href="index.php">Uke</a>
			<a id="hlink" href="index.php">Måned</a>
		</div>
	</div>
	<div class="col-1-3">
		<div class="header">
			<!--Skal byttes ut med JS og Symbol!!!-->
			<div class="col-1-1">
				<div id="clock">21:52:42</div>
				<div id="admin">
					<a href="admin.php"><img src="img/admin1.png" alt="admin"/></a>
				</div>
			</div>
		</div>
	</div>
	<!--UKEDAGER-->
	
	<div class="col-1-3">
		<div class="ukedag">Torsdag</div>
	</div>
	<div class="col-2-3">
		<div class="ukedag">Middag</div>
	</div>
	

	<!--UKEDAGER MED AKTIVITETSVISNING-->
	

	<div class="col-1-5">
		<div id="torsdag">
			<div class="activity">
				<div class="bluecode"></div>
				<div class="aktivitet">1</div>
			</div>
			<div class="activity">
				<div class="redcode"></div>
				<div class="aktivitet">2</div>
			</div>
			<div class="activity">
				3
			</div>
			<div class="activity">
				4
			</div>
			<div class="activity">
				5
			</div>
			<div class="activity">
				6
			</div>
		</div>
	</div>
		<div class="col-3-5">
		<div class="dagsplanBoks">
		</div>
		<div id="onsdag">
			
		</div>
	</div>
		</div>
		<div class="col-1-5">
		<div class="dagsplanBoks">
		</div>
		<div id="onsdag">
			
		</div>
	</div>
			</div>
</div>





