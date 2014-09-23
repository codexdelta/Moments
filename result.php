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
	// echo $E;
	// echo "<br />";
	// echo $I;	
	// echo "<br />";
	// echo $N;
	// echo "<br />";
	// echo $S;
	// echo "<br />";
	// echo $F;
	// echo "<br />";
	// echo $T;
	// echo "<br />";
	// echo $J;
	// echo "<br />";
	// echo $P;
	// echo "<br />";

	if ($E>=$I && $N>=$S && $F>=$T && $J>=$P) {
		header('Location: http://30.0.0.79/Moments/new/enfj.html');
	}
	elseif ($E>=$I && $N>=$S && $T>$F && $J>=$P) {
		header('Location: http://30.0.0.79/Moments/new/entj.html');
	}
	elseif ($E>=$I && $N>=$S && $F>=$T && $P>$J) {
		header('Location: http://30.0.0.79/Moments/new/enfp.html');
	}
	elseif ($E>=$I && $N>=$S && $T>$F && $P>$J) {
		header('Location: http://30.0.0.79/Moments/new/entp.html');
	}
	elseif ($E>=$I && $S>$N && $F>=$T && $J>=$P) {
		header('Location: http://30.0.0.79/Moments/new/esfj.html');

	}
	elseif ($E>=$I && $S>$N && $F>=$T && $P>$J) {
		header('Location: http://30.0.0.79/Moments/new/esfp.html');

	}
	elseif ($E>=$I && $S>$N && $T>$F && $J>=$P) {
		header('Location: http://30.0.0.79/Moments/new/estj.html');
	}
	elseif ($E>=$I && $S>$N && $T>$F && $P>$J) {
		header('Location: http://30.0.0.79/Moments/new/estp.html');
	}
	elseif ($I>$E && $N>=$S && $F>=$T && $J>=$P) {
		header('Location: http://30.0.0.79/Moments/new/infj.html');
	}
	elseif ($I>$E && $N>=$S && $F>=$T && $P>$J) {
		header('Location: http://30.0.0.79/Moments/new/infp.html');
	}
	elseif ($I>$E && $N>=$S && $T>$F && $J>=$P) {
		header('Location: http://30.0.0.79/Moments/new/intj.html');
	}
	elseif ($I>$E && $N>=$S && $T>$F && $P>$J) {
		header('Location: http://30.0.0.79/Moments/new/intp.html');
	}
	elseif ($I>$E && $N>=$S && $F>=$T && $J>=$P) {
		header('Location: http://30.0.0.79/Moments/new/infj.html');
	}
	elseif ($I>$E && $N>=$S && $F>=$T && $P>$J) {
		header('Location: http://30.0.0.79/Moments/new/infp.html');
	}
	elseif ($I>$E && $N>=$S && $T>$F && $J>=$P) {
		header('Location: http://30.0.0.79/Moments/new/intj.html');
	}
	elseif ($I>$E && $N>=$S && $T>$F && $P>$J) {
		header('Location: http://30.0.0.79/Moments/new/intp.html');
	}
	

?>
</body>
</html>
