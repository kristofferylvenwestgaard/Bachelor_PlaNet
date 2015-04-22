<?php
	include "includes/top.php";
	include "includes/footer.php";
?>

<div class="container">
	<div class="header">
		<h1 class="htext"><a class="inAppLinks" href="index.php">Administrer applikasjon</a></h1>
	</div>
	<div class="admincontent">
		<div class="col-1-1">
			<div class="col_left">
				<div id="add_akt_step2_header">
					<?php echo $_SESSION["aktivitetsnavn"];?> 
				</div>
			 	
				<form class="form_add_aktivitet" action="add_aktivitet_step2_del3.php" name="legg_til_aktivitet" method="post">
					<div class="inAppText">
						Legg til aktivitet:
					</div>
					</br>
					<div id="checkLeft">
						<input class="input_check" type="checkbox" name="aktivitet"/><p class="formText">Aktivitet</p><br/>
						<input class="input_check" type="checkbox" name="handlingskjede"/><p class="formText">Handlingskjede</p></br>
						<input class="input_check" type="checkbox" name="sjekkliste"/><p class="formText">Sjekkliste</p></br>
						
						<div class="col-1-1">
							<div class="inAppText">Beskrivelse:</div>
							<textarea class="input_textarea" name="beskrivelseBoks" placeholder="Beskriv aktivitet"></textarea>
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
							</form>
						</div>

						<br/>
						<br/>
						
						<input class="submit btn btn-large btn-success" type="submit" value="+Legg til" name="leggTil"/>
					</div>
				</form>
			</div>

			<!--PHP KODE FOR Å LEGGE TIL AKTIVITET MED BESKRIVELSE OSV.-->
			<?php
				$_SESSION['aid'] = hentAktivitetId();
				//LEGGE INN HANDLINGSKJEDESTEG MED ID LIK SESSION["aid"]
				if(isset($_REQUEST['leggTil']))
				{
					if(isset($_REQUEST['handlingskjede']))
					{
						//echo "record added!";
						addHandlingSteg($_SESSION['aid'], $_REQUEST['beskrivelseBoks'], $_SESSION["stegNummer"]);
						$_SESSION["stegNummer"] ++;
					}
					else
					{
						echo "noe er galt med addHandlingSteg()";
					}
				}
			?>

			<!--DIV CONTAINER FOR HØYRE KOLONNE! -->
			<div class="col_right">
				<div id="aktivitet_oversikt">
						<?php
							hentHandlingskjede($_SESSION['aid']);
						?>
				</div>
				<div class="next_page">
					<a href="index.php" class="btn btn-large btn-success" type="button">Fullfør</button></a>
					
				</div>
			</div>
		</div>
	</div>
</div>