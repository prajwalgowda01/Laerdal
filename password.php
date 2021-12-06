<?php

function get_password($str, $len = 0) {
	

	$pass = "";
	
	$str_length = strlen($str);

	if($len == 0 || $len > $str_length){
		$len = $str_length;
	}

	for($i = 0; $i < $len; $i++){
		
	$pass .= $str[rand(0, $len)];
	}
	return $pass;
}

$str = readline( 'Enter string:');
$PLen= (int) readline('Enter Password Lenth: ');
echo get_password($str,$PLen);
"\n<br/>";

?>

