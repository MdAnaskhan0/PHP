<?
// Switch Staitment in Php
$age = 17;

switch ($age) {
    case 17:
        echo "You are under age.";
        break;
    case 18:
        echo "Wait one year more";
        break;
    case 19:
        echo "You are adult.";
    default:
        echo "pleae enter an good year.";
}
echo "\n";
// Find the day name: 
$day = 5;

switch ($day) {
    case 1:
        echo "Saturday";
        break;
    case 2:
        echo "Sunday";
        break;
    case 3:
        echo "Monday";
        break;
    case 4:
        echo "Tuesday";
        break;
    case 5:
        echo "Wednesday";
        break;
    case 6:
        echo "Thursday";
        break;
    case 7:
        echo "Friday";
        break;
    default:
        echo "Enter Valid Day number.";
}
