<?php
$connect = new mysqli('localhost','root','','result');
if($connect->connect_error){
die("Connection Failed : ".$connect->connect_error);
}

$sql = "UPDATE class1 SET sub5=99 WHERE name='Rohan'";
if(mysqli_query($connect,$sql)){
echo "<br>Subject 5 Update successfull<br>";
}
else{
echo "<br>Subject 5 Update unsuccesfull<br>";
}
$sql2 = "SELECT sub1,sub2,sub3,sub4,sub5,`total marks` FROM class1 where name='Rohan';";
$ext = mysqli_query($connect,$sql2);
while($row = mysqli_fetch_assoc($ext))
{
   $s1 = $row['sub1'];
   $s2 = $row['sub2'];
   $s3 = $row['sub3'];
   $s4 = $row['sub4'];
   $s5 = $row['sub5'];
   $total_marks = $row['total marks'];
}
$total_obtained=$s1+$s2+$s3+$s4+$s5;
$percent=($total_obtained/$total_marks)*100;

$sql_new1 = "UPDATE class1 SET `total obtained`=$total_obtained WHERE name='Rohan';";
if(mysqli_query($connect,$sql_new1)){
echo "<br>Total obtained Update successfull<br>";
}
else{
echo "<br>Total obtained Update unsuccessfull<br>";
}
$sql_new2 = "UPDATE class1 SET percent=$percent WHERE name='Rohan';";
if(mysqli_query($connect,$sql_new2)){
echo "<br>Percentage Update successfull<br>";
}
else{
echo "<br>Percentage Update unsuccesfull<br>";
}
?>