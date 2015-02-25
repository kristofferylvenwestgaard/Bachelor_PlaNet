<?php
	session_start();
	include "includes/top.php";
	include "includes/footer.php";
?>

<div class="container">
	<div class="header">
		<h1 class="htext"><a class="inAppLinks" href="index.php">Administrer applikasjon</a></h1>
	</div>
	<div id="admincontent">
		<div class="col-1-2">
			<div class="left_col">
				<form class="form_add_aktivitet" name="legg_til_aktivitet_side2" method="post">

					<div class="inAppText">Legg til aktivitet:</div></br>
					
					<?php
						//Printer ut aktivitetsnavn.
						echo $_REQUEST["aktivitetsnavn"];
					?>

					<div id="checkLeft">
						<input class="input_check" type="checkbox" name="aktivitet"/><p class="formText">Aktivitet</p><br/>
						<input class="input_check" type="checkbox" name="handlingskjede"/><p class="formText">Handlingskjede</p></br>
						<input class="input_check" type="checkbox" name="sjekkliste"/><p class="formText">Sjekkliste</p>
					</div>

					<div id="checkRight">
					</div>
				</form>
			</div>
		</div>
		<div class="col-1-2">
			<div class="right_col">
				<form class="form_add_aktivitet" action="add_aktivitet_step2.php" name="legg_til_aktivitet" method="post">
					
					<div class="inAppText">Hjelpefunksjoner: </div> </br>

					<input class="input_check" type="checkbox" name="skype"/><p class="formText">Skype</p><br/>
					<input class="input_check" type="checkbox" name="månedlig"/><p class="formText">Personalliste</p><br/>

					<input class="submit" type="submit" value="Ferdig" name="submit"/>
				</form>
				
			</div>
		</div>
	</div>
</div>