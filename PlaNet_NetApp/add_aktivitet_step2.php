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
			<!--<?php	echo $_REQUEST ["aktivitetsnavn"]; ?> --><div class="inAppText">Aktivitetsnavnet gitt på forrige side</div> 
				<form class="form_add_aktivitet" action="" name="legg_til_aktivitet" method="post">
					<div class="inAppText">Legg til aktivitet:</div></br>

					<div id="checkLeft">
						<input class="input_check" type="checkbox" name="aktivitet"/><p class="formText">Aktivitet</p><br/>
						<input class="input_check" type="checkbox" name="handlingskjede"/><p class="formText">Handlingskjede</p></br>
						<input class="input_check" type="checkbox" name="sjekkliste"/><p class="formText">Sjekkliste</p></br>
						
						<div class="col-1-1">
							<div class="inAppText">Beskrivelse:</div>
							<textarea name="beskrivelseBoks" placeholder="Beskriv aktivitet" cols="46" rows="14"></textarea>
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
						<input class="submit btn btn-success" type="submit" value="+Legg til" name="submit"/>
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