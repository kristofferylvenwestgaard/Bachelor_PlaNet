<?php
	include "db_connect.php";

	function leggTilAktivitet($n, $bId, $gjenta)
	{
		//DENNE ER GRUNNEN TIL AT FUNCTIONS INLCUDEN IKKE FUNGERTE... NÅ FUNGEERER DET GULL!
		global $connect;
		
		$navn = $n;
		$bildeId = $bId;
		$gjentaId = $gjenta;

		

		$sql = "INSERT INTO aktivitet (bildeId, aktivitetNavn) VALUES ('". $bildeId."','". $navn ."')";
		if ($connect->query($sql) === TRUE) 
		{
			echo "New record created successfully";
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $connect->error;
		}
		$connect->close();
	}
	
	//FUNKER IKKE ENDA!!! - FOREACH LØKKEN HENTER IKKE VERIDER FRA ARRAY - TROR JEG HAR LAGD ARRAY FEIL...			
	function gjentaDager($gjentaDager)
	{
		global $connect;
		$gjentaArray = $gjentaDager;



		//foreach-løkke som går gjennom gjenta-array og setter inn true eller false i ukedager.
		foreach($gjentaArray as $innhold)
		{
			$sql = "INSERT INTO ukedager(mandag, tirsdag, onsdag, torsdag, fredag, lordag, sondag) VALUES ('".$innhold["m"]."','".$innhold["ti"]."','".$innhold["o"]."','".$innhold["to"]."','".$innhold["f"]."','"
					.$innhold["l"]."','".$innhold["s"]."')";
			if ($connect->query($sql) === TRUE) 
			{
				echo "New record created successfully";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . $connect->error;
			}
			$connect->close();
		}
	}		

	//FUNKSJON FOR Å HENTE UT INNLAGTE AKTIVITETER FOR GITT DAG FRA DATABASE
	function hentAktivitet()
	{
		global $connect;
		//SQL setning for å hente aktivitet
		$visAktivitet = "SELECT aktivitetNavn, bildeId FROM aktivitet";
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
            	            echo "Aktivitetsnavn: ".$row["aktivitetNavn"]."</br> BildeId: ". $row["bildeId"];
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