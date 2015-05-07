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
           <div class="stegTittel">Sjekklister</div>
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
           <div class="tekstOmrade"></br>Hente Whopper Burger (bestilt i WooperLab)</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade"><img src="checklistbilder/whopper.jpg" width="400px" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade">
          	<input type="checkbox" id="checkbox-1-1" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-1"></label>
          	
          </div>
    </div>

    
    <div class="col-4-12">
           <div class="tekstOmrade bakgrunnSkille"></br>Bestill pommes frites
          </div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade bakgrunnSkille"><img src="checklistbilder/fries.jpg" width="400px" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade bakgrunnSkille">
          	<input type="checkbox" id="checkbox-1-2" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-2"></label>
          	
          </div>
    </div>




    <div class="col-4-12">
           <div class="tekstOmrade"></br>Bestill drikke</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade"><img src="checklistbilder/drikke.png" width="300px" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade">
          	<input type="checkbox" id="checkbox-1-3" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-3"></label>
          	
          </div>
    </div>


    <div class="col-4-12">
           <div class="tekstOmrade bakgrunnSkille"></br>Bestill kaffe</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade bakgrunnSkille"><img src="checklistbilder/kaffe.jpg" width="350x" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade bakgrunnSkille">
          	<input type="checkbox" id="checkbox-1-4" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-4"></label>
          	
          </div>
    </div>


    <div class="col-4-12">
           <div class="tekstOmrade"></br>Be om ketchup</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade"><img src="checklistbilder/ketchup.jpg" width="500x" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade">
            <input type="checkbox" id="checkbox-1-5" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-5"></label>
            
          </div>
    </div>


    <div class="col-4-12">
           <div class="tekstOmrade bakgrunnSkille"></br>Hent sugerør</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade bakgrunnSkille"><img src="checklistbilder/sugeror.jpg" width="350x" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade bakgrunnSkille">
            <input type="checkbox" id="checkbox-1-6" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-6"></label>
            
          </div>
    </div>


    <div class="col-4-12">
           <div class="tekstOmrade"></br>Hent serviett</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade"><img src="checklistbilder/servi.jpg" width="300" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade">
            <input type="checkbox" id="checkbox-1-7" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-7"></label>
            
          </div>
    </div>


    <div class="col-4-12">
           <div class="tekstOmrade bakgrunnSkille"></br>Bestill kaffe</div>
    </div>

    <div class="col-6-12"> 
           <div class="bildeOmrade bakgrunnSkille"><img src="checklistbilder/kaffe.jpg" width="350x" height="260px" alt="admin"/></div>
    </div>

    <div class="col-2-12">
          <div class="stegOmrade bakgrunnSkille">
            <input type="checkbox" id="checkbox-1-8" class="sjekkBoksDagsplan" name="middag" /><label for="checkbox-1-8"></label>
            
          </div>
    </div>



    
</div>   
</div>
						
