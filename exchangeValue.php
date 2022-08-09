<?php

$a=0;
$b=0;
echo'<form action="/exchangeValue.php" method="get">
<label for="a">a= </label><br>
<input type="number" id="a" name="a"><br>
<label for="b">b= </label><br>
<input type="number" id="b" name="b"><br>
<input type="submit" value="submit" name="submit">
</form>';
if(isset($_GET['submit'])) {
    $a=$_GET['a'];
    $b=$_GET['b'];
}

echo 'a= '.$a.'<br>';
echo 'b= '.$b.'<br>';
$a=  $a+$b;
$b= $a-$b;
$a= $a-$b;
echo 'After Exchange <br>';
echo 'a= '.$a.'<br>';
echo 'b= '.$b.'<br>';