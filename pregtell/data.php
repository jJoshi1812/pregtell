<?php
		$name = '';
	if(isset($_POST['submit'])) {
		echo "done";
		$name = $_POST['name'];
		$GLOBALS['name'] = $_POST['name'];
		$age= $_POST['age'];
		$blood_group = $_POST['blood_group'];
		$weight = $_POST['weight'];
		$height = $_POST['height'];
		$check_up_number = $_POST['check_upno'];
		$mahilla_code = $_POST['mahila_code'];

		$bmi = $_POST['bmi'];
		$vomate_no = $_POST['vomate_no'];
		$stomach =  $_POST['stomach_height'];
		$urine =  $_POST['urine_albumin'];
		$dib = $_POST['dib_yes'];
		$body_pain_no = $_POST['body_pain_no'];
		$body_pain_yes = $_POST['body_pain_yes'];
		$vomate_yes = $_POST['vomate_yes'];
		$fever_no = $_POST['fever_no'];
		$fever_yes = $_POST['fever_yes'];
		$tab_folic_acid = $_POST['tab_folic_acid_no'];
		$tt1 = $_POST['tt1_no'];

		$data = array($bmi, $tab_folic_acid, $stomach, $tt1, $urine, $dib, $body_pain_no, $body_pain_yes, $vomate_no, $vomate_yes, $fever_no, $fever_yes);

		$fp = fopen('data.csv', 'w');
			echo "opened";
			fputcsv($fp, $data);
		fclose($fp);

		header("Location:pregtell.php?name={$_POST['name']}");
		// echo $output;

	}	

	
	$command = escapeshellcmd('python woman.py');
	$output = shell_exec($command);
?>