<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<!--HEADER-->
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
	<div class="col-1-7">
		<div class="ukedag">Mandag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Tirsdag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Onsdag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Torsdag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Fredag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Lørdag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Søndag</div>
	</div>

	<!--UKEDAGER MED AKTIVITETSVISNING-->
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="mandag">
			<?php	
				listUtAktivitetUkeplan()
			?>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="tirsdag">
			<?php	
				listUtAktivitetUkeplan()
			?>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="onsdag">
			<?php	
				listUtAktivitetUkeplan()
			?>
		</div>
	</div>
	<div class="col-1-7">
		<div id="torsdag">
			<?php	
				listUtAktivitetUkeplan()
			?>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="fredag">
			<?php	
				listUtAktivitetUkeplan()
			?>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="lordag">
			<?php	
				listUtAktivitetUkeplan()
			?>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="sondag">
			<?php	
				listUtAktivitetUkeplan()
			?>
		</div>
	</div>
</div>
