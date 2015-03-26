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
           <div id="dagIdagsPlan">Torsdag</div>
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




		<div class="col-9-12">
	           <div class="grid">
	           		<div class="dagsplanBoks">
	           		


						
					</div>
	           </div>
	     </div>
	     <div class="col-1-12">
	     	<div class="dagsChecklist">
	     			
	     		
	     			<a href="#" class="btn btn-large btn-success btn-lg sharp" type="button">Steg #1</button></a>
	     		
	     			<a href="#" class="btn btn-large btn-danger btn-lg sharp" type="button">Steg #2</button></a>
	     		
	     			<a href="#" class="btn btn-large btn-danger btn-lg sharp" type="button">Steg #3</button></a>

	     			<a href="#" class="btn btn-large btn-danger btn-lg sharp" type="button">Steg #4</button></a>
	     		
	     			<a href="#" class="btn btn-large btn-danger btn-lg sharp" type="button">Steg #5</button></a>

	     			<a href="#" class="btn btn-large btn-danger btn-lg sharp" type="button">Steg #6</button></a>
	     		
	     			<a href="#" class="btn btn-large btn-danger btn-lg sharp" type="button">Steg #7</button></a>

	     			<a href="#" class="btn btn-large btn-danger btn-lg sharp" type="button">Steg #8</button></a>
	     		
	     			<a href="#" class="btn btn-large btn-danger btn-lg sharp" type="button">Steg #9</button></a>
	     	
	     	</div>
	     </div>
	
 </div>
