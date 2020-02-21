<?php
function my_cat_files(...$path) {
	$args = func_get_args();
	$cat = "";
	foreach ($args as $value) {
		$cat = $cat . file_get_contents($value) . "_____";
	}
	return rtrim($cat, "_");
}
?>
