<?php

// PHP Output

// echo
// printf()
// print
// sprintf()
// var_dump()
// print_r

// Valid Variables

// * A variable starts with the $ sign, followed by the name of the variable
// * A variable name must start with a letter or the underscore character
// * A variable name cannot start with a number
// * A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
// * Variable names are case-sensitive

/*

$aa = "Hello World";
$bb = "Hello Bangladesh";
$cc = "Hello CIT";
$dd = "Hello Bayazid";

echo $aa." ".$bb." ".$cc."&nbsp;&nbsp;".$dd;

echo"<br>";
echo"<br>";

$nn  = 100;

echo $nn ."&nbsp;&nbsp;&nbsp;&nbsp;"."Hello world";

echo"<br>";

*/
/*

// Assignment-3

$n = 11;
$nn = 3;

$number = $n % $nn;
echo $number."<br>";

$n = $nn + 5;
echo $n."<br>";
echo $n+=5;
echo "<br>";

$number = (5 + 6) * 5 + 8;
echo $number;
echo "<br>";

$a = 12;
$b = 15;

echo $a++."<br>";
echo $a++."<br>";
echo $a++."<br>";
echo ++$a."<br>";
echo ++$a."<br>";
echo ++$a."<br>";
echo $a--."<br>";
echo $a--."<br>";
echo $a--."<br>";
echo --$a."<br>";
echo --$a."<br>";
echo --$a."<br>";

echo $a+=10;
echo "<br>";
echo $a+=10;
echo "<br>";
echo $a+=10;
echo "<br>";
echo $a-=10;
echo "<br>";
echo $a-=10;
echo "<br>";
echo $a-=10;
echo "<br>";

// printf Function

$fname = "Bayazid";
$lname = "Hasan";
$n = 12;
printf("<h1>My name is %s %s<br></h1>", strtoupper($fname), strrev($lname));
printf("<h1>The Number is %s<br></h1>", $n);

// programme Name: Data Swapping

$v1 = 32;
$v2 = 22;

$vtemp = $v1;
$v1 = $v2;
$v2 = $vtemp;
$v2 = "<br>";

echo $v1;
echo "<br>";
echo $v2;

define("PI", 3.1416); // Constant

echo PI;
echo "<br>";

// Array

$abc = [23, 20, 21, 30, 40];

print_r($abc);
echo "<br>";
echo $abc[1];

*/
echo "<h3>";

// Super Global variable

// $global
// $_COOKIE
// $_ENV
// $_FILES
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_SERVER

/*

echo "<h1>Indexed Array</h1>";

$number = [
    10 => 55,           
    5  => 10,
    20,
    10 => 3,                 //Indexed Array
    14 => 26,
    25,
    30,
    34,
    43,
];

print_r($number);
echo "<br>";

echo "<h1>Associative Array</h1>";

$char = [
    "a" => 10, 40, 50, 60,
    "b" => 11,
    "c" => 18,          
    "d" => 19,               // Associative Array
    "e" => 21,
    10 => 30,
    25,
    "f" => 27,
];

print_r($char["a"]);
echo "<br>";

echo "<h1>Multidimensional Array</h1>";

$name = [
    "bayazid" => [
        "hasan" => [
            "rafiq" => [
                "zobbar" => [
                    "salam" => [
                        "age" => [
                            10,
                            12,                        // Multidimensional Array
                            14,
                            23,
                            17,
                            19,
                            40,
                            90,
                        ]
                    ]
                ]
            ]
        ]
    ]
];

// print_r($name);
echo "<br>";


print_r($name["bayazid"]["hasan"]["rafiq"]["zobbar"]["salam"]["age"]);

echo "<br>";

echo "<h1>count and sizeof function</h1>";

echo count($char);    
echo "<br>";

echo sizeof($name);
echo "<br> <br>";

echo "This is \"Bayazid Hasan\" <br>";
echo 'This is "Bayazid Hasan" <br>';

echo "<br>";

echo "<h1>Condition</h1>";

$age = 12;

if($age == 12){
    echo "Age is Twelve";
} else if($age == 10) {
    echo "Age is Ten";
} else if($age == 11){
    echo "Age is eleven";
} else {
    echo "Something Wrong";
}
*/

