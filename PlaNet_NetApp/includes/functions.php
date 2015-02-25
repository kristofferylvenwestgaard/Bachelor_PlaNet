<?php
	include "db_connect.php";


	//FUNKSJON FOR Å LEGGE TIL AKTIVITET I DATABASE
	function leggTilAktivitet($akNavn, $akBeskr, $dato, $tid, $alarm, $bilde, $farge)
	{
		//Variabler som skal inn i aktivitet tabell.
		$aktivitetNavn = $akNavn;
		$aktivitetBeskrivelse = $akBeskr;
		$aktivitetDato = $dato;
		$aktivitetTid = $tid;
		$aktivitetAlarm = $alarm;
		$aktivitetBilde = $bilde;
		$aktivitetFarge = $farge;

		//SQL INSERT INTO aktivitet
		$settInnAktivitet = "INSERT INTO aktivitet(aktivitetNavn, beskrivelse, dato, tid, alarm, bildeId, fargeId) VALUES ('".$aktivitetNavn."','".$aktivitetBeskrivelse."','". $aktivitetDato . "','". $aktivitetTid."'
							,'". $aktivitetAlarm."','". $aktivitetBilde. "','". $aktivitetFarge."')";
		
		$resultat = mysqli_query($connect, $settInnAktivitet);

		//SJEKKER AT spørring gjennomføres og gir feilmelding dersom det oppstår feil.
		if (!$resultat)
    	{
      		echo "error: ".mysqli_error($connect);
   		}
    	else
    	{
        	echo "Aktivitet er lagt til";
    	}
	}


	//FUNKSJON FOR Å HENTE UT INNLAGTE AKTIVITETER FOR GITT DAG FRA DATABASE
	function hentAktivitet()
	{
		//SQL setning for å hente aktivitet
		$hentAktivitet = "SELECT * FROM aktivitet";
		$resultat = mysqli_query($connect, $hentAktivitet);

		//Teller rekker i tabellen, og setter innholdet i et assosiativt array dersom det er fler enn 0.
		//Lister deretter ut innholdet i arrayet (aktivitetene)
		if(mysqli_num_rows($resultat) < 0)
		{
			$aktivitetNr;
			while($aktivitetNr = mysqli_fetch_assoc($resultat))
			{
				$innhold[] = $aktivitetNr;
			}
			foreach($innhold as $aktivitet)
        	{
            	?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <section id="aktivitetListUt">
            	        <?php 
            	            echo $aktivitet["aktivitetNavn"]."</br>". $aktivitet["aktivitetBeskrivelse"] ."</br>". $aktivitet["aktivitetNr"];
            	        ?>
           		    </section>
            	<?php
            }
		}
		else
		{
			echo "Det finnes ingen aktiviteter!";
		}
	}

	function bytteAktivitetsNr()
	{
		//Endre rekkefølge på aktiviteter innad i en dag

		//Sette en aktivitet opp -> dytte en ned

		//Dytte en aktivitet ned -> sette en opp
	}
?>