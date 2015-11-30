<?php

function get_result_array(&$result) {
	$result_list = array();
	while ($item = $result->fetch_assoc()) {
		$result_list[] = $item;
	}

	return $result_list;

}

?>