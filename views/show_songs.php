<?php

$today = date('j');

if(!isset($_GET['page'])) {
	if($today > $total_pages) {
		header("Location:index.php?page=24");
	} else {
		header("Location:index.php?page=" . $today . "");
	}
} else {

	echo '<section id="song_container">';

	echo '<h2>Vandaag in de Radio 1 Tour Top 100</h2>';

	foreach ($songs_list as $songs) {

		$aantalComments = $mysqli->query("SELECT COUNT(id) AS 'row_count' FROM songscomment WHERE top100_id =" . $songs['rank'] . "");

		 echo '<article>';
			 echo '<a href="?action=song_info&songRank=' . $songs['rank'] .'";""><img class="song_image" src="http://img.youtube.com/vi/' . basename($songs['songPath']). '/1.jpg"><img class="play" src="./Images/play2.png"></a>';
			 echo '<div class="number">' . $songs['rank'] . '</div>';
			 echo '<h1>'.$songs['name'].' '.$songs['song'].'</h1>';
			 echo '<content id="text">'.$songs['text'].'</content><br>';
			 echo '<p class="leesMeer"><a href="javascript:void(0)"><img class="comment_image" src="./Images/comment.png"></a>';
				while ($aSongs = $aantalComments->fetch_assoc()){
				echo '<div class="commentNum">';
				echo '[' . $aSongs['row_count'] . ']';
				}
				echo ' | ';
				echo '<a href="?action=song_info&songRank=' . $songs['rank'] .'";"">Lees meer -></a></p>';
				echo '</div>';
			 echo '<div class="songImages"><img src="./Images/facebookicon.png"><img src="./Images/twittericon.png"><img src="./Images/mailicon.png"></div>';
		 echo '</article>';

	}

	echo '</section>';

}
