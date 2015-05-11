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
			//echo "New record created successfully";
		}
		else 
		{
			echo "Error: " . $sql . "<br>" . $connect->error;
		}
		
	}

	//LEGG TIL HANDLINGSKJEDE:
	function addHandlingSteg($aktSamId, $beskrivelse, $stegNr)
	{
		global $connect;
		
		//Beskrivelse som skal legges til hver handlingskjedesteg
		$asId = $aktSamId;	
		$b = $beskrivelse;
		$sNr = $stegNr;
		//MANGLER STEGBILDEVARIABEL.

		$sql = "INSERT INTO handlingskjede (stegNr, beskrivelse, aktivitetSammenhengId) VALUES ('".$sNr."', '".$b."', '".$asId."')";
		if ($connect->query($sql) === TRUE) 
		{
			//echo "New record created successfully";
		}
		else 
		{
			echo "Error: " . $sql . "<br>" . $connect->error;
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
		}
		else
		{
			echo "Error: " . $id . "<br>" . $connect->error;
		}
		
	}



	function hentAktivitetId()
	{
		global $connect;

		$id = "SELECT id FROM aktivitet";
		$resultat = mysqli_query($connect, $id);
		$aid = 0;
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
					$aid = $rekke["id"];
					break;
				}
			}
			return $aid;
		}
		else
		{
			echo "Error: " . $id . "<br>" . $connect->error;
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
			//echo "New record created successfully";
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
        		//IF TESTER HVILKEN BILDE ID SOM BENYTTES OG HENTER DERETTER RIKTIG BILDE I BILDE TABELL
        		if($row["bildeId"] == 1)
        		{
        		?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <div class="activity">
            	    <?php
            	    //IF TESTER SOM SJEKKER FARGEID OPP MOT VALGT FARGE OG GIR INDEX SIDENS AKTIVITETER 
						//RIKTIG FARGEDIV
            	    	if($row["fargeId"] == 1)
            	    	{
							?>
								<div class="lightbluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 2)
            	    	{
							?>
								<div class="bluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 3)
            	    	{
							?>
								<div class="orangecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 4)
            	    	{
							?>
								<div class="redcode"></div>
							<?php
            	    	}
						
            	         
            	            echo $row["aktivitetNavn"]."";
            	    ?>
            	            <img src="../Database/BurgerKing_aktivitet1.jpg" alt="whopper" width="130px" height="60px"/>
           		    </div>
            	<?php
        		}
        		if($row["bildeId"] == 2)
        		{
        		?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <div class="activity">
						<?php
						//IF TESTER SOM SJEKKER FARGEID OPP MOT VALGT FARGE OG GIR INDEX SIDENS AKTIVITETER 
						//RIKTIG FARGEDIV
            	    	if($row["fargeId"] == 1)
            	    	{
							?>
								<div class="lightbluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 2)
            	    	{
							?>
								<div class="bluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 3)
            	    	{
							?>
								<div class="orangecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 4)
            	    	{
							?>
								<div class="redcode"></div>
							<?php
            	    	}
						
            	         
            	            echo $row["aktivitetNavn"]."";
            	   		?>
            	            <img src="../Database/Ullevål_BurgerKing_aktivitet2.jpg" alt="ullevålBK" width="130px" height="60px"/>
           		    </div>
            	<?php
        		}
        		if($row["bildeId"] == 3)
        		{
        			?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <div class="activity">
						<?php
						//IF TESTER SOM SJEKKER FARGEID OPP MOT VALGT FARGE OG GIR INDEX SIDENS AKTIVITETER 
						//RIKTIG FARGEDIV
            	    	if($row["fargeId"] == 1)
            	    	{
							?>
								<div class="lightbluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 2)
            	    	{
							?>
								<div class="bluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 3)
            	    	{
							?>
								<div class="orangecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 4)
            	    	{
							?>
								<div class="redcode"></div>
							<?php
            	    	}
						
            	         
            	            echo $row["aktivitetNavn"]."";
            	   		?>
            	            <img src="../Database/søppel_aktiviet3.jpg" alt="søppel" width="130px" height="60px"/>
           		    </div>
            	<?php
        		}
            }
		}
		else
		{
			?>
				<div class="activity">
					<?php
						echo "Det finnes ingen aktiviteter!";
					?>
				</div>
			<?php
		}
	}

	//LISTER UT HANDLINGSKJEDE STEG I aktivitet step2 del2-3.
	function hentHandlingskjede($aid)
	{
		global $connect;
		//SQL setning for å hente aktivitet
		$aktivitetId = $aid;
		$visHandlingskjede = "SELECT aktivitetSammenhengId, stegNr, beskrivelse FROM handlingskjede";
		$resultat = mysqli_query($connect, $visHandlingskjede);

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
        		//IF TESTER HVILKEN BILDE ID SOM BENYTTES OG HENTER DERETTER RIKTIG BILDE I BILDE TABELL
        		if($row["aktivitetSammenhengId"] == $aktivitetId)
        		{
        			?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <div class="activity">
            	   		<div class="phpUtTextHand">
            	    	<?php
            	    		//IF TESTER SOM SJEKKER FARGEID OPP MOT VALGT FARGE OG GIR INDEX SIDENS AKTIVITETER 
							//RIKTIG FARGEDIV
            	    		echo $row["stegNr"]. ": " . $row["beskrivelse"];
            	   		?>
            			</div>
           		    </div>
            	<?php
        		}
            }
		}
		else
		{
			?>
				<div class="activity">
					<?php
						echo "Det finnes ingen steg i handlingskjede!";
					?>
				</div>
			<?php
		}
	}

	//FUNKSJON FOR Å LEGGE INN "CHECK" I HANDLINGSKJEDE TABELL TIL RIKTIG STEGID
	function handKjedeStegCheck($stegNr, $aktivitetSammenhengId)
	{	
		global $connect;
		
		$check = 0;

		//sjekker om stegNr er krysset av
		if(isset($_REQUEST["check"]))
		{	
			$check = 1;

			//OPPDATERER HANDLINGSKJEDE TABELL VED Å SETTE INN CHECK PÅ RIKTIG HANDLINGSTEG.
			$sql = "UPDATE handlingskjede SET checkSteg = '" .$check. "' 
					WHERE aktivitetSammenhengId = '".$aktivitetSammenhengId."' 
					AND stegNr = '".$stegNr."'";
			
			if ($connect->query($sql) === TRUE) 
			{
				//echo "New record created successfully";
			} 
			else 
			{
				echo "Error: " . $sql . "<br>" . $connect->error;
			}
		}
	}

	//FUNKSJON FOR Å HENTE UT INNLAGTE AKTIVITETER FOR GITT DAG FRA DATABASE, og liste ut i UKEOVERSIKT!  
	function listUtAktivitetUkeplan()
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
        		//IF TESTER HVILKEN BILDE ID SOM BENYTTES OG HENTER DERETTER RIKTIG BILDE I BILDE TABELL
        		if($row["bildeId"] == 1)
        		{
        		?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <a class="inAppLinks" href="dagsplan.php">
            	    	<div class="activity">
            	    		<?php
            	    		//IF TESTER SOM SJEKKER FARGEID OPP MOT VALGT FARGE OG GIR INDEX SIDENS AKTIVITETER 
								//RIKTIG FARGEDIV
            	    			if($row["fargeId"] == 1)
            	    			{
									?>
										<div class="lightbluecode"></div>
									<?php
            	    			}
            	    			elseif($row["fargeId"] == 2)
            	    			{
									?>
										<div class="bluecode"></div>
									<?php
            	    			}
            	    			elseif($row["fargeId"] == 3)
            	    			{
									?>
										<div class="orangecode"></div>
									<?php
            	    			}
            	    			elseif($row["fargeId"] == 4)
            	    			{
									?>
										<div class="redcode"></div>
									<?php
            	    			}
								
            	    		     
            	    		        echo $row["aktivitetNavn"]."";
            	    		?>
            	            <img src="../Database/BurgerKing_aktivitet1.jpg" alt="whopper" width="130px" height="60px"/>
           		  		
           		  	</div>
           		   </a>
            	<?php
        		}
        		if($row["bildeId"] == 2)
        		{
        		?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <a class="inAppLinks" href="dagsplanUtkast2.php">
            	    <div class="activity">
						<?php
						//IF TESTER SOM SJEKKER FARGEID OPP MOT VALGT FARGE OG GIR INDEX SIDENS AKTIVITETER 
						//RIKTIG FARGEDIV
            	    	if($row["fargeId"] == 1)
            	    	{
							?>
								<div class="lightbluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 2)
            	    	{
							?>
								<div class="bluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 3)
            	    	{
							?>
								<div class="orangecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 4)
            	    	{
							?>
								<div class="redcode"></div>
							<?php
            	    	}
						
            	         
            	            echo $row["aktivitetNavn"]."";
            	   		?>
            	            <img src="../Database/Ullevål_BurgerKing_aktivitet2.jpg" alt="ullevålBK" width="130px" height="60px"/>
           		    </div>
           			</a>
            	<?php
        		}
        		if($row["bildeId"] == 3)
        		{
        			?>
         			<!--Oppretter en html section i aktivitetsvindu hvor aktivitetene vil listes ut.-->
            	    <a class="inAppLinks" href="dagsplanAktivitet.php">
            	    <div class="activity">
						<?php
						//IF TESTER SOM SJEKKER FARGEID OPP MOT VALGT FARGE OG GIR INDEX SIDENS AKTIVITETER 
						//RIKTIG FARGEDIV
            	    	if($row["fargeId"] == 1)
            	    	{
							?>
								<div class="lightbluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 2)
            	    	{
							?>
								<div class="bluecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 3)
            	    	{
							?>
								<div class="orangecode"></div>
							<?php
            	    	}
            	    	elseif($row["fargeId"] == 4)
            	    	{
							?>
								<div class="redcode"></div>
							<?php
            	    	}
						
            	         
            	            echo $row["aktivitetNavn"]."";
            	   		?>
            	            <img src="../Database/søppel_aktiviet3.jpg" alt="søppel" width="130px" height="60px"/>
           		    </div>
           		</a>
            	<?php
        		}
            }
		}
		else
		{
			?>
				<div class="activity">
					<?php
						echo "Det finnes ingen aktiviteter!";
					?>
				</div>
			<?php
		}
	}

	
?>