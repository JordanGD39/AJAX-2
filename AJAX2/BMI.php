<?php
	$kg = $_GET['kg'];
	$cm = $_GET['cm'];
//	$bmi = $_GET['bmi'];
//	$message = $_GET['message'];

BMI($kg, $cm);

	function BMI($kg,$cm){
		$meter = $cm / 100; //convert cm =>m
		$bmi = $kg / ($meter * $meter);
		$bmi = round($bmi, 1);
		if ($bmi < 18.5) {
	    $message = "You're lightweight";
	  } else if ($bmi > 18.5 && $bmi < 24.9) {
	    $message = "You have a healthy weight";
	  } else if ($bmi > 25 && $bmi < 29.9) {
	    $message = "You're overweight";
	  } else if ($bmi > 30 && $bmi < 39.9) {
	    $message = "You're obese";
	  } else if ($bmi > 40) {
	    $message = "You're morbidly obese";
	  }
		echo "<h2>BMI response</h2><h3> ";
		echo "You submitted the following information<br><ul>";
		echo "<li>Weight in KG: <strong> $kg</strong></li>";
		echo "<li>Length in CM: <strong> $cm</strong></li>";
		echo "<li>BMI: <strong> $bmi</strong></li>";
		echo "<br>";
		echo $message;
		echo "</li></ul></h3>";
	}

?>
