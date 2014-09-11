<?php
	$E=0;
	$I=0;
	$S=0;
	$N=0;
	$T=0;
	$F=0;
	$J=0;
	$P=0;
	for ($j=0; $j<70; ++$j){
	@$selected_radio[$j] = $_POST['test'.$j];
	// echo $selected_radio[$j];
	$a=intval($j)+1;
	$mod=intval($a) % 7;
	if ($mod == 1 && $selected_radio[$j]=="A"){
		$E++;
		}
	elseif ($mod == 1 && $selected_radio[$j] == "B") {
		$I++;
	}
	elseif ($mod == 2 && $selected_radio[$j] == "A") {
		$S++;
	}
	elseif ($mod == 2 && $selected_radio[$j] == "B") {
		$N++;
	}
	elseif ($mod == 3 && $selected_radio[$j] == "A") {
		$S++;
	}
	elseif ($mod == 3 && $selected_radio[$j] == "B") {
		$N++;
	}
	elseif ($mod == 4 && $selected_radio[$j] == "A") {
		$T++;
	}
	elseif ($mod == 4 && $selected_radio[$j] == "B") {
		$F++;
	}
	elseif ($mod == 5 && $selected_radio[$j] == "A") {
		$T++;
	}
	elseif ($mod == 5 && $selected_radio[$j] == "B") {
		$F++;
	}
	elseif ($mod == 6 && $selected_radio[$j] == "A") {
		$J++;
	}
	elseif ($mod == 6 && $selected_radio[$j] == "B") {
		$P++;
	}
	elseif ($mod == 7 && $selected_radio[$j] == "A") {
		$J++;
	}
	elseif ($mod == 7 && $selected_radio[$j] == "B") {
		$P++;
	};
};
?>
<!DOCTYPE html>
<html>
<head>
	<title>Test Result</title>
</head>
<body>
<p>just to test the site</p>
<?php
	
	if ($E>$I && $N>$S && $F>$T && $J>$P) {
		
	}
	elseif ($E>$I && $N>$S && $T>$F && $J>$P) {
		# code...2
	}
	elseif ($E>$I && $N>$S && $F>$T && $P>$J) {
		# code...3
	}
	elseif ($E>$I && $N>$S && $T>$F && $P>$J) {
		# code...4
	}
	elseif ($E>$I && $S>$N && $F>$T && $J>$P) {
		# code...5
	}
	elseif ($E>$I && $S>$N && $F>$T && $P>$J) {
		# code...6
	}
	elseif ($E>$I && $S>$N && $T>$F && $J>$P) {
		# code...
	}
	elseif ($E>$I && $S>$N && $T>$F && $P>$J) {
		# code...
	}
	elseif ($I>$E && $N>$S && $F>$T && $J>$P) {
		# code...
	}
	elseif ($I>$E && $N>$S && $F>$T && $P>$J) {
		# code...
	}
	elseif ($I>$E && $N>$S && $T>$F && $J>$P) {
		# code...
	}
	elseif ($I>$E && $N>$S && $T>$F && $P>$J) {
		# code...
	}
	elseif ($I>$E && $N>$S && $F>$T && $J>$P) {
		# code...
	}
	elseif ($I>$E && $N>$S && $F>$T && $P>$J) {
		# code...
	}
	elseif ($I>$E && $N>$S && $T>$F && $J>$P) {
		# code...
	}
	elseif ($I>$E && $N>$S && $T>$F && $P>$J) {
		# code...
	}

?>
</body>
</html>
