<?php
	include "includes/top.php";
	include "includes/footer.php";


	$_SESSION['aid'] = hentAktivitetId();
	$stegNummer = 1;
	//LEGGE INN HANDLINGSKJEDESTEG MED ID LIK SESSION["aid"]
	if(isset($_REQUEST['leggTil']))
	{
		if(isset($_REQUEST['handlingskjede']))
		{
			addHandlingSteg($_SESSION['aid'], $_REQUEST['beskrivelseBoks'], $stegNummer);
			$stegNummer++;
		}
		else
		{
			echo "noe er galt med addHandlingSteg()";
		}
	}

?>