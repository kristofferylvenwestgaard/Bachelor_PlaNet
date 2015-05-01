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
			
				
				 	<br/>
					<br/>
					<br/>
					<br/>
					</br>
					<br/>						
					<div class="col-1-8">

					<section id="hoved">
					
						<div id="malvalgUke" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
							Velg mal
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
					
						<br/>
						</br>
						<br/>
						
					</div>
				<div class="col-2-2">
					<div id="malHjelpeTekst">
						[Dra og slipp mal til ønsket ukedag]			
					</div>
				</div>
				
			
						
						<div class="col-2-7">
							</br>
							<div class="malUkeDagMandag" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Mandag
							</div>
							<div class="malUkeDager" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Tirsdag
							</div>
							<div class="malUkeDager" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Onsdag
							</div>
							<div class="malUkeDager" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Torsdag
							</div>
							<div class="malUkeDager" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Fredag
							</div>
							<div class="malUkeDager" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Lørdag
							</div>
							<div class="malUkeDager" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Søndag
							</div>

						<div class="clear"></div>

						<div class="col-1-1">
							<div id="tilbakeUkeMal">
								<a href="velgmaltype.php" class="btn btn-large btn-outline" type="button">← Tilbake</button></a>
							</div>
						</div>
						<div class="col-1-1">
							<div id="lagreUkeMal">
								<a href="index.php" class="btn btn-large btn-outline" type="button">Lagre</button></a>
							</div>
						</div>





					
						
								</div>
								
							
						</div>
					</div>
			</div>
		</div>
	</div>
</div>