<?php

$startday = 2;

$today = date('j');

$total_pages = 23;

echo '<ul class="calender">';
echo '<li class="month">JULI</li>';

for ($i = $startday; $i < ($total_pages + $startday); $i++) {
	if ($page_cur == $i) {
		echo '<li class="today"><class="page_item">' . $i . '</div></li>';
	} elseif ($i < $today) {
		echo '<li class="daypast"><a href="index.php?page=' . $i . '">' . $i . '</a></li>';
	} elseif ($today >= $i) {
		echo '<li class="daypast"><a href="index.php?page=' . $i . '">' . $i . '</a></li>';
	} else {
		echo '<li class="day">' . $i . '</li>';
	}
}

echo '</ul>'

?>