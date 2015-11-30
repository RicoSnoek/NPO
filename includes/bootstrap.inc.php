<?php

// Dit is de bootstrap. Hier worden zaken vooraf uitgevoerd om de site intialiseren.
error_reporting(0);

$action = $_GET['action']; 
 
// Wijzig istellingen voor live- en testomgeving
switch (PROJECT_STATUS) {
	case 'production': {
		ini_set('display_errors','Off');
		// en meer
	}
	default :
	{
		ini_set('display_errors','1');
		ini_set('error_reporting', E_ALL);
	}
}

?>