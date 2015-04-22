<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<!--HEADER-->
	<div class="col-1-3">
		<div class="header">
			<h1 class="htext">Terje</h1>
		</div>
	</div>
	<div class="col-1-6">
		<div class="header">
			
			<a id="ukemndknapper" href="index.php" class="btn btn-large btn-block btn-outline sharp" type="button">Uke</button></a>
		</div>
	</div>
	<div class="col-1-6">
		<div class="header">
			<a id="ukemndknapper" href="april.php" class="btn btn-large btn-block btn-outline sharp" type="button">Måned</button></a>
		</div>
	</div>
	<div class="col-1-3">
		<div class="header">
			<!--Skal byttes ut med JS og Symbol!!!-->
			<div class="col-1-1">
				<div id="clock"></div>
				<div id="admin">
					<a href="admin.php"><img src="img/admin1.png" width="45px" height="45px" alt="admin"/></a>
				</div>
			</div>
		</div>
	</div>

<div class="container">
	<div class="header">
		<br/>
					<br/>
					</br><br/>
					<br/>
		<h1 class="htext"><a class="inAppLinks" href="index.php">Administrer applikasjon</a></h1>
		
	</div>
		<div id="admincontent">
			<div class="col-1-1">
				<div class="col_left">
				 	<br/>
					<br/>
					<br/>
					<br/>
					</br>
					<br/>						
					<div class="col-1-1">

						<form action="add_aktivitet_step1.php">
    						<input id="leggTilKnapp" type="submit" value="Legg til Aktivitet">
						</form>

						<form action="index.php">
    						<input id="malerKnapp" type="submit" value="Velg fra maler">
						</form>

						<form action="index.php">
    						<input id="rapportKnapp" type="submit" value="Rapportering">
						</form>

						<form action="index.php">
    						<input id="motivasjonKnapp" type="submit" value="Motivasjon">
						</form>
	
						<br/>
						</br>
						<br/>

						<a href="index.php" class="btn btn-large btn-outline" type="button">← Tilbake</button></a>
					</div>
				</div>
				
					<div class="col_right">
						<div id="adminInfoBoks">
						<div class="col-1-2">
							</br>
							<div class="inAppText">Terje Skog
								</br>
								</br>
								Konglestien 3
								</br>
								0192 Oslo
								</br>
								</br>
								93408080
								</br>
								terjeskog@gmail.com				
							</div>
						</div>
						<div class="col-3-4">
							<div class="circular-image"><img src="img/terje.jpg" alt="portrett"></div>
						</div>
						<div class="col-1-1">
							<div id="skypeknapp">
						<script type="text/javascript" src="http://www.skypeassets.com/i/scom/js/skype-uri.js"></script>
								<div id="SkypeButton_Call_live:magnus.elde_1">
						<script type="text/javascript">
								    Skype.ui({
								      "name": "call",
								      "element": "SkypeButton_Call_live:magnus.elde_1",
								      "participants": ["live:magnus.elde"],
								      "imageSize": 32
								    });
						</script>
								</div>
								<!--
								<a href="" class="btn btn-primary btn-lg outline" type="button">Skype</button></a>
							-->
							</div>
						</div>
					</div>
			</div>
		</div>
	</div>
</div>
<!--<div class="container">
	<div class="header">
		<h1 class="htext"><a class="inAppLinks" href="index.php">Administrer applikasjon</a></h1>
	</div>
	<div id="admincontent">
		<div class="col-1-1">
			<div id="leggTilAktivitet"> 
				<h1 class="inAppHeaders">
					<a class="inAppLinks" href="add_aktivitet_step1.php">Legg til aktivitet</a>
					<a class="inAppLinks" href="add_aktivitet_step1.php">Velg fra aktivitetsbank</a>
					<a class="inAppLinks" href="add_aktivitet_step1.php">Rapportering</a>
				</h1>
			</div>
		</div>
	</div>
</div>
-->