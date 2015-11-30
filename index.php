<?php

// Gebruikersnaam, wachtwoord van de database etc ophalen
include('includes/config.inc.php');

// Voer instellingen uit en stel template parser in
include('includes/bootstrap.inc.php');

// Maak de database connectie
include('includes/database.inc.php');

include('includes/functions.inc.php');

// Zorgt ervoor als de mensen in de url naar het volgende liedje typen
// geredirect worden naar de index
include('logic/redirect.php');

// De pagination voor de liedjes
include('logic/pagination.php');

// De achtergrond van de pagina
include('views/page.php');

// De navigatie van de pagination
include('logic/calender.php');

switch ($action) {

	case 'top100':
		include('logic/select_top100.php');
		include('views/top100.php');
		break;

	case 'song_info':
  		include('logic/select_songs_info.php');
  		include('views/show_song_info.php');
			include('logic/upload_comment.php');
  		break;

	default:
		include('logic/select_songs.php');
		include('views/show_songs.php');
	}

include('views/footer.php');
