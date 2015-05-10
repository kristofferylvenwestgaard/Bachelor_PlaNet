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
		<div id="headerMal">Mal - uke</div>
			<div id="dropDownMal">
				<select>
				  <option value="alleEgendefinerte">Alle egendefinerte</option>
				  <option value="middager">Middager</option>
				  <option value="handleliste">Handlelister</option>
				  <option value="hygiene">Hygiene</option>
				  <option value="sport">Sport</option>
				</select>
			</div>
			<div id="dropDownUke">
				<select>
				  <option value="alleEgendefinerte">Uke 18</option>
				  <option value="uke">Uke 19</option>
				  <option value="uke">Uke 20</option>
				  <option value="uke">Uke 21</option>
				  <option value="uke">Uke 22</option>
				  <option value="uke">Uke 23</option>
				  <option value="uke">Uke 24</option>
				  <option value="uke">Uke 25</option>
				  <option value="uke">Uke 26</option>
				  <option value="uke">Uke 27</option>
				  <option value="uke">Uke 28</option>
				  <option value="uke">Uke 29</option>
				  <option value="uke">Uke 30</option>
				  <option value="uke">Uke 31</option>
				  <option value="uke">Uke 32</option>
				  <option value="uke">Uke 33</option>
				  <option value="uke">Uke 34</option>
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
							<div a draggable="true" class="malerUke" id="1" ondragstart="dragUser(this, event)">Se på Idol</a> 	
								<img src="img/tv.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="malerUke" id="2" ondragstart="dragUser(this, event)">Lage spaghetti</a> 
								<img src="img/dinner.gif" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="malerUke" id="3" ondragstart="dragUser(this, event)">Gå på skolen</a>
								<img src="img/skole.jpg" width="45px" height="45px" alt="admin"/></a> 
							</div>
							<div a draggable="true" class="malerUke" id="4" ondragstart="dragUser(this, event)">Handle mat</a> 
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
								<a class="btn btn-large btn-outline sharp" href="velgmaltype.php">
  						<i class="fa fa-arrow-left"></i> Tilbake</a>
							</div>
						</div>
						<div class="col-1-1">
							<div id="lagreUkeMal">
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