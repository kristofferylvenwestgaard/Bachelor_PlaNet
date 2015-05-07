<?php
	include "includes/top.php";
	include "includes/footer.php";

?>

<div class="container">
	<!--HEADER-->
	<div class="col-1-3">
		<div class="header">
			<a href="index.php"><h1 class="htext"></h1></a>
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
           <div id="dagIdagsPlan">Fredag</div>
    </div>
    <div class="col-8-12">
           <div class="aktivitetNavn">Hente burger</div>
    </div>
    <div class="col-2-12">
           <div class="stegTittel"></div>
    </div>
</div>

<div class = "container">
	
		<div class="col-2-12">
				<div id="fredag">
					<?php	
						hentAktivitet();
						//LEGGE TIL KNAPP FOR Å VELGE HVILKEN AKTIVITET MAN SKAL GJENNOMFØRE?
						//--------> HER <---------//
						//KNAPPEN HENTER RIKTIG AKTIVITETSID OG TILEGNER DEN I $aktivitetId under.
					?>
				</div>
		</div>

	<div class=" containerSjekkliste dpBoks">
	<div class="col-4-12">
           <div class="tekstOmrade"></br>Hente Whopper Burger (bestilt i WooperLab)</div>
    </div>

    <div class="col-6-12">
           <div class="bildeOmrade"><img src="checklistbilder/whopper.jpg" width="400px" height="260px" alt="admin"/></div>
    </div>

    

    <div class="col-12-12">
          <div class="stegOmrade">
            <a href="index.php" class="btn btn-success btn-overHele sharp" type="button">Ferdig</button></a>
            
          </div>
    </div>


    



    
</div>   
</div>
						