<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<div class="col-1-1">
		<div class="inAppText">Velg bildet som skal vises til aktivitet:</div>		 
	</div>

	<form action="" method="post">
		<div class="col-1-3">
			
			<div class="bilderamme">
				<input type="checkbox" name="1"/>
				<img src="../Database/dinner.gif" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-3">
			
			<div class="bilderamme">
				<input type="checkbox" name="1"/>
				<img src="../Database/skole.jpg" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-3">
			
			<div class="bilderamme">
				<input type="checkbox" name="1"/>
				<img src="../Database/tv.jpg" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-1">
			<input class="submit btn btn-success" value="Lukke/lagre" type="submit" onClick="window.close()" name="tilbake"/>
		</div>
	</form>

	<?php
	//test for å hente bildeId fra velgbilde.php og tilegne id for å hente ut fre database og gi til leggtilaktivitet()¨
	if(isset($_POST["tilbake"]))
	{
		$SESSION_["bildeid"] = 0;
		if(isset($_POST["middag"]))
		{
			$SESSION_["bildeid"] = 1;
		}
		if(isset($_POST["skole"]))
		{
			$SESSION_["bildeid"] = 2;
		}
		if(isset($_POST["tv"]))
		{
			$SESSION_["bildeid"] = 3;
		}
	}
	?>
</div>	

