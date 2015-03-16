<?php
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
			<input type="submit" value="Lukke/lagre" name="tilbake"/>
		</div>
	</form>
	<?php
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
			$_SESSION["bildeid"] = 3;
		}
	}
	else
	{
		echo "noe er gærent!";
	}
	?>
</div>	