/*

$age = 20;
$gender = "male";
$nationality = "Bangladeshi";


if($age == 10 && $gender == "male" && $nationality == "Bangladeshi"){
    echo "He is Bangladeshi baby &#128516;";
}else if($age == 10 && $gender == "female" && $nationality == "Bangladeshi"){
    echo "she is Bangladeshi baby &#128516";
}else if ($age == 20 && $gender == "male" && $nationality == "Bangladeshi"){
    echo "He is Bangladeshi young boy &#128516;";
}else if ($age == 20 && $gender == "female" && $nationality == "Bangladeshi"){
    echo "She is Bangladeshi Young girl &#128516;";
}elseif($age == 30 && $gender == "male" && $nationality == "Bangladeshi"){
    echo "He is Bangladeshi middle aged &#128516;";
}else if ($age == 30 && $gender == "female" && $nationality == "Bangladeshi"){
    echo "She is Bangladeshi middle aged &#128516;";
}else {
    echo "I don't know about him &#128516;";
}

echo "<br>";


$age = 12;

if($age >= 1 && $age <= 10){
    echo "You are child &#128525; <br>";
}else if ($age >= 11 && $age <= 20){
    echo "You are young &#128525; <br>";
}else if ($age >= 21 && $age <= 30){
    echo "You are adult &#128525; <br>";
}else if ($age <= 0){
    echo "This age is not possible &#128517; <br>";
}else {
    echo "You are senior citigen &#128525; <br>";
}

echo "<br>";


$age = 19;
$gender = "male";
$location = "United States";


if($age == 19) {
    if($gender == "male"){
        if($location == "Bangladesh"){
            echo "He is Nineteen Years old and he is a Bangladeshi";
        }else {
            echo "He is Nineteen years old but he is not Bangladeshi";
        }
    }else {
        echo "Age is correct but gender is incorrect";
    }
}else {
    echo "We don't know about him";
}


echo "<br>";
echo "<br>";


$number = 11;

if($number % 2 == 0){
    echo "This is even number &#128516;";
}else {
    echo "This is odd number &#128516;";
}

echo "<br>";

echo ($number % 2 == 0)? "This is even number &#128516;": "This is odd number &#128516;";

echo "<br>";


$name = "bAyaZid HaSAn";

echo ucwords(strtolower($name))."<br>";
echo strtoupper($name)."<br>";
echo htmlentities("<br>")."<br>";
echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo strlen($name)."<br>";
echo str_word_count($name)."<br>";


*/
/*

// String Function


// Palindrome Word
$mobile = "sms";
if($mobile == strrev($mobile)){
    echo "This is palindrome word <br><br>";
}else {
    echo "This is not palindrome word <br><br>";
}

//String to array
$name = "This is Bayazid Hasan";
print_r(explode(" ", $name));
echo "<br><br>";

//Char to array
$name = "Bayazid";
print_r(str_split($name));
echo "<br><br>";

//String replace
$name = "Bayazid Hasan";
echo str_replace("Hasan","Ahmed", $name);
echo "<br><br>";

//String repeat
// $name = " Bayazid Hasan";
// echo str_repeat($name, 5);
// echo "<br><br>";

//Data Encryption
$name = "Mohammad Bayazid Hasan";
echo md5($name);
echo "<br><br>";


// Prime Number
function primeNumber($n){

    for($i=1;$i<=$n;$i++){
  
            $counter = 0; 
            for($j=1;$j<=$i;$j++){ 

                  if($i % $j==0){ 
  
                        $counter++;
                  }
            } 

          if($counter==2){
  
                 print $i." is Prime <br/>";
          }
      }
  } 
  
  primeNumber(100);
  echo "<br>";


// Loop

// for loop
for($number = 1; $number <= 5; $number++){
    echo "I am a programmer &#128513;<br>";
}
echo "<br>";


for($number =1; $number <= 10; $number++){
    if($number % 2 == 0){
        echo "$number is even <br>";
    }else {
        echo "$number is odd <br>";
    }
}
echo "<br>";


//  While Loop

$number =1;
while($number <= 10){
    if($number % 2 == 0){
        echo "$number is even<br>";
    }else {
        echo "$number is odd<br>";
    }
    $number++;
}
echo "<br>";


// Array print with for loop

$number = [10, 20, 32, 31, 40, 39, 52, 50, 70, 60];
$fNumber = count($number);

for($i =0; $i < $fNumber; $i++){
    echo $number[$i]."<br>";
}
echo "<br>";


// Array print with while loop

$i = 0;
while($i < $fNumber){
    echo $number[$i]."<br>";
    $i++;
}


// string function

$name = "This is \ Bayazid \ Hasan";
$fName = "Bayazid Hasan";

echo $name = addcslashes("This is Bayazid Hasan", "B")."<br>";
echo $name = addcslashes("This is Bayazid Hasan", "a..z")."<br>";
echo $name = addcslashes("This is Bayazid Hasan", "A..Z")."<br>";
echo stripcslashes($name);
echo $name = addslashes("This is 'Bayazid' Hasan")."<br>";
echo $name2 = stripslashes($name);
echo bin2hex($fName)."<br>"; //String to Hexadecimal
echo chop($fName, "Hasan")."<br>"; //Remove String
echo chr(52)."<br>"; // Decimal value
echo chr(052)."<br>"; // Octal value
echo chr(0x52)."<br>"; // Hex value
echo chunk_split($fName,1, ".")."<br>";
echo convert_uuencode($fName)."<br>";
echo convert_uudecode(convert_uuencode($fName))."<br>";
echo count_chars($fName, 3)."<br>";
echo crc32($fName)."<br>";
print_r(get_html_translation_table()); // html special character is default.
echo "<br>";
echo hebrev("ba;;hasan")."<br>"; //Converts Hebrew text to visual text
// echo hex2bin("48656c6c6f20576f726c6421");//	Converts a string of hexadecimal values to ASCII characters
echo html_entity_decode($str = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;')."<br><br>";

$name = " Bayazid Hasan ";

if(trim($name) == "Bayazid Hasan"){
    echo "This is Okay <br>";
}else {
    echo "This is not Okay <br>";
}

trim($name); //remove white space

$name2 = ltrim($name); //remove white space form left
$name3 = rtrim($name2);//remove white space form right

if ($name3 == "Bayazid Hasan"){
    echo "This is Okay <br>";
}else {
    echo "This is not Okay <br>";
}
echo "<br>";

$number = "12, 13, 14, 54, 59, 42,";

$number2 = rtrim($number, ","); // remove coma from right side
echo $number2;
echo "<br>";

$name = "This is Bayazid Hasan";
print_r(explode(" ",$name)); //string to array
echo "<br><br>";

$color = ["green", "blue", "red", "navy"];

echo implode(", ", $color);//array to sting
echo "<br>";

$price = 13/3;

echo "Price: $". number_format($price, 2); //Number formate
echo"<br>";

$name = "Bayazid Hasan";
$fileName = "array.php";
echo md5_file($fileName)."<br>";
echo metaphone($name)."<br>";
echo nl2br("Bayazid \n Hasan")."<br>";


// Parses a query string into variables


// parse_str("name=Peter&age=43");
parse_str("name=bayazid&age=12&gender=male&thana=itna&occupation=freelancer");
echo $name."<br>";
echo $age."<br>";
echo $gender."<br>";
echo $thana."<br>";
echo $occupation."<br>";


// Prime Number

for($first = 1;$first <= 10;$first++){
    $count = 0;
    for($second = 2; $second <= $first; $second++){
        if($first % $second == 0){
            $count++;
        }
    }
    if($count == 1){
        echo "$first prime number <br>";
    }
}
echo "<br>";


$i = 1;
while($i <= 10){
    echo $i."<br>";
    $i++;
}
echo "<br>";

// Do while Loop

$a = 1;
do{
    echo "$a<br>";
    $a++;
}while ($a <=10);

*/



