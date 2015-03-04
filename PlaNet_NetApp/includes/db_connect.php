<?php
	//DATABASE TILKOBLING 
	$connect = mysqli_connect("localhost", "root", "", "PLANET"); //MÅ RETTE OPP MED PARAMETERENE

	//CHECKS CONNECTION, AND GIVES ERROR IF NOT WORKING
	if(!$connect)
	{
		die("connection failed: " . mysql_connect_error());
	}
	//else
	//{
	//	echo "Du er tilkoblet!!!!";
	//}
?>