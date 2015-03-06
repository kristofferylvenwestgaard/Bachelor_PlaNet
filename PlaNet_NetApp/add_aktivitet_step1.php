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
					<input class="input_text" type="text" placeholder="Aktivitetsnavn" name="aktivitetsnavn"/>
					<input class="input_text_small" type="text" placeholder="BildeId" name="bildeid"/>

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
					<input class="input_text" type="text" placeholder="Dato - Valgfri" name="dato"/><br/>

					<!--ALARM INPUT-->
					<input class="input_text" type="text" placeholder="Alarm - Valgfri" name="alarm"/><br/>

					<!--AKTIVITETSFARGE VALG -->
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
						<input class="submit" type="submit" value="Neste" name="submit"/>
					</div>
				</div>
				
				<!--PHP kode for å legge til aktivitet med parametere for all informasjon som er lagt til i skjema over.-->
				
					
				<!--DIV CONTAINER FOR HØYRE KOLONNE I LEGG TIL AKTIVITET-->
				<div class="col_right">
					<div id="aktivitet_oversikt">
						
					</div>
				</div>
			</form>
			<?php
				if(isset($_REQUEST["submit"]) && !empty($_REQUEST["aktivitetsnavn"]))
				{
					$sql = "INSERT INTO i (aktivitet) VALUES ('".$_REQUEST["aktivitetsnavn"]."')";
					if ($connect->query($sql) === TRUE) 
					{
						echo "New record created successfully";
					} 
					else 
					{
						echo "Error: " . $sql . "<br>" . $connect->error;
					}

					$connect->close();
				}
			?>
		</div>
	</div>
</div>