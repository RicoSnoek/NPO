<?php

$result = $mysqli->query("SELECT COUNT(id) AS 'row_count' FROM songs");

$result_arr = $result->fetch_assoc();

$total_items = $result_arr['row_count'];

$item = 1;

$total_pages = ceil($total_items / $item);

$page_cur = (isset($_GET['songRank'])) ? $_GET['songRank']: 1;

if (empty($page_cur)){$page_cur = 1;};

$first_item_on_page = ($page_cur -1) * $item;

$limit_text = "";

if(!is_null($first_item_on_page) && !is_null($item)) {
 $limit_text = " LIMIT ". $first_item_on_page .", " . $item;
}

$my_query = "SELECT * FROM songs WHERE rank = $page_cur";

$result = $mysqli->query($my_query);

$songs_info = get_result_array($result);

$todaySongs = (21 - $today) * (5 + 1) ;