// for each loop


// $number = [
//     "a" => 12,
//     "b" => 10,
//     "c" => 15,
//     "d" => 20,
//     "e" => 25,
//     "f" => 30,
// ];


// foreach($number as $key => $value){
//     echo "This is key, ".$key." This is Value, ".$value."<br>";
// }


// foreach($number as $value){
//     echo "This is Value = $value <br>";
// }
// echo "<br>";
// foreach($number as $key => $value){
//     echo "This is Key = $key <br>";
// }
// echo "<br>";
// print_r(array_keys($number))."<br>";



// break

// for($i = 1; $i <= 10; $i++){
//     if($i == 6){
//     break;
//     }
//     echo $i."<br>";
// }

// continue

// for($i = 1; $i <= 10; $i++){
//     if($i == 5 || $i == 6 || $i == 7){
//         continue;
//     }
//     echo $i."<br>";
// }

// for($i = 1; $i <= 10; $i++){
//     if($i < 5){
//         continue;
//     }
//     echo $i."<br>";
// }


// $day= date("l");

// if($day == "Friday"){
//     echo "Today is Friday";
// }else if($day == "Saturday"){
//     echo "Today is Saturday";
// }else if($day == "Sunday"){
//     echo "Today is Sunday";
// }else if($day == "Monday"){
//     echo "Today is Monday";
// }else if($day == "Tuesday"){
//     echo "Today is Tuesday";
// }else if($day == "Wednesday"){
//     echo "Today is Wednesday";
// }else if($day == "Thursday"){
//     echo "Today is Thursday";
// }
// echo "<br><br>";

