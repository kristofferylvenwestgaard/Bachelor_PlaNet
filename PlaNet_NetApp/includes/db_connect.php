<?php
	//DATABASE TILKOBLING 
	$connect = new mysqli("localhost", "root", "", "PLANET"); //MÅ RETTE OPP MED PARAMETERENE

	//CHECKS CONNECTION, AND GIVES ERROR IF NOT WORKING
	if(!$connect)
	{
		die("connection failed: " . $connect->error);
	}
	//else
	//{
	//	echo "Du er tilkoblet!!!!";
	//}
?>