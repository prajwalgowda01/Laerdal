<?php

$array = array ("Jan", "Feb", "Mar", "Apr", "May");
$Value="Apr";
$Newarray= array_diff($array, array($Value));
//print_r(array_values($Newarray));
$Newarray= array_values($Newarray);
print_r($Newarray);

$arraylen= sizeof($array);
print_r("OldArray  NewArray");
echo  ("\n");
$space = "     ";
for($i=0;$i<$arraylen;$i++)
{
echo $array[$i];
echo $space;
if($i<$arraylen-1)
echo $Newarray[$i];
echo  ("\n");
}
?>

	