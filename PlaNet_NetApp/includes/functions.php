<?php
	include "db_connect.php";


	//FUNKSJON FOR Å LEGGE TIL AKTIVITET I DATABASE
	function leggTilAktivitet($akNavn, $akBeskr, $dato, $tid, $alarm, $bildeId, $fargeId)
	{
		//Variabler som skal inn i aktivitet tabell.
		$aktivitetNavn = $akNavn;
		$aktivitetBeskrivelse = $akBeskr;
		$aktivitetDato = $dato;
		$aktivitetTid = $tid;
		$aktivitetAlarm = $alarm;
		$aktivitetBilde = $bildeId;
		$aktivitetFarge = $fargeId;

		//SQL INSERT INTO aktivitet
		$settInnAktivitet = "INSERT INTO aktivitet(bildeId, fargeId, aktivitetNavn, beskrivelse, dato, tid, alarm) VALUES ('". $aktivitetBilde. "','". $aktivitetFarge."''".$aktivitetNavn."','".$aktivitetBeskrivelse."','". $aktivitetDato . "','". $aktivitetTid."'
							,'". $aktivitetAlarm."')";
		
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
            	    <section id="aktivitetListUt">
            	        <?php 
            	            echo $row["aktivitetNavn"]."</br>". $row["beskrivelse"];
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