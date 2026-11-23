<html>
<body>
<h2>Factorail of a Number</h2>
<form method ="post">
Enter a number:
<input type="number"name="num"required>
<input type="submit" name="submit"value="find factorial">
</form>

<?php
if(isset($_POST['submit']))
{
$num=$_POST["num"];
$n=$num;
$f=1;
for($i=1;$i<=$n;$i++)
{
$f=$f*$i;
}
echo"factorial of $n is $f";
}
?>
</body>
</html>
