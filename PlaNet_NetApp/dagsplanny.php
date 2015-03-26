<?php
	include "includes/top.php";
	include "includes/footer.php";

?>

<div class = "container">
	<div class="col-1-3">
		<div class="header">
			<h1 class="htext">Terje</h1>
		</div>
	</div>
	<div class="col-1-3">
		<div class="header">
			<a id="hlink" href="index.php">Uke</a>
			<a id="hlink" href="index.php">Måned</a>
		</div>
	</div>
	<div class="col-1-3">
		<div class="header">
			<!--Skal byttes ut med JS og Symbol!!!-->
			<div class="col-1-1">
				<div id="clock">21:52:42</div>
				<div id="admin">
					<a href="admin.php"><img src="img/admin1.png" alt="admin"/></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class = "container">
    <div class="col-2-12">
           <div class="ukedag">Torsdag</div>
    </div>
    <div class="col-10-12">
           <div class="aktivitetNavn">List ut aktivtetsNavn</div>
    </div>
</div>

<div class = "container">
	
		<div class="col-2-12">
				<div id="torsdag">
					<?php	
						listUtAktivitetUkeplan()
					?>
				</div>
		</div>


	<?php
		$stegNr1 = "Steg #1"; 
		$beskrivelseDplan1 = "Mål opp 3 dl vann";
		$bilde1="img/vannbeger.jpg";

		$stegNr2 = "Steg #2"; 
		$beskrivelseDplan2 = "Hopp";
		$bilde2 = "img/admin1.png"
		//$bilde2="<img src='img/admin1.png' alt='admin'/>";
		

	?>



		<div class="col-9-12">
	           <div class="grid">
	           		<div class="dagsplanBoks">
	           			<p id="stegNr"><?php echo $stegNr1; ?></p> 
	           			<p id="beskrivelse"><?php echo $beskrivelseDplan1; ?></p> 
	           			<div id="bilde">
	           			<img src="<?php echo $bilde1; ?>"/>
	           			</div>


						
					</div>
	           </div>
	     </div>
	     <div class="col-1-12">
	     	<div class="dagsplanBoks">
	     	<ul>  
	     		<li>
	     		
	     			<a href="#" class="btn btn-large btn-success" type="button" onclick = "changeContent ('stegNr', 'Steg #1', 'beskrivelse', 'Mål opaaap 3 dl vann', 'bilde', '<?php echo $bilde1; ?>')">Steg #1
	     			</a>
	     		</li>  
	     		<li>
	     			<a href="#" class="btn btn-large btn-success" type="button" onclick = "changeContent ('stegNr', '<?php echo $stegNr2; ?>', 'beskrivelse', '<?php echo $beskrivelseDplan2; ?>', 'bilde', '<?php echo $bilde2; ?>')">Steg #2
	     			</a>
	     		</li>  
	     		<li>
	     			<a href="#" class="btn btn-large btn-success" type="button" onclick = "changeContent ('stegNr', 'Steg #3', 'beskrivelse', 'Kok i 10 minutter og rør ofte', 'bilde', 'BILDETILSTEG')">Steg #3
	     			</a>
	     		</li>  
	     	</ul>
	     </div>
	     </div>
	
 </div>





