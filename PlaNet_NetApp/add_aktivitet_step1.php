<?php
	include "includes/top.php";
	include "includes/footer.php";
?>

<div class="container">
	<div class="header">
		<h1 class="htext"><a class="inAppLinks" href="index.php">Administrer applikasjon</a></h1>
	</div>
	<div id="admincontent">
		<div class="col-1-1">	
			<form class="form_add_aktivitet" action="add_aktivitet_step2.php" name="legg_til_aktivitet" method="post">
				<!--DIV CONTAINER FOR VENSTRE KOLONNE I LEGG TIL AKTIVITET-->
				<div class="col_left">

					<!--TEXTBOX FOR AKTIVITETSNAVN-->
					<div class="inAppText">Legg til aktivitet:</div>
					<input class="input_text" type="text" placeholder="Aktivitetsnavn" name="aktivitetsnavn"/>
						<!--<input class="input_text_small" type="text" placeholder="BildeId" name="bildeid"/>-->
						<!-- JS for knapp -->
						
						<a href="velgbilde.php" class="btn btn-primary" type="button">+Bilde</button></a>

					<!--GJENTAGELSE MANDAG - FREDAG! -->
					<div class="inAppText">Gjenta aktivitet:</div><br/> 
					<div id="mandag_gjenta">
						<p class="formText">Ma</p><br/>
						<input class="input_check" type="checkbox" name="mandag"/>
					</div>
					<div id="tirsdag_gjenta">
						<p class="formText">Ti</p><br/>
						<input class="input_check" type="checkbox" name="tirsdag"/>
					</div>
					<div id="onsdag_gjenta">
						<p class="formText">On</p><br/>
						<input class="input_check" type="checkbox" name="onsdag"/>
					</div>
					<div id="torsdag_gjenta">
						<p class="formText">To</p><br/>
						<input class="input_check" type="checkbox" name="torsdag"/>
					</div>
					<div id="fredag_gjenta">
						<p class="formText">Fr</p><br/>
						<input class="input_check" type="checkbox" name="fredag"/>
					</div>
					<div id="loerdag_gjenta">
						<p class="formText">Lø</p><br/>
						<input class="input_check" type="checkbox" name="loerdag"/>
					</div>
					<div id="soendag_gjenta">
						<p class="formText">Sø</p><br/>
						<input class="input_check" type="checkbox" name="soendag"/>
					</div>

					<!--DATO INPUT -->
					<div class="col-1-1">

					<div class="inAppText">
							Dato <small>[valgfritt]:</small>
					</div>
					<input class="input_dato" type="date" placeholder="Dato - Valgfri" name="dato"/><br/>
				
					<!--ALARM INPUT-->
					
					<div class="inAppText">
							Alarm <small>[valgfritt]:</small>
					</div>
					<input class="input_alarm" type="time" placeholder="Alarm - Valgfri" name="alarm"/><br/>
					
				</div>
					<!--AKTIVITETSFARGE VALG -->
					<div class="col-1-1">
					<div id="fargeValg">
						<div class="inAppText">
							Velg farge: 
						</div>
						<div id="farge_blue">
							<p class="formText">Blå</p><br/>
							<input class="input_check" type="checkbox" name="blue"/>
						</div>
						<div id="farge_red">
							<p class="formText">Rød</p><br/>
							<input class="input_check" type="checkbox" name="red"/>
						</div>
						<div id="farge_green">
							<p class="formText">Grønn</p><br/>
							<input class="input_check" type="checkbox" name="green"/>
						</div>
						<div id="farge_black">
							<p class="formText">Sort</p><br/>
							<input class="input_check" type="checkbox" name="black"/>
						</div>
					</div>
				</div>

					<!--HJELPEFUNKSJONER-->
					<div id="help_functions">
						<div class="inAppText">
							Hjelpefunksjoner:
						</div>
						<div id="skype_check">
							<p class="formText">Skype</p><br/>
							<input class="input_check" type="checkbox" name="skype"/>
						</div>
						<div id="personal_check">	
							<p class="formText">Personalliste</p><br/>
							<input class="input_check" type="checkbox" name="personalliste"/><br/>
						</div>
					</div>
					<div id="submit">
						<input class="submit btn btn-large btn-primary" type="submit" value="Neste" name="nesteSide"/>
					</div>
				</div>
				<?php
					if(isset($_POST["tilbake"]))
					{
						if(isset($_POST["middag"]))
						{
							$bildeid = 1;
							$_SESSION["bildeid"] = $bildeid;
						}
						elseif(isset($_POST["skole"]))
						{
							$bildeid = 2;
							$_SESSION["bildeid"] = $bildeid;
						}
						elseif(isset($_POST["tv"]))
						{
							$bildeid = 3;
							$_SESSION["bildeid"] = $bildeid;
						}
					}
				?>
					
				<!--DIV CONTAINER FOR HØYRE KOLONNE I LEGG TIL AKTIVITET-->
				<div class="col_right">
					<div id="aktivitet_oversikt">
						<?php
							hentAktivitet();
						?>
					</div>
				</div>
			</form>
			
		</div>
	</div>
</div>
