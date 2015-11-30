<?php

$limit_text = "";

if(!is_null($first_item_on_page) && !is_null($items_per_page)) {

 $limit_text = "LIMIT ". $first_item_on_page .", " . $items_per_page;

}

$my_query = "SELECT * FROM songs ORDER BY rank DESC " . $limit_text;

$result = $mysqli->query($my_query);

$songs_list = get_result_array($result);
