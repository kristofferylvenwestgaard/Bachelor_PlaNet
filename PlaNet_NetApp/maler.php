<?php
	include "includes/top.php";
	include "includes/footer.php";
?>
<div class="container">
	<!--HEADER-->
	<div class="col-1-3">
		<div class="header">
			<h1 class="htext">Terje</h1>
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

<div class="container">
	<div class="header">
		<br/>
		<br/>
		</br><br/>
		<br/>
		<div id="headerMal">Mal - ukedag</div>
			<div id="dropDownMal">
				<select>
				  <option value="alleEgendefinerte">Alle egendefinerte</option>
				  <option value="saab">Middager</option>
				  <option value="mercedes">Handlelister</option>
				  <option value="audi">Hygiene</option>
				  <option value="audi">Sport</option>
				</select>
			</div>

		<script>
			function dragUser(user, event) {
			    event.dataTransfer.setData('User', user.id);
			}
			function dropUser(target, event) {
			    var user = event.dataTransfer.getData('User');
			    target.appendChild(document.getElementById(user)); 
			}
		</script>
		
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
					<div class="col-1-3">

					<section id="hoved">
					
						<div id="malvalg" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
							Ubrukte maler
							<div a draggable="true" class="maler" id="1" ondragstart="dragUser(this, event)">Se på Idol</a> 	
								<img src="img/tv.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="maler" id="2" ondragstart="dragUser(this, event)">Lage spaghetti</a> 
								<img src="img/dinner.gif" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="maler" id="3" ondragstart="dragUser(this, event)">Gå på skolen</a>
								<img src="img/skole.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="maler" id="4" ondragstart="dragUser(this, event)">Handle mat</a> 
								<img src="img/handlekurv.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
						
						</div>
						<div class="col-1-3">
							<div class="leggTilPil">&rarr;</div>

						</div>
						<br/>
						</br>
						<br/>
						<div class="col-1-1">
						</br>
						<a href="index.php" class="btn btn-large btn-outline" type="button">← Tilbake</button></a>
					</div>
					</div>
				</div>
				
					<div class="col_right">
						
						<div class="col-1-1">
							</br>
							<div id="malMandag" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Mandag
							</div>
						<div class="clear"></div>

						<div class="col-1-1">
							<div id="knappTirsdag">
								<a href="" class="btn btn-large btn-outline" type="button">Tirsdag &rarr;</button></a>
							</div>
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