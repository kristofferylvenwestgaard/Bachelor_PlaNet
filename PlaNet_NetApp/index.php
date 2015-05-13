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
	<!--UKEDAGER-->
	<div class="col-1-7">
		<div class="ukedag">Mandag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Tirsdag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Onsdag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Torsdag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Fredag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Lørdag</div>
	</div>
	<div class="col-1-7">
		<div class="ukedag">Søndag</div>
	</div>

	<!--UKEDAGER MED AKTIVITETSVISNING-->
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="mandag">
			<?php
				//listUtAktivitetUkeplan();
			?>
			<!--DUMMY INNHOLD!-->
			<div class="activity">
				<div class="lightbluecode"></div>
				Puss tenner
				<img src="img/DUMMY_INDEX/tannpuss.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Frokost
				<img src="img/DUMMY_INDEX/frokost.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Lunch
				<img src="img/DUMMY_INDEX/lunch.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="redcode"></div>
				Middag
				<img src="img/DUMMY_INDEX/middag.jpg" alt="middag" width="130px" height="60px"/>
			</div>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="tirsdag">
			<?php	
				//listUtAktivitetUkeplan()
			?>
			<!--DUMMY INNHOLD!-->
			<div class="activity">
				<div class="lightbluecode"></div>
				Puss tenner
				<img src="img/DUMMY_INDEX/tannpuss.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Frokost
				<img src="img/DUMMY_INDEX/frokost.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="orangecode"></div>
				Trening
				<img src="img/DUMMY_INDEX/trening.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Lunch
				<img src="img/DUMMY_INDEX/lunch.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="redcode"></div>
				Middag
				<img src="img/DUMMY_INDEX/middag.jpg" alt="middag" width="130px" height="60px"/>
			</div>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="onsdag">
			<?php	
				//listUtAktivitetUkeplan()
			?>
			<!--DUMMY INNHOLD!-->
			<div class="activity">
				<div class="redcode"></div>
				Puss tenner
				<img src="img/DUMMY_INDEX/tannpuss.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="orangecode"></div>
				Frokost
				<img src="img/DUMMY_INDEX/frokost.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Lunch
				<img src="img/DUMMY_INDEX/lunch.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="redcode"></div>
				Middag
				<img src="img/DUMMY_INDEX/middag.jpg" alt="middag" width="130px" height="60px"/>
			</div>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="torsdag">
			<!--DUMMY INNHOLD!-->
			<div class="activity">
				<div class="lightbluecode"></div>
				Puss tenner
				<img src="img/DUMMY_INDEX/tannpuss.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Frokost
				<img src="img/DUMMY_INDEX/frokost.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Lunch
				<img src="img/DUMMY_INDEX/lunch.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="redcode"></div>
				Middag
				<img src="img/DUMMY_INDEX/middag.jpg" alt="middag" width="130px" height="60px"/>
			</div>
		</div>
	</div>
	<div class="col-1-7">
		<div id="fredag">
			<?php	
				listUtAktivitetUkeplan()
			?>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="lordag">
			<?php	
				//listUtAktivitetUkeplan()
			?>
			<!--DUMMY INNHOLD!-->
			<div class="activity">
				<div class="lightbluecode"></div>
				Puss tenner
				<img src="img/DUMMY_INDEX/tannpuss.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Frokost
				<img src="img/DUMMY_INDEX/frokost.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="orangecode"></div>
				Trening
				<img src="img/DUMMY_INDEX/trening.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Lunch
				<img src="img/DUMMY_INDEX/lunch.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="redcode"></div>
				Middag
				<img src="img/DUMMY_INDEX/middag.jpg" alt="middag" width="130px" height="60px"/>
			</div>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacity">
		</div>
		<div id="sondag">
			<?php	
				//listUtAktivitetUkeplan()
			?>
			<!--DUMMY INNHOLD!-->
			<div class="activity">
				<div class="redcode"></div>
				Puss tenner
				<img src="img/DUMMY_INDEX/tannpuss.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="orangecode"></div>
				Frokost
				<img src="img/DUMMY_INDEX/frokost.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="bluecode"></div>
				Lunch
				<img src="img/DUMMY_INDEX/lunch.jpg" alt="middag" width="130px" height="60px"/>
			</div>
			<div class="activity">
				<div class="redcode"></div>
				Middag
				<img src="img/DUMMY_INDEX/middag.jpg" alt="middag" width="130px" height="60px"/>
			</div>
		</div>
	</div>
</div>
