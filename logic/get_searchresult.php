<?php

$searchString = trim($_POST['searchstring']);

$sql = "SELECT * FROM newsarticles 
		WHERE content 
		LIKE '%".$searchString."%'
		OR title
		LIKE '%".$searchString."%'";

//echo $sql;

$result = $mysqli->query($sql);
							
$itemList = array();

while ($item = $result->fetch_array())
{
	$itemList[] = $item;
}	
	
