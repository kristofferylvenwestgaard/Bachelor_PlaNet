<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<div class="header">
		<h1 class="htext"><a class="inAppLinks" href="admin.php">Administrer applikasjon</a></h1>
	</div>
<div class="admincontent">
	<div class="col-1-1">
		<div id="velgbildeTekst">
		<div class="inAppText">Velg bildet som skal vises til aktivitet:</div>		 
		</div>
	</div>

	<form action="add_aktivitet_step1.php" method="post">
		<div class="bilderamme">
			<div class="col-1-4">
			<input type="checkbox" id="checkbox-1-1" class="input_check_bestillmat" name="bestillmat" /><label for="checkbox-1-1"></label>
			</div>
		
			<div class="col-1-4">
				<input type="checkbox" id="checkbox-1-2" class="input_check_hentmat" name="hentmat" /><label for="checkbox-1-2"></label>
			</div>
		
			<div class="col-1-4">
				<input type="checkbox" id="checkbox-1-3" class="input_check_soppel" name="soppel" /><label for="checkbox-1-3"></label>
			</div>
		
			<div class="col-1-4">
				<input type="checkbox" id="checkbox-1-4" class="input_check_handle" name="handle" /><label for="checkbox-1-4"></label>
			</div>
		</div>
		<div class="col-1-1">
			<div id="velgbildeLagre">
			<!--<input type="submit" value="Lagre" name="tilbake"/> -->
			<input class="submit btn btn-large btn-outline sharp" type="submit" value="Lagre" name="tilbake"/>
			</div>
		</div>
	</div>
	</form>
</div>	

