<?php
$matrix1=array('1'=>array('1'=>1,'2'=>2),'2'=>array('1'=>3,'2'=>4));
echo "First matrix is :<br>";
for($i=1;$i<=2;$i++)
{
   for($j=1;$j<=2;$j++)
   {
      echo $matrix1[$i][$j]."\t";
   }
   echo "<br>";
}  
$matrix2=array('1'=>array('1'=>2,'2'=>3),'2'=>array('1'=>4,'2'=>5));
echo "Second matrix is :<br>";
for($i=1;$i<=2;$i++)
{
   for($j=1;$j<=2;$j++)
   {
      echo $matrix2[$i][$j]."\t";
   }
   echo "<br>";
}  
for($i=1;$i<=2;$i++)
{
   for($j=1;$j<=2;$j++)
   {
      $addmatrix[$i][$j]=($matrix1[$i][$j]+$matrix2[$i][$j])."\t";
   }
}
echo "Addition of these matrices is :<br>";
for($i=1;$i<=2;$i++)
{
   for($j=1;$j<=2;$j++)
   {
      echo $addmatrix[$i][$j]."\t";
   }
   echo "<br>";
}  
?>

