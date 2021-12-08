<?php
$input = "welcome to the LIVE coverage of Day 4 of the ongoing Test between India and New Zealand at the Wankhede Stadium";
if (isset($input)) {
    // each word is now an element in the array
    $arr = explode(' ', trim($input));
}
echo "Input: ";
echo $input;
echo "<br>" ; 
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

echo "<br>" ;

//echo implode(" ",$arr);
$output= implode(" ",$arr);
echo $output;
echo "<br>" ;
echo "<br>" ;
print "Index of 5th O is ";
$char1='o';

//$pos = strpos($input, $char);
//echo $pos;


$letter = str_split($output);
 $p=0;
 $k=0;
foreach ($letter as $char) {
  ++$k;  
    If($char==$char1)
{
++$p;
if ($p==5)
	echo $k;

}
}
echo "<br>" ;
echo "<br>" ;
$str = str_replace('ng', 'nng', $output);
echo $str;
echo "<br>" ;
echo "<br>" ;
echo strtoupper("$str");


?>
