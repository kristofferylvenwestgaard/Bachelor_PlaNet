<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<!--HEADER-->
	<div class="col-1-3">
		<div class="header">
			<h1 class="htext"><a href=admin.php>
				<i class="fa fa-user"></i>
				Terje
			</a>
			</h1>
		</div>
	</div>
	<div class="col-1-6">
		<div class="header">
			
			<a id="ukemndknapper" href="index.php" class="btn btn-large btn-block btn-outline sharp disabled" type="button">
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
					</br>
					<br/>
					<br/>

		<h1 class="htext"><a class="inAppLinks" href="index.php">Innlogging</a></h1>
		
	</div>
		<div class="admincontent">
			<div class="col-1-2">
				<div class="col_left">
				 	<br/>
					<br/>
					<br/>
					<br/>
					</br>
					<br/>		
					<div class="loginBak">				
						<div class="col-1-1">
								<i class=" fa fa-user fa-2x"></i>
									<input class="input_text" type="text" placeholder="Brukernavn">		
						</div>
						<div class="col-1-1">
								<div class="loginKor">
								<i class="fa fa-key fa-2x"></i>
									  <input class="input_text" type="password" placeholder="Passord">
								</div>
						</div>
					
			
					<div class="col-1-1">
						<div class="loginKnapp">
							<a href="index.php" class="btn btn-large btn-outline sharp" type="button">Logg inn</button></a>
						</div>
					</div>
					</div>
					<div id="loginTilbake">
					<a class="btn btn-large btn-outline sharp" href="admin.php">
  						<i class="fa fa-arrow-left"></i> Tilbake</a>
					</div>
				</div>
				</div>
				
					<div class="col_right">
							<div class="inMalText">
							[Når du logger inn med ny bruker vil du automatisk bli logget ut av eksisterende
							bruker.]
							
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