<?php
// Fibonacci Series
// using Recursion
 
// function returns
// the Fibonacci number
function fib($n)
{
    if ($n <= 1)
        return $n;
    return fib($n - 1) +
           fib($n - 2);
}
 
// Driver Code

$count=(int)readline('Enter count:');

//$count=9;
$fib=array();
//for($n=$count;$n>=0;$n--)
for($n=0;$n<$count;$n++)
{
$fib[]= fib($n);
}
//array_reverse($fib);
print_r($fib);

 

?>
