<?
// Array Sort
$myArray = array(1, 2, 5, 6, 9, 4, 7, 8, 3, 6);

sort($myArray);
$arrLength = count($myArray);

for ($i = 0; $i < $arrLength; $i++) {
    echo $myArray[$i]."\n";
}
