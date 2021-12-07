<?php
$input = "welcome to the LIVE coverage of Day 4 of the ongoing Test between India and New Zealand at the Wankhede Stadium";
if (isset($input)) {
    // each word is now an element in the array
    $arr = explode(' ', trim($input));
}
echo $input;
echo ("\n"); 
//print_r($arr);
$len= sizeof($arr);
$old= 'the';
$new='the new';
$j=0;
//echo $len;
for($i=0; $i<$len;$i++)
{
	//echo $arr[$i]; 
	if ($arr[$i]==$old)
	{
		//echo $j; 
		$j++; 
		if ($j==2||$j==3)
		{

	 		//echo $i; 
	 	
	 		//echo $arr[$i]; 
	 		
            $arr[$i]= $new; 
           
            
		}
	}
}


echo implode(" ",$arr);
echo ("\n"); 
?>