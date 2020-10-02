<html>
<Title> Vowel </Title>
<body>
<form action='q2_vowel.php' method='GET'>
    Enter a character : <input type='text'  name='character'><br>
    <input type='submit' value='Submit'>
</form>
<br>
<?php
@$character=$_GET['character'];
if($character){
switch($character)
{
case 'A' :
case 'E' :
case 'I' :
case 'O' :
case 'U' :
case 'a' :
case 'e' :
case 'i' :
case 'o' :
case 'u' :echo $character." is a vowel";
break;
default :echo $character." is a consonant"; 
break;
}
}
?>
</body>
</html>


