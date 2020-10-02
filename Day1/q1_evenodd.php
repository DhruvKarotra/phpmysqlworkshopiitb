<html>
<Title> EvenOdd </Title>
<body>
<form action='q1_evenodd.php' method='GET'>
    Enter a number : <input type='integer' name='number'>
                     <input type='submit' value='Submit'>
</form>
<br>
<?php
@$number=$_GET["number"];
if($number){
if(($number%2) == 1)
echo "The number ".$number." is an odd number";
else
echo "The number ".$number." is an even number";
}
?>
</body>
</html>

