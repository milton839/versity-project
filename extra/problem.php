<?php
/*
// Problem 1
$number = 56;
echo "Your value is: $number<br>";


// Problem 2
$country = "Bangladesh!";
$country2 = strrev($country);
echo "Value that you provided looks like in reverse like this: $country2 <br>";


// Problem 3
$name = "Hello Bangladesh!";
echo str_replace("Bangladesh", "CIT", $name)."<br>";


// Problem 4
define("PI", 3.1416);
echo "Constant value of PI is ".PI."<br>";


// Problem 5
$num1 = 54;
$num2 = 38;

$num = $num1 + $num2;
echo "Addition of two values: ($num)"."<br>";

$num = $num1 * $num2;
echo "Multiplication of two values: #$num#"."<br>";

$num = $num1 / $num2;
echo "Division of two values: $num <br>";

$num = $num1 - $num2;
echo "Subtraction of two values: $".$num."<br>";


// Problem 6
$reminder = 43 % 5;
echo "Remainder is $reminder <br>";


// Problem 7
$gender = "male";
echo ($gender == "male")? "You are a male":"You are a female";
echo "<br>";


// Problem 8
$number = 38;

if($number % 2 == 0){
    echo "$number is even <br>";
}else {
    echo "$number is odd";
}


// Problem 9
$number = 1;

while($number <= 10){
    echo $number."#";
    $number++;
}
echo "<br>";


// Problem 10
$vowel = "a";

switch($vowel){
    case ($vowel == "a" || $vowel == "e" || $vowel == "i" || $vowel == "o" || $vowel == "u"):
        echo "Your input is a vowel";
        break;
    default:
    echo "Your input is a consonant";
}

echo "<br>";


// Problem 11
for($i = 1; $i <= 10; $i++){
    if($i % 2 == 0){
        echo $i."@";
    }
}
echo "<br>";


// Problem 12
for($i = 1; $i <= 10; $i++){
    if($i % 2 == 1){
        echo $i."<br>";
    }
}
echo "<br>";




$number = [
    "a" => 12,
    "b" => 30,
    "c" => "d",
    "d" => "e",
    "e" => 45,
    "f" => 50,
];

foreach ($number as $key => $value){
    var_dump($value);

}
echo "<br>";


for($i = 1; $i <= 20; $i++){
    for($j =1; $j <= $i; $j++){
        echo "*";
    }
    echo "<br>";
}
*/

// Fibonacci Number

// 0 1 1 2 3 5 8 13

$n1 = 0;  
$n2 = 1;
echo "<h1>Fibonacci Number</h1>";
echo $n1.", ". $n2.", ";

for($number = 0; $number <= 10; $number++){
    $n3 = $n1 + $n2;
    echo $n3.", ";
    $n1 = $n2;
    $n2 = $n3;
}
echo "<br>";

// Prime Number

echo "<h1>Prime Number</h1>";

for($n = 1; $n <= 10; $n++){
    $counter = 0;
    for($n2 = 2; $n2 <= $n; $n2++){
        if($n % $n2 == 0){
            $counter++;
        }
    }
    if($counter == 1){
        echo $n." Prime number <br>";
    }
}
echo "<br>";

// Factorial Number

echo "<h2>Factorial Number</h2>";

$n = 6;
$fact = 1;

for($i = 1; $i <= $n; $i++){
    $fact = $fact * $i;
}
echo $fact;

echo "<br>";

// Sum of digit

echo "<h2>Sum of digit</h2>";

$num = 999999999999999;
$sum = 0;
$temp = $num;

while($temp != 0){
    $r = $temp % 10;
    $sum += $r;
    $temp = $temp / 10;
}
echo $sum."<br>";

// Armstrong Number

echo "<h2>Armstrong Number</h2>";

$num = 153;
$sum = 0;
$temp = $num;

while($temp != 0){
    $r = $temp % 10;
    $sum += $r*$r*$r;
    $temp = $temp / 10;
}
if($num == $sum){
    echo "$num Armstrong Number";
}else{
    echo "$num Not Armstrong Number";
}


// Reverse a Integer


echo "<h2>Reverse a Integer</h2>";

$num = 421;
$sum = 0;
$temp = $num;

while($temp > 1){
    $r = $temp % 10;
    $sum = ($sum * 10) + $r;
    $temp = $temp / 10;
}
echo $sum."<br>";


// Reverse a String


$name = "Md Bayazid Hasan";
$length = strlen($name);

for($i = ($length -1); $i >= 0; $i--){
    echo $name[$i];
}
echo "<br><br>";






?>