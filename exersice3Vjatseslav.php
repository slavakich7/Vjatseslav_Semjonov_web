<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise2, Vjatšeslav Semjonov</title>
</head>
<body>

<h1>Exercise 3</h1>
<h2>Task 1</h2>
<?php
$d = date("F");
if ($d == "August"){
    echo "It's August, so it's still holiday. <br>";
}
else {
    echo "Not August, This is $d so i don't have any holidays <br>";
}
?>
<h2>Task 2</h2>
<?php
$color = "red";
if ($color == "red"){
    echo "The color is red.  <br>";
}
else {
    echo "The color is not red. <br>";
}
#nothing changed
?>
<h2>Task 3</h2>
<?php
$x = 75;
switch ($x) {
    case $x>80:
        echo "Excellent";
        echo "<br>";
        break;
    case $x>70 && $x<80:
        echo "Great";
        echo "<br>";
        break;
    case $x>60 && $x<70:
        echo "Good";
        echo "<br>";
        break;
    case $x>50 && $x<60:
        echo "Pass";
        echo "<br>";
        break;
    case $x<50:
            echo "Fail";
            echo "<br>";
            break;
}
?>
<h2>Task 4</h2>
<form action="exersice3Vjatseslav.php" method="get">
    Age: <input type="number" name="age">
    <input type="submit">
</form>
<?php
$_GET["age"];

if ($_GET["age"] >= 18){
    echo "You are eligible for voting.  <br>";
}
if ($_GET["age"] < 18){
    echo "You aren't eligible for voting. <br>";
}
?>
<h2>Task 5</h2>
<?php
$n=8;
for($i=$n; $i>=1; $i--)
{
for($j=1; $j<=$i; $j++)
{
echo "$j";
}
 echo "</br>";
}
?>
<h2>Task 6</h2>
<?php
for($x=1;$x<=8;$x++)
{
   for ($y=1;$y<=$x;$y++)
    {
	 echo "*";
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "</br>";
}
?>
<h2>Task 7</h2>
<a href="https://slavakich7.github.io/project/">Website page</a>
<a href="https://github.com/slavakich7/project">Repository link</a>	
</body>
</html>