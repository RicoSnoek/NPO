<?php

echo '<section id="top100_container">';

echo '<h2>Complete Tour Top <div id="num1">1</div><div id="num2">0</div><div id="num3">0</div></h2>';

echo '<ul>';

foreach ($songs_list as $songs) {

	$rankNum = $songs['rank'];

	if($rankNum <= $todaySongs) {

	 echo '<li id="songNum' . $songs['rank'] . '">';
		 echo '<p><span class="numbers">' . $songs['rank'] . '</span>?????</p>';
	 echo '</li>';

	} else {
		echo '<li id="songNum' . $songs['rank'] . '">';
			echo '<p><span class="numbers passed">' . $songs['rank'] . '</span><a href="?action=song_info&songRank=' . $songs['rank'] .'";"">'.$songs['name'].' '.$songs['song'].'</a></p>';
		echo '</li>';
	}
}


echo '</ul>';

echo '</section>';
