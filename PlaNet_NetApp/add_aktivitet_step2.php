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
			<div class="col_left">
				<div id="add_akt_step2_header">
					<?php echo $_REQUEST["aktivitetsnavn"];?> 
				</div>
			 	
				<form class="form_add_aktivitet" action="" name="legg_til_aktivitet" method="post">
					<div class="inAppText">Legg til aktivitet:</div></br>

					

					<div id="checkLeft">
						<input class="input_check" type="checkbox" name="aktivitet"/><p class="formText">Aktivitet</p><br/>
						<input class="input_check" type="checkbox" name="handlingskjede"/><p class="formText">Handlingskjede</p></br>
						<input class="input_check" type="checkbox" name="sjekkliste"/><p class="formText">Sjekkliste</p></br>
						
						<div class="col-1-1">
							<div class="inAppText">Beskrivelse:</div>
							<textarea class="input_textarea" name="beskrivelseBoks" placeholder="Beskriv aktivitet" cols="46" rows="14"></textarea>
						</div>

						<div class="col-1-1">
							
							<form action="upload.php" method="post" enctype="multipart/form-data">

								   		<div class="fileUpload btn btn-primary">
										    <span>+Bilde</span>
										    <input type="file" class="upload" />
										</div>

										 <div class="fileUpload btn btn-primary">
										    <span>+Video</span>
										    <input type="file" class="upload" />
										</div>

										<div class="fileUpload btn btn-primary">
										    <span>+Lyd</span>
										    <input type="file" class="upload" />
										</div>

										<div class="fileUpload btn btn-primary">
										    <span>+Timer</span>
										    <input type="file" class="upload" />
										</div>	
						</div>
						<br/>
							<br/>
						<input class="submit btn btn-large btn-success" type="submit" value="+Legg til" name="leggTil"/>

						

					</div>


					<div id="checkRight">
					</div>
				</form>
			</div>

			<!--PHP KODE FOR Å LEGGE TIL AKTIVITET MED BESKRIVELSE OSV.-->
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
					$fargeid = 0;
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
					
					//Setter gjentakelsedager inn i et array med 1=true for gjenta og 0=false for ikke å gjenta.
					$gjentaArray = array($m, $ti, $o, $to, $f, $l, $s);
					
					// Legger inn verdiene 1 for ja og 0 for nei i ukedager tabell!
					gjentaDager($gjentaArray);	
					
					//GjentaId hentet på den vanskelige måten! -- FUNKER IKKE!!!
					$gjentaID = hentGjentaId();

					//Gir bildeid fra session variabel som er opprettet opå velgbilde.php til $bildeid som benyttes
					//i funksjonen leggTilAktivitet()
					$bildeid = $_SESSION["bildeid"];

					// Legger inn aktivitet i database tabell med gitte specs for aktivitet.
					leggTilAktivitet($aNavn, $bildeid, $fargeId, $gjentaID);
				}
			?>

			<!--DIV CONTAINER FOR HØYRE KOLONNE! -->
			<div class="col_right">
				<div id="aktivitet_oversikt">
				
				</div>
				<div class="next_page">
					<a href="index.php" class="btn btn-large btn-success" type="button">Fullfør</button></a>
					
				</div>
			</div>
		</div>
	</div>
</div>