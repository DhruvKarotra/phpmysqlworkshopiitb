<html>
<Title> STUDENT MARKSHEET FORM </Title>
<body>
<form action='q1_MYSQL.php' method='POST'>
Name of the Student : <input type='text' name='StudentName'><br>
Marks in Each Subject<br>
Subject 1 : <input type='integer' name='s1'><br>
Subject 2 : <input type='integer' name='s2'><br>
Subject 3 : <input type='integer' name='s3'><br>
Subject 4 : <input type='integer' name='s4'><br>
Subject 5 : <input type='integer' name='s5'><br>
<input type='submit' name='submit' value='Submit'>
</form>
</body>
</html> 
<?php
$connect = new mysqli('localhost','root','','result');
if($connect->connect_error){
   die("Connection Failed : ".$connect->connect_error);
}
if(isset($_POST['submit']))
{
   @$s_name = $_POST['StudentName'];
   @$s1 = $_POST['s1'];
   @$s2 = $_POST['s2'];
   @$s3 = $_POST['s3'];
   @$s4 = $_POST['s4'];
   @$s5 = $_POST['s5'];
   $total_obtained = $s1+$s2+$s3+$s4+$s5;
   $total_marks = 500;
   $Percentage = ($total_obtained/$total_marks)*100;

   $sql = "INSERT INTO class1 (name,sub1,sub2,sub3,sub4,sub5,`total obtained`,`total marks`,percent) VALUES ('$s_name',$s1,$s2,$s3,$s4,$s5,$total_obtained,$total_marks,$Percentage);";

   if(mysqli_query($connect,$sql))
   {
      echo "<br> INSERTED";
   }
   else
   {
      echo "<br> NOT INSERTED";
   }
}
?>