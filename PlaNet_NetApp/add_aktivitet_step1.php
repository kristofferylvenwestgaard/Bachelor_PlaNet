<?php
	include "includes/top.php";
	include "includes/footer.php";
?>

<div class="container">
	<div class="header">
		<h1 class="htext"><a class="inAppLinks" href="admin.php">Administrer applikasjon</a></h1>
	</div>
	<div class="admincontent">
				<form class="form_add_aktivitet" action="add_aktivitet_step2.php" name="legg_til_aktivitet" method="post">
				<!--DIV CONTAINER FOR VENSTRE KOLONNE I LEGG TIL AKTIVITET-->
				<div class="col_left">
				<div class="grid grid-pad">	
				<div class="col-1-1">
					<div class="content">
					<!--TEXTBOX FOR AKTIVITETSNAVN-->
					<div class="inAppText">Legg til aktivitet:</div>
					</div>
				</div>
				<div class="col-1-1">
					<div class="content">
						<input class="input_text" type="text" placeholder="Aktivitetsnavn" name="aktivitetsnavn"/>
							<!--<input class="input_text_small" type="text" placeholder="BildeId" name="bildeid"/>-->
							<a href="velgbilde.php" class="btn btn-bilde btn-info" type="button">+Bilde</button></a>
					</div>
				</div>

				<div class="col-1-1">
					<div class="content">
					<!--GJENTAGELSE MANDAG - FREDAG! -->
					<div class="inAppText">Gjenta aktivitet:</div> 
					</div>
				</div>
				<div class="col-1-1">
					<div class="content">
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
					</div>
				</div>


								<!--DATO INPUT -->
						
							<div class="col-1-4">
								<div class="content">		
										<div class="inAppText">
											Dato <small>[valgfritt]:</small>
										</div>
										<input class="input_dato" type="date" placeholder="Dato - Valgfri" name="dato"/><br/>
								</div>
							</div>
						
										<!--ALARM INPUT-->
							<div class="col-1-4">
								<div class="content">		
										<div class="inAppText">
											Alarm <small>[valgfritt]:</small>
										</div>
										<input class="input_alarm" type="time" placeholder="Alarm - Valgfri" name="alarm"/><br/>
								</div>
							</div>		
							
						
					<!--AKTIVITETSFARGE VALG -->
					<div class="col-1-1">
					<div class="content">
							<div class="inAppText">
								Velg farge: 
							</div>
					</div>
					</div>
					<div class="col-1-1">
						<div class="content">
							<input type="checkbox" id="checkbox-1-1" class="redcheckbox" name="red" /><label for="checkbox-1-1"></label>
							<input type="checkbox" id="checkbox-1-2" class="bluecheckbox" name="blue" /><label for="checkbox-1-2"></label>
							<input type="checkbox" id="checkbox-1-3" class="greencheckbox" name="green" /><label for="checkbox-1-3"></label>
							<input type="checkbox" id="checkbox-1-4" class="blackcheckbox" name="black" /><label for="checkbox-1-4"></label>
						</div>
					</div>
					<!-- 
						GAMLE CHECKBOXER - JUST IN CASE
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
					-->
					
				

					<!--HJELPEFUNKSJONER-->
					<div class="col-1-1">
						<div class="content">
							<div class="inAppText">
								Hjelpefunksjoner:
							</div>
						</div>
					</div>

				<div class="col-1-1">
					<div class="content">
						<div id="skype_check">
							<p class="formText">Skype</p><br/>
							<input class="input_check" type="checkbox" name="skype"/>
						</div>
						<div id="personal_check">	
							<p class="formText">Personalliste</p><br/>
							<input class="input_check" type="checkbox" name="personalliste"/><br/>
						</div>
						</div>
				</div>

					<!--NESTEKNAPP-->
					<div class="col-1-1">
					<div class="content">
					</br>
					
						<input class="submit btn btn-large btn-info" type="submit" value="Neste" name="nesteSide"/>
					
					</div>
					</div>

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

					//SETTER SESSIONVARIABEL MED STEGNUMMER FOR HANDLINGSKJEDE STEGNR SLIK AT DEN KAN ØKES PÅ DE NESTE SIDENE VED ADD HANDLINGSKJEDE
					$_SESSION["stegNummer"] = 1;
				?>
					
				<!--DIV CONTAINER FOR HØYRE KOLONNE I LEGG TIL AKTIVITET-->
				<div class="col_right">
					<div id="aktivitet_oversikt">
						<div class="phpUtText">
						<?php
							hentAktivitet();
						?>
						</div>
					</div>
				</div>
			</form>
		
</div>
