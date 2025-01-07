<?
// Variables in php

// Create or Declare a variable using $ sign

$name = "Md Anas Khan";
$age = 24;
$address = "Dhaka";
$isMale = true;

echo "My name is $name. I am $age yours old. I live in $address. I am $isMale. \n";




// Variable Scope in php: Global and Local

// Global Scope
$myGlobalName = "Global variable";

function myName($myGlobalName)
{
    $myLocalName = "Local variable";
    echo "Local variable: $myLocalName \n";
    echo "Global variable: $myGlobalName\n";
}

echo "Local variable: $myLocalName \n";
echo "Global variable: $myGlobalName\n";

echo ("Function call: \n");
myName($myGlobalName);


function muName2(){
    // The global keyword is used to access a global variable from within a function.
    global $myGlobalName;
    echo "Global variable: $myGlobalName\n";
}


echo ("Function call 2: \n");
muName2();



$x = 5;
$y = 10;

function addNumber(){
    global $x, $y;
    $z = $x + $y;
    echo "Sum: $z \n";
}

addNumber();



// Static keyword in php
function staticVariableKeyword(){
    static $count = 0;
    echo $count;
    $count++;
}

echo "Static keyword: \n";
staticVariableKeyword();
echo "\n";
staticVariableKeyword();
echo "\n";
staticVariableKeyword();
?>