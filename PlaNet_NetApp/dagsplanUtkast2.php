<?php
	include "includes/top.php";
	include "includes/footer.php";

?>

<div class="container">
	<!--HEADER-->
	<div class="col-1-3">
		<div class="header">
			<a href="index.php"><h1 class="htext">Terje</h1></a>
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
<div class = "container">
    <div class="col-2-12">
           <div id="dagIdagsPlan">Torsdag</div>
    </div>
    <div class="col-8-12">
           <div class="aktivitetNavn">Aktivitetsnavn</div>
    </div>
    <div class="col-2-12">
           <div class="stegTittel">Steg</div>
    </div>
</div>

<div class = "container">
	
		<div class="col-2-12">
				<div id="torsdag">
					<?php	
						hentAktivitet();
						//LEGGE TIL KNAPP FOR Å VELGE HVILKEN AKTIVITET MAN SKAL GJENNOMFØRE?
						//--------> HER <---------//
						//KNAPPEN HENTER RIKTIG AKTIVITETSID OG TILEGNER DEN I $aktivitetId under.
					?>
				</div>
		</div>

	<div class=" container dpBoks">
	<div class="col-4-12">
           <div class="tekstOmrade"></br>Bestill pommes frites</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade"><img src="checklistbilder/fries.jpg" width="400px" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade">
          	<input type="checkbox" id="checkbox-1-1" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-1"></label>
          	
          </div>
    </div>

    
    <div class="col-4-12">
           <div class="tekstOmrade bakgrunnSkille"></br>Hent salt. Om teksten er lang er den automatisk gjort scrollbar 
            Hjelpetekst for steg. Om teksten er lang er den automatisk gjort scrollbar Hjelpetekst for steg. Om teksten er lang er den automatisk gjort scrollbar Hjelpetekst for steg. Om teksten er lang er den automatisk gjort scrollbar Hjelpetekst for steg. Om teksten er lang er den automatisk gjort scrollbar
          </div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade bakgrunnSkille"><img src="checklistbilder/salt.jpg" width="400px" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade bakgrunnSkille">
          	<input type="checkbox" id="checkbox-1-2" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-2"></label>
          	
          </div>
    </div>




    <div class="col-4-12">
           <div class="tekstOmrade"></br>Hjelpetekst for steg</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade"><img src="img/terje.jpg" width="260px" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade">
          	<a href="index.php" class="btn btn-dobbelxlX btn-outline sharp" type="button">X</button></a>
          	
          </div>
    </div>


    <div class="col-4-12">
           <div class="tekstOmrade bakgrunnSkille"></br>Hjelpetekst for steg</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade bakgrunnSkille"><img src="img/terje.jpg" width="260px" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade bakgrunnSkille">
          	<a href="index.php" class="btn btn-dobbelxlX btn-outline sharp" type="button">X</button></a>
          	
          </div>
    </div>




    
</div>   
</div>
						
