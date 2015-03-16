<?php
	include "db_connect.php";


	//FUNKSJON SOM LEGGER INN AKTIVIET I aktivitettabell! --- Fungerer ikke PGA ($gId og insert gjentaId. Uten så er den gull)
	function leggTilAktivitet($n, $bId, $fId, $gId)
	{
		//DENNE ER GRUNNEN TIL AT FUNCTIONS INLCUDEN IKKE FUNGERTE... NÅ FUNGEERER DET GULL!
		global $connect;
		
		$navn = $n;
		$bildeId = $bId;
		$fargeId = $fId;
		$gjentaId = $gId;

		
		//*echo $gjentaIdentitet; *//
		$sql = "INSERT INTO aktivitet (bildeId, fargeId, gjentaID, aktivitetNavn) VALUES ('". $bildeId."','" .$fargeId."','" .$gjentaId."','". $navn ."')";
		if ($connect->query($sql) === TRUE) 
		{
			echo "New record created successfully";
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $connect->error($sql);
		}
		
	}
	
	//Funksjon for å hente siste gjentaId i tabellen ukedager --ET ELELR ANNET SOM IKKE ER BRA-- Går bare til else setning...
	function hentGjentaId()
	{
		global $connect;

		$id = "SELECT gjentaID FROM ukedager";
		$resultat = mysqli_query($connect, $id);
		$gid = 0;
		$ok = 0;
		if(mysqli_num_rows($resultat) > 0)
		{
			while($row = mysqli_fetch_assoc($resultat))
			{
				$innhold[] = $row;
			}
			$innhold = array_reverse($innhold, true);
			
			foreach($innhold as $rekke)
			{
				$ok ++;
				if($ok == 1)
				{
					$gid = $rekke["gjentaID"];
					break;
				}
			}
			return $gid;
			echo "tullball! YESSS!";
		}
		else
		{
			echo $connect->error($id) . "noe helvetes gærent har skjedd!";
		}
		
	}

	//Funksjon for å legge inn dager som skal gjentas i ukedager tabell.	
	function gjentaDager($gjentaDager)
	{
		global $connect;


		
		$sql = "INSERT INTO ukedager (mandag, tirsdag, onsdag, torsdag, fredag, lordag, sondag) VALUES (".$gjentaDager[0].",".$gjentaDager[1].",".$gjentaDager[2].",
				".$gjentaDager[3].",".$gjentaDager[4].",".$gjentaDager[5].",".$gjentaDager[6].")";
		
		if ($connect->query($sql) === TRUE) 
		{
			echo "New record created successfully";
		} 
		else 
		{
			echo "Error: " . $sql . "<br>" . $connect->error;
		}
		
	}		

	//FUNKSJON FOR Å HENTE UT INNLAGTE AKTIVITETER FOR GITT DAG FRA DATABASE
	function hentAktivitet()
	{
		global $connect;
		//SQL setning for å hente aktivitet
		$visAktivitet = "SELECT aktivitetNavn, bildeId, fargeId FROM aktivitet";
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
        		//IF-TESTER som sjekker hvilken FargeID aktiviteten er tilegnet i DB. og setter $farge til riktig farge!
        		if($row["fargeId"] == 1)
        		{
        			$farge = "Blå";
        		}
        		if($row["fargeId"] == 2)
        		{
        			$farge = "Rød";
        		}
        		if($row["fargeId"] == 3)
        		{
        			$farge = "Grønn";
        		}
        		if($row["fargeId"] == 4)
        		{
        			$farge = "Sort";
        		}
            	?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <section class="aktivitetListUt">
            	        <?php 
            	            echo "Aktivitetsnavn: ".$row["aktivitetNavn"].". BildeId: ". $row["bildeId"]."</br> Farge: ".$farge;
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