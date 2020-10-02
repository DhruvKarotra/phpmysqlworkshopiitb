<html>
<Title> PHP OPERATORS </Title>
<body>
<form action='q1_Operators.php' method='GET'>
    Enter first number : <input type="integer"  name='num1'><br><br>
    Enter second number : <input type="integer"  name='num2'><br><br>
    <input type='submit' value='Submit'>
</form>
<br>
<?php
@$num1=$_GET["num1"];
@$num2=$_GET["num2"];
if($num1 && $num2){
echo "Addition of ".$num1." and ".$num2." is ".($num1+$num2)."<br>";
echo "Subtraction of ".$num1." and ".$num2." is ".($num1-$num2)."<br>";
echo "Multiplication of ".$num1." and ".$num2." is ".($num1*$num2)."<br>";
echo "Division of ".$num1." and ".$num2." is ".($num1/$num2)."<br>";
}
?>
</body>
</html>
