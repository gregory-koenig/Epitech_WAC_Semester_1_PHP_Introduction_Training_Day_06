<?php
function my_sort_int_tab(&$tab) {
	$size = count($tab);
	for ($i=0; $i < $size; $i++) {
		for ($j = 0; $j < $size; $j++) {
			if ($tab[$i] < $tab[$j]) {
				$temp = $tab[$i];
				$tab[$i] = $tab[$j];
				$tab[$j] = $temp;
			}
		}
	}
}
?>
