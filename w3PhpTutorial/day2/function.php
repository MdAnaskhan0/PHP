<?
    // Function in php
    function myFunction($age){
        if($age < 18){
            echo "You are under age.\n";
        }
        elseif($age > 18){
            echo "Congratulations..! You are adult.\n";
        }
        else{
            echo "Please wait one year more.\n";
        }
    }

    myFunction(15);
    myFunction(18);
    myFunction(25);
?>