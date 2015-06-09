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
		<div id="headerMal">Mal - måned</div>
			<div id="dropDownMal">
				<select>
				  <option value="alleEgendefinerte">Skoleuke</option>
				  <option value="ferie">Ferieuke</option>
				  <option value="jobb">Jobbeuke</option>
				  <option value="skoleogjobb">Skole og jobbuke</option>
				
				</select>
			</div>
			<div id="dropDownUke">
				<select>
				  <option value="alleEgendefinerte">2015 Mai </option>
				  <option value="uke">2015 Juni</option>
				  <option value="uke">2015 Juli</option>
				  <option value="uke">2015 August</option>
				  <option value="uke">2015 September </option>
				  <option value="uke">2015 Oktober</option>
				  <option value="uke">2015 November</option>
				  <option value="uke">2015 Desember</option>
				  <option value="uke">2016 Januar</option>
				  <option value="uke">2016 Februar</option>
				  <option value="uke">2016 Mars </option>
				  <option value="uke">2016 April</option>
				  <option value="uke">2016 Mai</option>
				
			
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
				function touchHandler(event) {
    			var touch = event.changedTouches[0];
	
    			var simulatedEvent = document.createEvent("MouseEvent");
      			simulatedEvent.initMouseEvent({
        		touchstart: "mousedown",
       	 		touchmove: "mousemove",
        		touchend: "mouseup"
    			}[event.type], true, true, window, 1,
        		touch.screenX, touch.screenY,
        		touch.clientX, touch.clientY, false,
        		false, false, false, 0, null);
	
    			touch.target.dispatchEvent(simulatedEvent);
    			event.preventDefault();
			}

		function init() {
    			document.addEventListener("touchstart", touchHandler, true);
    			document.addEventListener("touchmove", touchHandler, true);
    			document.addEventListener("touchend", touchHandler, true);
    			document.addEventListener("touchcancel", touchHandler, true);
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
					
						<div id="ukeMalValg" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
							Velg ukemal
							<div a draggable="true" class="malerMnd" id="1" ondragstart="dragUser(this, event)">Skole [uke 19]</a>
								<img src="img/skole.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="malerMnd" id="2" ondragstart="dragUser(this, event)">Skole [uke 21]</a>
								<img src="img/skole.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="malerMnd" id="3" ondragstart="dragUser(this, event)">Skole [uke 22]</a>
								<img src="img/skole.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="malerMnd" id="4" ondragstart="dragUser(this, event)">Skole [uke 23]</a>
								<img src="img/skole.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="malerMnd" id="5" ondragstart="dragUser(this, event)">Skole [uke 24]</a>
								<img src="img/skole.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="malerMnd" id="6" ondragstart="dragUser(this, event)">Skole [uke 26]</a>
								<img src="img/skole.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
						
						
						</div>
					
						<br/>
						</br>
						<br/>
						
					</div>
				<div class="col-2-2">
					<div id="malHjelpeTekst">
						[Dra og slipp mal til ønsket ukenummer]			
					</div>
				</div>
				
			
						
						<div class="col-2-7">
							</br>
							<div class="malUkeEn" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Uke 27
							</div>
							<div class="malUkeNummer" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Uke 28
							</div>
							<div class="malUkeNummer" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Uke 29
							</div>
							<div class="malUkeNummer" ondrop="dropUser(this, event)" ondragenter="return false" ondragover="return false">
								Uke 30
							</div>

						

						<div class="clear"></div>

						<div class="col-1-1">
							<div id="tilbakeMndMal">
								<a class="btn btn-large btn-outline sharp" href="velgmaltype.php">
  								<i class="fa fa-arrow-left"></i> Tilbake</a>
							</div>
						</div>
						<div class="col-1-1">
							<div id="lagreMndMal">
								<a class="btn btn-large btn-outline sharp" href="velgmaltype.php">
  								<i class="fa fa-floppy-o"></i> Lagre</a>
							</div>
						</div>





					
						
								</div>
								
							
						</div>
					</div>
			</div>
		</div>
	</div>
</div>