/*

// Multiplication Table 


for ($i=1; $i <= 10; $i++) { 
    $count = " ";
    for ($j=1; $j <= 10 ; $j++) { 
       echo $count = $i." x ".$j." = ";
       echo $count = ($i * $j)."<br>";
    }
}
echo "<br><br>";

// foreach loop

$number = [
    "a" => 12,
    "b" => 10,
     5  => 15,
    "d" => 20,
     10 => 25,
    "f" => 30,
];

foreach($number as $key => $value){
    echo "Key = ".$key.", ". " &nbsp;Value ".$value."<br>";
}
echo "<br>";

// switch Case

$day = date("l");

switch($day){
    case "Saturday": 
        echo "Today is Saturday";
    break;
    case "Sunday": 
        echo "Today is Sunday";
    break;
    case "Monday": 
        echo "Today is Monday";
    break;
    case "Tuesday": 
        echo "Today is Tuesday";
    break;
    case "Wednesday": 
        echo "Today is Wednesday";
    break;
    case "Thursday": 
        echo "Today is Thursday";
    break;
    case "Friday": 
        echo "Today is Friday";
    break;
}
echo "<br>";

$number = 11;

switch($number){
    case ($number > 12): 
        echo "$number greater than twelve <br>";
    break; 
    case ($number > 11): 
        echo "$number greater than eleven <br>";
    break;
    case ($number > 10): 
        echo "$number greater than ten<br>";    
    break;
    default: 
    echo "We don't know about this number";
}

*/
/*
// Data Swapping

$name = "Bayazid";
$name2 = "Hasan";

$rName = $name;
$name = $name2;
$name2 = $rName;

echo $name."<br>";
echo $name2."<br>";

// palindrome word

$name = "sms";

if($name == strrev($name)){
    echo "This is Palindrome Word";
}else {
    echo "This is not Palindrome Word";
}
echo "<br>";

// prime number


for($i = 1; $i <= 10; $i++){
    $count = 0;
    for($j = 2; $j <= $i; $j++){
        if($i % $j == 0){
            $count++;
        }
    }
    if($count == 1){
        echo "$i is a prime number <br>";
    }else {
        echo "$i not prime number <br>";
    }
}
echo "<br>";

// Multiplication Table

// for($i = 1; $i <= 10; $i++){
//     $count = " ";
//     for($j = 1; $j <= 10; $j++){
//         echo $i." x ".$j." = ";
//         echo ($i * $j)."<br>";
//     }
// }


$number = [10, 12, 14, 20, 8, 30];
$name = "Bayazid Hasan";


echo count($number)."<br>";
echo strlen($name)."<br>";
echo str_word_count($name)."<br>";
echo gettype($name)."<br>";

$name = "BayAZid HAsAn";

$fName = strtolower($name);
$lName = ucwords($fName);
echo $lName."<br>";

$name = "Bayazid Hasan";
echo "<h2>Explode Function</h2>";
print_r(explode(" ",$name));
echo "<br>";
echo "<h2>Split Function</h2>";
print_r(str_split($name));
echo "<br>";
print_r(implode(" ",explode(" ",$name)));
echo "<h2>Implode Function</h2><br>";


$number = [
    "a" => 10,
    "b" => 13,
    "c" => 23,
    "d" => 20,
    "e" => 15,
];

extract($number);

$name = " Bayazid Hasan ";

echo $e."<br>";

$number = 12;

echo ($number % 2 == 0)? "This is Even number" : "This is Odd number";
echo "<br>";

*/


// custom function

/*
function bayazid_count($name){
    $counter = 0;
    foreach($name as $value){
        ++$counter;
    }
    return $counter;
}
$number = [12, 23, 39, 49, 03, 49];
print_r(bayazid_count($number));

echo "<br>";

function bayazid_word_count($name){
    $count = 0;
    foreach($name as $value){
        ++$count;
    }
    return $count;
}
$str = "12#3#14#15#16#18#17#19";
$str2 = explode("#", $str);
echo bayazid_word_count($str2);

*/

