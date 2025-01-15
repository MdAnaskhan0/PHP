<?
    // For loop in php:
    echo "For loop: ";
    for($i=1; $i<=10; $i++){
        echo $i." ";
    }


    echo "\nWhile loop: ";
    // While loop in php
    $j=1;
    while($j<=10){
        echo $j." ";
        $j++;
    }

    $personName = array("Anas", "Saddam", "Emon");
    foreach($personName as $name){
        echo $name." ";
    }
?>