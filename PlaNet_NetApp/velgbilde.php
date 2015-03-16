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
				<input type="checkbox" name="1"/>
				<img src="../Database/dinner.gif" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-3">
			
			<div class="bilderamme">
				<input type="checkbox" name="2"/>
				<img src="../Database/skole.jpg" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-3">
			
			<div class="bilderamme">
				<input type="checkbox" name="3"/>
				<img src="../Database/tv.jpg" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-1">
			<input class="submit btn btn-success" value="Lukke/lagre" type="submit" onClick="window.close()" name="tilbake"/>
		</div>
	</form>
</div>	

