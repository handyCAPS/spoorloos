<?php 

// Formateren van de input van het formulier

	$naam = htmlspecialchars($_POST['naam']);
	$email = trim($_POST['email']);
	$telnum = htmlspecialchars($_POST['telnummer']);
	$subject = htmlspecialchars($_POST['onderwerp']);
	$bericht = htmlspecialchars($_POST['bericht']);
	$date = date('l  j F  Y');
	$tijd = date(' G:H');

	// De datum in het nederlands
	$dag = date('w');
	$dag_ned = array(
			 "zondag",
			 "maandag",
			 "dinsdag",
			 "woensdag",
			 "donderdag",
			 "vrijdag",
			 "zaterdag"
		);
	$maand = date('n');
	$maand_ned = array(
		'Januari',
		'Februari',
		'Maart',
		'April',
		'Mei',
		'Juni',
		'Juli',
		'Augustus',
		'September',
		'Oktober',
		'November',
		'December'
		);
	$datum = $dag_ned[$dag] . ' ' . date('j') . ' ' . $maand_ned[$maand - 1];
	// Het adres waar de mail vandaan komt
	$headers = 'From: ' . $email  . "\r\n";
	// Het adres waar de mail naartoe gestuurd word
	$to = 'info@timdoppenberg.nl';

	$message = $naam . ' stuurde op ' . $datum . ' om ' . $tijd . ' het volgende bericht: ' . "<br/>" . $bericht;



	// To send HTML mail, the Content-type header must be set
	$headers  .= 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	// Mail it
	mail($to, $subject, $message, $headers);

	// De gebruiker wordt teruggestuurd naar een bedankt pagina
	header('Location: http://sporenonderzoek.ictlab.info/bedankt');

?>