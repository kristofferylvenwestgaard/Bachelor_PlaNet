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
           <div class="aktivitetNavn">List ut aktivtetsNavn</div>
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
	           		
	           		<!--STATISK INFORMASJON IFMA HTML CSS-->
	           		<!--HANDLINGSKJEDESTEG!-->

						
					</div>
	           </div>
	     </div>
	     <div class="col-2-12">
	     	<div class="dagsChecklist">

	     			<!--HYPERLINKS TIL NESTE HANDLINGSSTEG!-->
	     			<input class="submit btn btn-xl btn-block btn-success sharp" type="submit" value="1" name="check"/>

	     			<input class="submit btn btn-xl btn-block btn-success sharp" type="submit" value="✓" name="check"/>
	     		
	     			<input class="submit btn btn-xl btn-block btn-success sharp" type="submit" value="3" name="check"/>
	     		
	     			<input class="submit btn btn-xl btn-block btn-success sharp" type="submit" value="4" name="check"/>

	     			<input class="submit btn btn-xl btn-block btn-success sharp" type="submit" value="5" name="check"/>
	     		
	     			<input class="submit btn btn-xl btn-block btn-success sharp" type="submit" value="6" name="check"/>
	     	</div>
	     </div>
	
 </div>
