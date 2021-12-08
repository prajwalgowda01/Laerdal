<?php
extract($_REQUEST);
//$fib=array();
for($n=0;$n<$count;$n++)
{
$fib[]= fib($n);
}
print_r($fib);
function fib($n)
{
    if ($n <= 1)
        return $n;
    return fib($n - 1) +
           fib($n - 2);
}

?>

<html>
<body>
<div class="container">
<form action="fib1.php" method="post">
    Count: <input type="number" name="count" /><br />
    <input type="submit" name="submit" value="Submit me!" />
</form>
</div>
</body>
</html>
