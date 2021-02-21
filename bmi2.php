<!-- Reads height and weight from HTML form and calculates BMI. --> 
<!DOCTYPE HTML PUBLIC> 
<html> 
<head> 
<title>BMI CALCULATORR</title> 
</head> 
<body> 

<?php
//Define variables and give initial values. 
$height=0; 
$width=0; 

//Read values to variables from HTML-form. 
$height=$_POST['height']; 
$weight=$_POST['weight']; 

//Calculate BMI.  
$bmi=$weight / ($height * $height); 
//round ( float $bmi , int $precision = 2 , int $mode = PHP_ROUND_HALF_UP ) : float
//round($bmi,2,PHP_ROUND_HALF_UP);

//Print result. 
//print("Body mass index is $bmi") . "<br>";
print("Body mass index is: ");
echo(round($bmi,2,PHP_ROUND_HALF_UP) . "<br>");
?> 

</body> 
</html>