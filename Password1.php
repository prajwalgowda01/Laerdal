
<?php
extract($_REQUEST);
$pass = "";
	
	$str_length = strlen($string);

	if($length == 0 || $length > $str_length){
		$length = $str_length;
	}

	for($i = 0; $i < $length; $i++){
		
	$pass .= $string[rand(0, $length)];
	 
	}
	echo $pass;


?>
<html>
<body>
<div class="container">
<form action="Password1.php" method="post">
    String:  <input type="text" name="string" /><br />
    Length: <input type="number" name="length" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form>
</div>
</body>
</html>
