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
						<!--<input class="input_text_small" type="text" placeholder="BildeId" name="bildeid"/>-->
						<!-- JS for knapp -->
						<a href="velgbilde.php">+Bilde</a>

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
						<input class="submit" type="submit" value="Neste" name="nesteSide"/>
					</div>
				</div>
				
				<!--PHP kode for å legge til aktivitet med parametere for all informasjon som er lagt til i skjema over.-->
				
					
				<!--DIV CONTAINER FOR HØYRE KOLONNE I LEGG TIL AKTIVITET-->
				<div class="col_right">
					<div id="aktivitet_oversikt">
						<?php
							hentAktivitet();
						?>
					</div>
				</div>
			</form>
			<?php
				if(isset($_REQUEST["nesteSide"]))
				{
					$aNavn = $_REQUEST["aktivitetsnavn"];
					
					//PHP for gjentakelses dager!
					$m = 0;
					$ti = 0;
					$o = 0;
					$to = 0;
					$f = 0;
					$l = 0;
					$s = 0;

					if(isset($_REQUEST["mandag"]))
					{
						$m = 1;
					}
					if(isset($_REQUEST["tirsdag"]))
					{
						$ti = 1;
					}
					if(isset($_REQUEST["onsdag"]))
					{
						$o = 1;
					}
					if(isset($_REQUEST["torsdag"]))
					{
						$to = 1;
					}
					if(isset($_REQUEST["fredag"]))
					{
						$f = 1;
					}
					if(isset($_REQUEST["loerdag"]))
					{
						$l = 1;
					}
					if(isset($_REQUEST["soendag"]))
					{
						$s = 1;
					}
					
					//PHP for fargevalg
					if(isset($_REQUEST["blue"]))
					{
						$fargeId = 1;
					}
					if(isset($_REQUEST["red"]))
					{
						$fargeId = 2;
					}
					if(isset($_REQUEST["green"]))
					{
						$fargeId = 3;
					}
					if(isset($_REQUEST["black"]))
					{
						$fargeId = 4;
					}

					//test for å hente bildeId fra velgbilde.php og tilegne id for å hente ut fre database og gi til leggtilaktivitet()¨
					if(isset($_POST["tilbake"]))
					{
						$bildeid = 0;
						if(isset($_POST["middag"]))
						{
							$bildeid = 1;
						}
						if(isset($_POST["skole"]))
						{
							$bildeid = 2;
						}
						if(isset($_POST["tv"]))
						{
							$bildeid = 3;
						}
					}
					else
					{
						echo "noe er gærent!";
					}
				
					//Setter gjentakelsedager inn i et array med 1=true for gjenta og 0=false for ikke å gjenta.
					$gjentaArray = array($m, $ti, $o, $to, $f, $l, $s);
					
					// Legger inn verdiene 1 for ja og 0 for nei i ukedager tabell!
					gjentaDager($gjentaArray);	

					//GjentaId hentet på den vanskelige måten! -- FUNKER IKKE!!!
					$gjentaID = hentGjentaId();
					

					// Legger inn aktivitet i database tabell med gitte specs for aktivitet.
					leggTilAktivitet($aNavn, $bildeid, $fargeId, $gjentaID);

					
				}
			?>
		</div>
	</div>
</div>
