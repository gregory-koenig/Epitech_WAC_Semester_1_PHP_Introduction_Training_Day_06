<?php
function my_comb_n($n) {
	$tab = array();
	for ($i = 1; $i <= $n; $i++) {
		$tab[$i] = $i;
	}
	while ($tab[1] + $n <= 10) {
		for (; $tab[$n] < 10; $tab[$n]++)
		{
			foreach ($tab as $value) {
				echo $value;
			}
			echo "\n";
		}
		for ($i = $n; $i > 1; $i--) {
			if ($tab[$i] >= 10 - ($n - $i)) {
				$tab[$i - 1]++;
				for ($j = $i; $j <= $n; $j++) {
					$tab[$j] = $tab[$j - 1] + 1;
				}
			}
		}
	}
}
?>
