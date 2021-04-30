<?php 

echo "<h3>";

// 1. Index Array
// 2. Associative Array
// 3. Multidimensional Array

// Index array

// $name = array (
//     "Rafiq <br>",
//     "Zobbar <br>",
//     "Salam <br>",
//     "Borkot <br>",
// );

// print_r($name);
// $name[2] = "Shafiul <br>";
// print_r($name);

// echo "<br>";

// array_pop($name);
// array_pop($name);
// print_r($name);

// array_shift($name);
// array_shift($name);

// print_r($name);

// array_push($name, "Bayazid <br>");
// print_r($name);

// array_unshift($name, "Hasan <br>");
// print_r($name);


// $n = count($name);

// for ($x = 0; $x < $n; $x++){
//     echo $name[$x]."<br>";
// }

// array_shift();   //Remove First Index Data and return value
// array_unshift(); //Add Data Last in last Index
// array_pop();     //Remove Last Index Data and return value
// array_push();    //Add Data Last in last Index


// Associative Array


// $students = [
//     "name" => "student1","student2", "student3", "student4", "student5",
//     "age"  => 10, 22, 32, 42, 21,
//     "year" => 2020, 1958, 1952, 1953, 1954,
//     "grade"=> "GPA 5.00","GPA 4.00", "GPA 4.50", "GPA 3.50", "GPA 3.00",
// ];

// $students["name"].= ", Bayazid Hasan";
// echo $students["name"];

// print_r($students["name"]);
// echo "<br>";
// echo $students["year"];

// print_r (array_values($students));
// print_r (array_keys($students));

// foreach($students as $key => $value){
//     echo $key."<br>"."=".$value."<br>";
// }

// $std = array_keys($students);
// print_r($std);

// $animals = [
//     "name" => "cat", "rat", "mat",
//     "age"  => 12, 21, 32,
// ];

// extract($animals);
// print_r($age);


// foreach($animals as $key => $value){
//     echo "Key = $key "."Value =".$value."<br>";
// }

// multidimensional array


// $name = [
//     "bayazid"=> [
//         "Hasan" => [
//             "salam" => [
//                 "zobbar" => [
//                     "rafiq" => [
//                         12,
//                         30,
//                         32,
//                         40,
//                         50,
//                         22,
//                         11,
//                     ]
//                 ]
//             ]
//         ]
//     ]
//             ];

//     print_r($name);

//     echo "\n";

//     echo $name["bayazid"]["Hasan"]["salam"]["zobbar"]["rafiq"][6];

// ====================================================
// ====================================================
    
// Copy By value 
// Deep copy

// $person = [
//     "fname" => "bayazid",
//     "lname" => "ahmed",
// ];

// $newperson = $person;
// $newperson["lname"] = "hasan";

// print_r($person);
// print_r($newperson);

// Copy By Reference 


// $person = [
//     "fname" => "bayazid",
//     "lname" => "ahmed",
// ];

// $newperson = &$person;
// $newperson["lname"] = "hasan";

// print_r($person);
// print_r($newperson);

// // Associative array data remove

// unset($person["lname"]);
// print_r($person);


// Array slice


// $name = [
//     "rafiq",
//     "zobbar",
//     "salam",
//     "borkot",
//     "bayazid",
//     "hasan",
// ];

// $newName = array_slice($name, 2);
// $newName = array_slice($name, 2,-1);
// $newName = array_slice($name, 2,2);

// $newName = array_slice($name, -5,-1);
// $newName = array_slice($name, -5,-2);
// $newName = array_slice($name, -5,-3);

// $newName = array_slice($name, 2,4, true);

// print_r($name);
// print_r($newName);



// $random = [
//     "a" => 12,
//     "b" => 15,
//     "c" => 20,
//     "d" => 22,
//     "e" => 10,
//     12 => 40,
//     "f" => 30,
// ];

// $randomData = array_slice($random, 2, 5, true);

// print_r($random);
// print_r($randomData);


// array splice


$newRandom = [ "a","b","c","d","e","f",];


print_r($newRandom);

$newData = ["y", "z",];
$newRandomData = array_splice($newRandom, 2, 2, $newData);

print_r($newRandomData);
print_r($newRandom);



$r = [
    "a" => 12,
    "b" => 14,
    "c" => 17,
    "d" => 20,
];

$r1 = array_splice($r, 1, 4, true);
$r2 = ["g" => 40,"h" => 90,];
$rall = array_merge($r1, $r2);

print_r($rall);

// Sort array

$number = [12, 20, 10, 32, 44];
$char = [
    "a" => 12,
    "b" => 20,
    "c" => 30,
    "d" => 40,
    "e" => 35,
    "f" => 37,
];

// rsort($number);
// print_r($number);

// arsort($char);
krsort($char);
print_r($char);


echo "</h3>";

?>