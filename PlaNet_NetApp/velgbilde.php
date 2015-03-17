<?php
	session_start();
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<div class="col-1-1">
		<div class="inAppText">Velg bildet som skal vises til aktivitet:</div>		 
	</div>

	<form action="add_aktivitet_step1.php" method="post">
		<div class="col-1-3">
			<div class="bilderamme">
				<input type="checkbox" name="middag"/>
				<img src="../Database/dinner.gif" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-3">
			
			<div class="bilderamme">
				<input type="checkbox" name="skole"/>
				<img src="../Database/skole.jpg" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-3">
			<div class="bilderamme">
				<input type="checkbox" name="tv"/>
				<img src="../Database/tv.jpg" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-1">
			<input type="submit" value="Lagre" name="tilbake"/>
		</div>
	</form>
	<?php

	//DENNE IF TESTEN FUNGERER IKKE, VIRKER SOM AT DEN IKKE GÅR INN OG FÅR SJEKKET OM SJEKKBOKSENE ER HUKET AV.. 
	//DERMED RETURNERES KUN EN UNDEFINED INDEX???

	if(isset($_POST["tilbake"]))
	{
		if(isset($_POST["middag"]))
		{
			$_SESSION["bildeid"] = 1;
		}
		if(isset($_POST["skole"]))
		{
			$_SESSION["bildeid"] = 2;
		}
		if(isset($_POST["tv"]))
		{
			$_POST["bildeid"] = 3;
		}
	}
	?>
</div>	

