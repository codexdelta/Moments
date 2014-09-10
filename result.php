<?php
	for ($j=0; $j<70; ++$j){
	@$selected_radio[$j] = $_POST['test'.$j];
	echo $selected_radio[$j];
	if ($selected_radio[$j] != "A" && $selected_radio[$j] != "B")
	{
		$a = intval($j)+1;
		echo "you haven't asnwered for the question: ".$a;
	}
}
?>
