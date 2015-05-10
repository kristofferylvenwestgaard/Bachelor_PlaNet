<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<!--HEADER-->
	<div class="col-1-3">
		<div class="header">
			<h1 class="htext">
				<a href=admin.php>
				<i class="fa fa-user"></i>
				Terje
			</a>
			</h1>
		</div>
	</div>
	<div class="col-1-6">
		<div class="header">
			
			<a id="ukemndknapper" href="index.php" class="btn btn-large btn-block btn-outline sharp" type="button">
				<i class="fa fa-columns"></i>  Uke</button>
			</a>
		</div>
	</div>
	<div class="col-1-6">
		<div class="header">
			<a id="ukemndknapper" href="mai.php" class="btn btn-large btn-block btn-outline sharp" type="button">

				<i class="fa fa-calendar-o"></i>  Måned</button>
			</a>
		</div>
	</div>
	<div class="col-1-3">
		<div class="header">
			<!--Skal byttes ut med JS og Symbol!!!-->
			<div class="col-1-1">
				<div id="clock"></div>
				<div id="admin">
					<a href="admin.php"><i class="fa fa-cog fa-3x"></i></a>
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
		<div class="admincontent">
			<div class="col-1-1">
				<div class="col_left">
				 	<br/>
					<br/>
					<br/>
					<br/>
					</br>
					<br/>						
					<div class="col-1-1">

						
					

						<form action="index.php">
    						<input id="motivasjonKnappBruker" type="submit" value="Mål">
						</form>

						<form action="personal.php">
    						<input id="personalKnapp" type="submit" value="Personalliste">
						</form>

						<form action="start.php">
    						<input id="loggAvKnappBruker" type="submit" value="Logg av bruker"/
    						onclick="return confirm('Er du sikker på at du vil logge av?')">
						</form>



	
						<br/>
						</br>
						<br/>

						<div id="tilbakeBruker">
						<a class="btn btn-large btn-warning sharp" href="admin.php">
  						<i class="fa fa-arrow-left"></i> Tilbake</a>
						</div>
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