// ***************************************



// function bayazid_name($name){
//     $counter = 0;
//     foreach($name as $fName){
//         ++$counter;
//     }
//     return $counter;
// }
// $array1 = [182, 03, 93, 84, 94, 92];
// $array2 = [182, 03];
// echo bayazid_name($array1);
// echo "<br>";
// echo bayazid_name($array2);
// echo "<br>";



// function bayazid_word_count($wordCounts){
//     $counts = explode("#", $wordCounts);
//     $counter = 0;
//     foreach($counts as $count){
//         ++$counter;
//     }
//     return $counter;
// }
// $str = "23#25#28#29#33#43#53";
// $str2 = "23#25#28#29";
// $str3 = "23#25#28";

// echo bayazid_word_count($str)."<br>";
// echo bayazid_word_count($str2)."<br>";
// echo bayazid_word_count($str3)."<br>";




// some Function



// $number = 12.45;

// echo ceil($number)."<br>";  //Nearest Upper Integer Number
// echo floor($number)."<br>"; //Nearest Lowest Integer Number


// $number = 12.40;
// echo round($number)."<br>"; //Nearest Round Number

// $number = 12.50;
// echo round($number)."<br>";

// $number = 12.49;
// echo round($number)."<br>";


// $str = "Bayazid Hasan";

// echo $str."<br>";
// echo $str."<br>";
// // die();
// exit();
// echo $str."<br>";
// echo $str."<br>";
// echo $str."<br>";



// for($i = 1; $i <= 10; $i++){
//     for($j = 1; $j <= $i; $j++){
//         echo "*";
//     }
//     echo "<br>";
// }

// for($i = 1; $i <= 10; $i++){
//     $j = 10 - $i;
//     while($j >= 1){
//         echo "*";
//         $j--;
//     }
//     echo "<br>";
// }

// for($a=1;$a<=5;$a++){
//     for($b=1;$b<=5;$b++){
//         echo "*";
//     }
//     echo "<br>";
// }


echo "Password Generator: <br><br>";

$all_key = ['a','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','-','_','=','!','@','#','$','%','^','&','*','_','+',';',':','<','>','?',',','.','?'];

$passwordLength = [8,9,10,11,12,13,14,15];
shuffle($passwordLength);
$length = $passwordLength[0];
echo "Password length is ".$length;
echo "<br>";

for($i = 0; $i < $length; $i++){
    shuffle($all_key);
    echo $all_key[0];
}

echo "<br><br>";


// Array Sorting


$name = [" Mohammad ", " Bayazid ", " Hasan ", " Ahmed "];
$length = count($name);

echo "Main Value = ";
for($i = 0; $i < $length; $i++){
    echo $name[$i];
}
echo "<br>";

// Sort Array in Ascending Order sort()

sort($name); 

for($i = 0; $i < $length; $i++){
    echo $name[$i];
}

// Sort Array in Descending Order rsort()

rsort($name);

for($i = 0; $i < $length; $i++){
    echo $name[$i];
}
echo "<br>";
echo "<br>";

// Sort Array (Ascending Order), According to Value - asort()
$age = array(
    'Bayazid' => 12,
    'Hasan' => 10,
    'Bayazid Ahmed' => 17,
    'Tony' => 7,
    'Rony' => 5,
    'Jony' => 20,
    'Mony' => 30,
);


asort($age);

foreach($age as $key => $value){
    echo "Key = ".$key.", Value = ".$value."<br>";
}
echo "<br>";
echo "<br>";


// Sort Array (Ascending Order), According to Key - ksort()
ksort($age);

foreach($age as $key => $value){
    echo "Key = ".$key.", Value = ".$value."<br>";
}
echo "<br>";
echo "<br>";


// Sort Array (Descending Order), According to Value - arsort()
arsort($age);

foreach($age as $key => $value){
    echo "Key = ".$key.", Value = ".$value."<br>";
}
echo "<br>";
echo "<br>";


// Sort Array (Descending Order), According to Key - krsort()
krsort($age);

foreach($age as $key => $value){
    echo "Key = ".$key.", Value = ".$value."<br>";
}
echo "<br>";
echo "<br>";










echo "</h3>";

// echo "<h1>";
//     echo '<select name="" id="">';
     
//             for ($i = 2020; $i >= 1970; $i--) {
//                 echo "<option>".$i."</option"."<br>";
//             }

//     echo "</select>";
// echo "</h1>";

?>