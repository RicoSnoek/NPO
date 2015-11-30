<?php

$theQuery = "SELECT * FROM songs ORDER BY rank";

$result = $mysqli->query($theQuery);

$songs_list = get_result_array($result);

$today = (date("j"));

$todaySongs = (21 - $today) *5;
