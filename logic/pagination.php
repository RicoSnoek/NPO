<?php

$result = $mysqli->query("SELECT COUNT(id) AS 'row_count' FROM songs");
$result_arr = $result->fetch_assoc();

$total_items = $result_arr['row_count'];

$items_per_page = 5;

$page_cur = (isset($_GET['page'])) ? $_GET['page']:2;

$first_item_on_page = ($page_cur -2) * $items_per_page;

?>