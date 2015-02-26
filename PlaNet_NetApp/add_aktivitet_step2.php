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
		<div class="col-1-1">
			<div class="col_left">
				
				<form class="form_add_aktivitet" action="" name="legg_til_aktivitet" method="post">
					<div class="inAppText">Legg til aktivitet:</div></br>
					
					<?php
						//Printer ut aktivitetsnavn.
						echo $_REQUEST["aktivitetsnavn"];
					?>

					<div id="checkLeft">
						<input class="input_check" type="checkbox" name="aktivitet"/><p class="formText">Aktivitet</p><br/>
						<input class="input_check" type="checkbox" name="handlingskjede"/><p class="formText">Handlingskjede</p></br>
						<input class="input_check" type="checkbox" name="sjekkliste"/><p class="formText">Sjekkliste</p></br>
						<input class="submit" type="submit" value="Ferdig" name="submit"/>
					</div>

					<div id="checkRight">
					</div>
				</form>
			</div>
			<div class="col_right">
				<div id="aktivitet_oversikt">
					<?php
						hentAktivitet();
					?>
				</div>
				<div class="next_page">
					<a class="inAppLinks" href="index.php">Fullfør</a>
				</div>
			</div>
		</div>
	</div>
</div>