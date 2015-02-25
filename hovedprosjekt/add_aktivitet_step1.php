
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
			<form class="form_add_aktivitet" action="" name="legg_til_aktivitet" method="post">
				<!--DIV CONTAINER FOR VENSTRE KOLONNE I LEGG TIL AKTIVITET-->
				<div class="col_left">

					<!--TEXTBOX FOR AKTIVITETSNAVN-->
					<div class="inAppText">Legg til aktivitet:</div></br>
					<input class="input_text" type="text" placeholder="Aktivitetsnavn" name="aktivitetsnavn"/><br/>
	
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
						<input class="input_check" type="checkbox" name="lørdag"/>
					</div>
					<div id="soendag_gjenta">
						<p class="formText">Sø</p><br/>
						<input class="input_check" type="checkbox" name="sønadg"/>
					</div>

					<!--DATO INPUT -->
					<input class="input_text" type="text" placeholder="Dato - Valgfri" name="dato"/><br/>

					<!--ALARM INPUT-->
					<input class="input_text" type="text" placeholder="Alarm - Valgfri" name="alarm"/><br/>

					<!--AKTIVITETSFARGE VALG -->
					<div id="farge_valg">
						<p class="formText">Blå</p>
						<p class="formText">Rød</p>
						<p class="formText">Grønn</p>
						<p class="formText">Sort</p>
					</div>
					<!--HJELPEFUNKSJONER-->
					<div id="help_functions">Hjelpefunksjoner: </div> </br>
	
					<input class="input_check" type="checkbox" name="skype"/><p class="formText">Skype</p><br/>
					<input class="input_check" type="checkbox" name="månedlig"/><p class="formText">Personalliste</p><br/>
	
	
					<input class="submit" type="submit" value="Legg til" name="submit"/>
				</div>

				<!--DIV CONTAINER FOR HØYRE KOLONNE I LEGG TIL AKTIVITET-->
				<div class="col_right">
					<div id="aktivitet_oversikt">
						<?php
							hentAktivitet();
						?>
					</div>
					<div class="next_page">
						<a class="inAppLinks" href="add_aktivitet_step2.php">Next</a>
					</div>
				</div>
			</form>
			
		</div>
	</div>
</div>