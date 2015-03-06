<?php
	include "db_connect.php";


	////FUNKSJON FOR Å LEGGE TIL AKTIVITET I DATABASE MED RELASJONSATTRIBUTTER.
	//function leggTilAktivitet($bildeId, $fargeId, $akNavn, $akBeskr, $m, $tirs, $o, $tors, $f, $l, $s, $dato, $tid, $alarm)
	//{
	//	//Variabler som skal inn i aktivitet tabell.
	//	$aktivitetBilde = $bildeId;
	//	$aktivitetFarge = $fargeId;
	//	$aktivitetNavn = $akNavn;
	//	$aktivitetBeskrivelse = $akBeskr;
	//	$aktivitetDato = $dato;
	//	$aktivitetTid = $tid;
	//	$aktivitetAlarm = $alarm;
//
	//	//Variabler initialisert fra skop-parameter, gjort klar for å være parameter i gjenta aktivitet
	//	$man = $m;
	//	$tir = $t;
	//	$ons = $o;
	//	$tor = $t;
	//	$fre = $f;
	//	$loer = $l;
	//	$soen = $s;
//
	//	//SQL og funksjon for gjenta aktivitet
	//	function gjentaAktivitet($m, $t, $o, $to, $f, $l, $s)
	//	{
	//		if($m)
	//		{
	//			$manSQL = "INSERT INTO ukedager(mandag) VALUES ('".$m."')";
	//			$manRes = mysqli_query($connect, $manSQL);
	//			if(!$manRes)
	//			{
	//				echo "feil!";
	//			}
	//		}
	//		if($t)
	//		{
	//			$tirSQL = "INSERT INTO ukedager(tirsdag) VALUES ('".$t."')";
	//			$tirRes = mysqli_query($connect, $tirSQL);
	//			if(!$tirRes)
	//			{
	//				echo "feil!";
	//			}
	//		}
	//		if($o)
	//		{
	//			$onsSQL = "INSERT INTO ukedager(onsdag) VALUES ('".$o."')";
	//			$onsRes = mysqli_query($connect, $onsSQL);
	//			if(!$onsRes)
	//			{
	//				echo "feil!";
	//			}
	//		}
	//		if($to)
	//		{
	//			$torsSQL = "INSERT INTO ukedager(torsfag) VALUES ('".$to."')";
	//			$torsRes = mysqli_query($connect, $torsSQL);
	//			if(!$torsRes)
	//			{
	//				echo "feil!";
	//			}
	//		}
	//		if($f)
	//		{
	//			$freSQL = "INSERT INTO ukedager(fredag) VALUES ('".$f."')";
	//			$freRes = mysqli_query($connect, $freSQL);
	//			if(!$freRes)
	//			{
	//				echo "feil!";
	//			}
	//		}
	//		if($l)
	//		{
	//			$loerSQL = "INSERT INTO ukedager(onsdag) VALUES ('".$l."')";
	//			$loerRes = mysqli_query($connect, $loerSQL);
	//			if(!$loerRes)
	//			{
	//				echo "feil!";
	//			}
	//		}
	//		if($s)
	//		{
	//			$soenSQL = "INSERT INTO ukedager(onsdag) VALUES ('".$s."')";
	//			$soenRes = mysqli_query($connect, $soenSQL);
	//			if(!$soenRes)
	//			{
	//				echo "feil!";
	//			}
	//		}
	//	}
	//	gjentaAktivitet($man, $tir, $ons, $tor, $fre, $loer, $soen);
//
	//	//SQL INSERT INTO aktivitet
	//	$settInnAktivitet = "INSERT INTO aktivitet(bildeId, fargeId, handId, gjentaID, aktivitetNavn, beskrivelse, dato, tid, alarm) 
	//						VALUES ('". $aktivitetBilde. "','". $aktivitetFarge."','".$handId."','".$gjentaId."','".$aktivitetNavn.
	//								"','".$aktivitetBeskrivelse."','".$dato."','".$tid."','".$alarm."')";
	//	
	//	$resultat = mysqli_query($connect, $settInnAktivitet);
//
	//	//SJEKKER AT spørring gjennomføres og gir feilmelding dersom det oppstår feil.
	//	if (!$resultat)
    //	{
    //  		echo "error: ".mysqli_error($connect);
   	//	}
    //	else
    //	{
    //    	echo "Aktivitet er lagt til";
    //	}
	//}



	//Legger til handlingskjeder eller checkboxer for aktiviteter som ble lagt til på add_aktivitet_step1
	//function leggTilHandlingskjede()
	//()


	//LEGG TIL AKTIVITET!!!!
	function leggTilAktivitet()
	{
		
	}














































	//FUNKSJON FOR Å HENTE UT INNLAGTE AKTIVITETER FOR GITT DAG FRA DATABASE
	function hentAktivitet()
	{
		//SQL setning for å hente aktivitet
		$visAktivitet = "SELECT aktivitetNavn, beskrivelse FROM aktivitet";
		$resultat = mysqli_query($connect, $visAktivitet);

		//Teller rekker i tabellen, og setter innholdet i et assosiativt array dersom det er fler enn 0.
		//Lister deretter ut innholdet i arrayet (aktivitetene)
		if(mysqli_num_rows($resultat) > 0)
		{
			while($row = mysqli_fetch_assoc($resultat))
			{
				$innhold[] = $row;
			}
			foreach($innhold as $row)
        	{
            	?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <section class="aktivitetListUt">
            	        <?php 
            	            echo $row["aktivitetNavn"]."</br>". $row["beskrivelse"];
            	        ?>
           		    </section>
            	<?php
            }
		}
		else
		{
			?>
				<section class="aktivitetListUt">
					<?php
						echo "Det finnes ingen aktiviteter!";
					?>
				</section>
			<?php
		}
	}

	function bytteAktivitetsNr()
	{
		//Endre rekkefølge på aktiviteter innad i en dag

		//Sette en aktivitet opp -> dytte en ned

		//Dytte en aktivitet ned -> sette en opp
	}
?>