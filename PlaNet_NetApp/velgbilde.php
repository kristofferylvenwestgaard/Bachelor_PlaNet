<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<div class="col-1-1">
		<div class="inAppText">Velg bildet som skal vises til aktivitet:</div>		 
	</div>

	<form action="add_aktivitet_step1.php" method="post">
		<div class="col-1-4">
			<div class="bilderamme">
				
				<input class="input_check_bilde" type="checkbox" name="middag"/>
				<img src="../Database/dinner.gif" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-4">
			
			<div class="bilderamme">
				<input class="input_check_bilde" type="checkbox" name="skole"/>
				<img src="../Database/skole.jpg" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-4">
			<div class="bilderamme">
				<input class="input_check_bilde" type="checkbox" name="tv"/>
				<img src="../Database/tv.jpg" alt="middag" width="100px" height="100px"/>
			</div>
		</div>
		<div class="col-1-1">
			<!--<input type="submit" value="Lagre" name="tilbake"/> -->
			<input class="submit btn btn-large btn-success" type="submit" value="Lagre" name="tilbake"/>
		</div>
	</form>
</div>	

