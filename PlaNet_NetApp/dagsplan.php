	<?php
	include "includes/top.php";
	include "includes/footer.php";

?>

<div class="container">
	<!--HEADER-->
	<div class="col-1-3">
		<div class="header">
			<a href="bruker.php"><h1 class="htext">
				<a href=bruker.php>
				<i class="fa fa-user"></i>
				Terje
			</a>
			</h1></a>
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
				<a href="admin.php"><img src="img/admin1.png" width="45px" height="45px" alt="admin"/></a>
				</div>
			</div>
		</div>
	</div>
<div class = "container">




	<div class="col-1-1">
           <div class="aktivitetNavnAktivitet">Bestill Burger</div>
    </div>
		<div class="admincontent">
			<div class= "col-3-4">
	           			<div class="aktBilde">
	           			<img src="handlingskjedebilder/1.png" width="650px" height="110px" alt="1"/></a>

	           			</div>
	           		</div>

					<div class= "col-1-4">
						<div class="akttekst">
							Besøk <strong>www.whopperlab.no</strong> via din nettleser
						</div>
	           		</div>
	           		<div class="col-1-1">
	           			<div id="handKnapperPos">
								<div class="col-1-3">
									   <a class="btn btn-warning btn-dobbelxl btn-block sharp" href="index.php">
									       <i class="fa fa-times"></i> Avbryt</a>
								</div>
			
								<div class="col-2-3">
					 					 <a class="btn btn-primary btn-dobbelxl btn-block sharp" href="dagsplan2.php">
					             			 <i class="fa fa-check"></i> OK</a>
					 			</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>
