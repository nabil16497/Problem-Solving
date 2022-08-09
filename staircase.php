<?php
$n=0;
echo'<form action="/staircase.php" method="get">
<label for="n">N:</label><br>
<input type="number" id="n" name="n" value='.$n.'><br>
<input type="submit" value="submit" name="submit">
</form>';
if(isset($_GET['submit'])) {
$n=$_GET['n'];
}
echo 'n= '.$n.'<br>';
for($i=1; $i<=$n; $i++) {
for($j=$n-1; $j>=$i; $j--)
{
echo '&nbsp;&nbsp;';
}
for($k=1; $k<=$i; $k++)
{
echo '#';
}
echo '<br>';
}
?>