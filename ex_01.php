<?php
function my_generate_file($name) {
	fopen("$name.txt", "x+");
	if (file_exists("$name.txt")) {
		return true;
	} else {
		return false;
	}
}
?>
