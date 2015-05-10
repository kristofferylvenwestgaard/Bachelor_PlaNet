<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<!--HEADER-->
	<div class="col-1-3">
		<div class="header">
			<h1 class="htext">
				<a href=bruker.php>
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
            <a id="ukemndknapper" href="index.php" class="btn btn-large btn-block btn-outline sharp" type="button">
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
		<h1 class="htext"><a class="inAppLinks" href="index.php">Maler</a></h1>
		
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

						<form action="ukemal.php">
    						<input id="ukeMalKnapp" type="submit" value="Ukemal">
						</form>

						<form action="mndmal.php">
    						<input id="mndMalKnapp" type="submit" value="Månedsmal">
						</form>

						
	
						<br/>

						<div class="col-1-1">
						</br>
						<br/>
						<br/>
						<br/>
						<br/>
						</br>
						<br/>
						<br/>
						<br/>
						<br/>
						<br/>
						
						
					
						
						<a class="btn btn-large btn-outline sharp" href="admin.php">
  						<i class="fa fa-arrow-left"></i> Tilbake</a>
					</div>
					</div>
				</div>
				
					<div class="col_right">
						<div class="inMalText">
							Her kan du velge mellom ukemal og månedsmal. </br> </br> </br>[Bruk ukemal for å opprette en valgfri uke ved
							hjelp av eksisterende enkeltaktiviteter.] </br></br> [Bruk månedsmal for å opprette en valgfri måned ved
							hjelp av eksisterende ukemaler.]
						</div>
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