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
           <div class="aktivitetNavn">Bestill burger</div>
    </div>
    <div class="col-2-12">
           <div class="stegTittel">Steg</div>
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
		<div class="col-8-12">
	           <div class="grid">
	           		<div class="dagsplanBoks">
	           		
	           		<div class "col-1-1">
	           			<div class="handBilde">
	           			<img src="handlingskjedebilder/TastSMSkode.png" width="500px" height="350px" alt="admin"/></a>
	           			</div>
	           		</div>

					<div class "col-1-1">
						<div class="handTekst">
							Skriv inn kode og bekreft bestilling
						</div>
	           		</div>

						
					</div>
	           </div>
	     </div>
	     <div class="col-2-12">
	     	<div class="dagsChecklist">

	     			<!--HYPERLINKS TIL NESTE HANDLINGSSTEG!-->
	     			<a href="dagsplan.php" class="submit btn btn-xl btn-success sharp" type="button">1</button></a>

	     			<a href="dagsplan2.php" class="submit btn btn-xl btn-success sharp" type="button">2</button></a>
	     			
				
	     			<a href="dagsplan3.php" class="submit btn btn-xl btn-success sharp" type="button">3</button></a>
					
	     			<a href="dagsplan4.php" class="submit btn btn-xl btn-success sharp" type="button">4</button></a>
					
	     			<a href="dagsplan5.php" class="submit btn btn-xl btn-success sharp" type="button">5</button></a>
					
	     			<a href="dagsplan6.php" class="submit btn btn-xl btn-success sharp" type="button">6</button></a>
					
	     			<a href="dagsplan7.php" class="submit btn btn-xl btn-success sharp" type="button">7</button></a>
					
	     			<a href="dagsplan8.php" class="submit btn btn-xl btn-success sharp" type="button">8</button></a>
					
	     			<a href="dagsplan9.php" class="submit btn btn-xl btn-success sharp" type="button">9</button></a>
					
	     			<a href="dagsplan10.php" class="submit btn btn-xl btn-success sharp" type="button">10</button></a>
					
	     			<a href="dagsplan11.php" class="submit btn btn-xl btn-success sharp" type="button">11</button></a>
					
	     			<a href="dagsplan12.php" class="submit btn btn-xl btn-success sharp" type="button">12</button></a>
					
	     			<a href="dagsplan14.php" class="submit btn btn-xl btn-success sharp" type="button">13</button></a>
					<!--STEG 13-14-->
	     			<a href="index.php" class="submit btn btn-xl btn-outline sharp" type="button">14</button></a>
	     	</div>
	     </div>
	
 </div>
