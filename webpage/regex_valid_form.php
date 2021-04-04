<?php
	$text1="";
	$text2="";
	$email="";
	$phone="";
	$found="Not entered yet";

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$text1=$_POST["text1"];
	$text2=$_POST["text2"];
	if(preg_match("/[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}/", $text1)){
		$email = "In your text an email was detected";
	}
	if(preg_match("/\+998-[0-9]{2}-[0-9]{3}-[0-9]{4}/", $text1)){
		$phone = "In your text a phone number was detected";
	}
	if(preg_match("/".$text2."/", $text1)){
		$found="Ur string is found inside of the text you entered";
	}
	else{
		$found="Ur string wasn't found inside of the text you entered";
	}
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Valid Form</title>
</head>
<body>
	<form action="regex_valid_form.php" method="post">
		<dl>
			<dt>Ur Text</dt>
			<dd><input type="text" name="text1" value="<?= $text1 ?>"></dd>

			<dt>String to search</dt>
			<dd><input type="text" name="text2" value="<?= $text2 ?>"></dd>

			<dd><?=	$found ?></dd>

			<dd><?= $email ?></dd>

			<dd><?= $phone ?></dd>

			<dt>&nbsp;</dt>
			<dd><input type="submit" value="Check"></dd>
		</dl>

	</form>
</body>
</html>
