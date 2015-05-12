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
		<div class="opacityPersonal">
		</div>
		<div id="pmandag">
			<?php
				//listUtAktivitetUkeplan();
			?>
			<!--DUMMY INNHOLD!-->
			<div class="persjonal">
				<div class="personalFarge">
				<strong>Dagvakt</strong></br>
			</div>
			Anita</br>
			908 51 541
			<div class="rundt">
				<img src="img/pers1.jpg" alt="pers1" width="75px" height="75px"/>
			</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Aftenvakt</strong></br>
			</div>
				Joakim</br>
				908 51 542
				<div class="rundt">
					<img src="img/pers2.jpg" alt="pers2" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Nattevakt</strong></br>
			</div>
				Lise</br>
				908 51 543
				<div class="rundt">
					<img src="img/pers3.jpg" alt="pers3" width="75px" height="75px"/>
				</div>
		</div>

		</div>
	</div>
	<div class="col-1-7">
		<div class="opacityPersonal">
		</div>
		<div id="ptirsdag">
			<?php	
				//listUtAktivitetUkeplan()
			?>
			<!--DUMMY INNHOLD!-->
			<div class="persjonal">
				<div class="personalFarge">
			<strong>Dagvakt</strong></br>
			</div>
				Johan</br>
				908 51 544
				<div class="rundt">
					<img src="img/pers4.jpg" alt="pers4" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Aftenvakt</strong></br>
			</div>
				Kari</br>
				908 51 542
				<div class="rundt">
					<img src="img/pers5.jpg" alt="pers5" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Nattevakt</strong></br>
			</div>
				Anita</br>
				908 51 541
				<div class="rundt">
					<img src="img/pers1.jpg" alt="pers1" width="75px" height="75px"/>
				</div>
		</div>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacityPersonal">
		</div>
		<div id="ponsdag">
			<?php	
				//listUtAktivitetUkeplan()
			?>
			<!--DUMMY INNHOLD!-->
			<div class="persjonal">
				<div class="personalFarge">
			<strong>Dagvakt</strong></br>
			</div>
				Johan</br>
				908 51 544
				<div class="rundt">
					<img src="img/pers4.jpg" alt="pers4" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Aftenvakt</strong></br>
			</div>
				Kari</br>
				908 51 545
				<div class="rundt">
					<img src="img/pers5.jpg" alt="pers5" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Nattevakt</strong></br>
			</div>
				Petter</br>
				908 51 546
				<div class="rundt">
					<img src="img/pers6.jpg" alt="pers6" width="75px" height="75px"/>
				</div>
		</div>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacityPersonal">
		</div>
		<div id="ptorsdag">
			<!--DUMMY INNHOLD!-->
			<div class="persjonal">
				<div class="personalFarge">
			<strong>Dagvakt</strong></br>
			</div>
				Anita</br>
				908 51 541
				<div class="rundt">
					<img src="img/pers1.jpg" alt="pers1" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Aftenvakt</strong></br>
			</div>
				Joakim</br>
				908 51 542
				<div class="rundt">
					<img src="img/pers2.jpg" alt="pers2" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Nattevakt</strong></br>
			</div>
				Lise</br>
				908 51 543
				<div class="rundt">
					<img src="img/pers3.jpg" alt="pers3" width="75px" height="75px"/>
				</div>
		</div>
		</div>
	</div>
	<div class="col-1-7">
		<div id="pfredag">
			<div class="persjonal">
				<div class="personalFarge">
			<strong>Dagvakt</strong></br>
			</div>
				Johan</br>
				908 51 544
				<div class="rundt">
					<img src="img/pers4.jpg" alt="pers4" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Aftenvakt</strong></br>
			</div>
				Kari</br>
				908 51 542
				<div class="rundt">
					<img src="img/pers5.jpg" alt="pers5" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Nattevakt</strong></br>
			</div>
				Lise</br>
				908 51 546
				<div class="rundt">
					<img src="img/pers6.jpg" alt="pers6" width="75px" height="75px"/>
				</div>
		</div>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacityPersonal">
		</div>
		<div id="plordag">
			<?php	
				//listUtAktivitetUkeplan()
			?>
			<!--DUMMY INNHOLD!-->
			<div class="persjonal">
				<div class="personalFarge">
			<strong>Dagvakt</strong></br>
			</div>
				Anita</br>
				908 51 541
				<div class="rundt">
					<img src="img/pers1.jpg" alt="pers1" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Aftenvakt</strong></br>
			</div>
				Joakim</br>
				908 51 542
				<div class="rundt">
					<img src="img/pers2.jpg" alt="pers2" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Nattevakt</strong></br>
			</div>
				Lise</br>
				908 51 543
				<div class="rundt">
					<img src="img/pers3.jpg" alt="pers3" width="75px" height="75px"/>
				</div>
		</div>
		</div>
	</div>
	<div class="col-1-7">
		<div class="opacityPersonal">
		</div>
		<div id="psondag">
			<?php	
				//listUtAktivitetUkeplan()
			?>
			<!--DUMMY INNHOLD!-->
			<div class="persjonal">
			<div class="personalFarge">
			<strong>Dagvakt</strong></br>
			</div>
		
				Kari</br>
				908 51 542
				<div class="rundt">
					<img src="img/pers5.jpg" alt="pers4" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Aftenvakt</strong></br>
			</div>
				Johan</br>
				908 51 544
				<div class="rundt">
					<img src="img/pers4.jpg" alt="pers5" width="75px" height="75px"/>
				</div>
		</div>

		<div class="persjonal">
			<div class="personalFarge">
			<strong>Nattevakt</strong></br>
			</div>
				Lise</br>
				908 51 546
				<div class="rundt">
					<img src="img/pers6.jpg" alt="pers6" width="75px" height="75px"/>
				</div>
		</div>
	</div>
	<div id="tilbakePersonal">


		<a class="btn btn-large btn-warning sharp" href="bruker.php">
  		<i class="fa fa-arrow-left"></i> Tilbake</a>
</div>
</div>
</div>

