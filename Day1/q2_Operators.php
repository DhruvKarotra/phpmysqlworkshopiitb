<html>
<Title> GREATER NUMBER </Title>
<body>
<form action='q2_Operators.php' method='GET'>
    Enter first number : <input type='integer' name='num1'><br><br>
    Enter second number : <input type='integer' name='num2'><br><br>
    <input type='submit' value='Submit'>
</form>
<br>
<?php
@$num1=$_GET["num1"];
@$num2=$_GET["num2"];
if($num1 && $num2){
if($num1 == $num2)
echo "Both the numbers are equal";
elseif($num1 > $num2)
echo $num1." is greater than ".$num2;
else
echo $num2." is greater than ".$num1;
}
?>
</body>
</html>

