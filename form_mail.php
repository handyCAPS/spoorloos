<?php 
	$naam = $_REQUEST['naam'];
	$email = $_REQUEST['email'];
	$telnummer = $_REQUEST['telnummer'];
	if (!isset($telnummer) || strlen($telnummer) < 10) {
			$telnummer = 'Geen (geldig) telefoon nummer opgegeven.';
		};
	$onderwerp = $_REQUEST['onderwerp'];
	$bericht = $_REQUEST['bericht'];
	$tijd = strftime('%T');
	$datum = strftime('%d/%m/%y');
	$message = $naam . ' stuurde op ' . $datum . ' om ' . $tijd . ' het volgende bericht: ' .  "\n" . $bericht .  "\n" . 'email: ' . $email .  "\n" . 'telefoon nummer: ' . $telnummer ;

	mail('timd@ictlab.info', 'Spoor 11 Contact Formulier', $message, 'From:'. $email );

	header ('Location: http://spoorloos.ictlab.info/bedankt');
?>