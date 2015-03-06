<?php
	include "db_connect.php";


	//FUNKSJON FOR Å HENTE UT INNLAGTE AKTIVITETER FOR GITT DAG FRA DATABASE
	function hentAktivitet()
	{
		global $connect;
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

	
?>