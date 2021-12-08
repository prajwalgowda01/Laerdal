<?php

$array = array ("Jan", "Feb", "Mar", "Apr", "May");
$Value="Apr";
$Newarray= array_diff($array, array($Value));
//print_r(array_values($Newarray));
$Newarray= array_values($Newarray);  
print_r($Newarray);


$size = count($array);

$output = "<table>";
$output .= "<tr><td>Sl.No</td><td>Name</td><td>Username</td></tr>";

for($i=0; $i<$size; $i++) {
    $output .= "<tr>";
    $output .= "<td>".($i+1)."</td>";
    $output .= "<td>".$array[$i]."</td>";
    $output .= "<td>".$Newarray[$i]."</td>";
    $output .= "</tr>";
}

$output .= "</table>";

echo $output;
?>

