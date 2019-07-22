<?php
	$text1 = $_POST["currentDate"];
	$text2 = $_POST["name"];
	$text3 = $_POST["email"];

	if($text1 != "")
	{
	   echo("Message successfully sent!");
	   echo("Field 1:" . $text1);
	   echo("Field 2:" . $text2);
	   echo("Field 3:" . $text3);
	   $file = fopen("data.txt", "a");
	   fwrite($file, ' JUEGO COMPLETADO EN ');
	   fwrite($file, $text1);
	   fwrite($file, ' NOMBRE DEL JUGADOR: ');
	   fwrite($file, $text2);
	   fwrite($file, ' EMAIL JUGADOR: ');
	   fwrite($file, $text3);
	   fclose($file);
	} else
	{
	   	$file = fopen("data.txt", "r");
		echo fread($file, filesize("data.txt"));
		fclose($file);
	}
?>