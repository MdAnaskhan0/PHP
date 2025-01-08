<?
    // Data type in PHP

    // String
    $name = "Md Anas Khan";

    // Integer
    $age = 24;

    // Float
    $height = 5.8;

    // Boolean
    $isMale = true;

    // Array
    $fruits = array("Apple", "Banana", "Mango");

    $friends = array("Saddam", "Anik", "Emon");

    // echo "My bestfriend is $friends[1] \n";

    // Object
    class movie{
        function fav_movie(){
            global $name, $age, $height, $isMale, $fruits, $friends;
            
            if($isMale == true){
                $gender = "Male";
            }
            else{
                $gender = "Femmale";
            }
            return "My name is $name. I am $age yours old. My height is $height fit. I am $gender. My favourite fruit is $fruits[0]. My bestfriend is $friends[1]. \n";
        }
    }

    $movie1 = new movie;
    // echo $movie1->fav_movie();

    // Var_dump() function: The var_dump() function is used to display structured information (type and value) about one or more variables.

    var_dump($movie1);
    echo "\n";
    var_dump($movie1->fav_movie());


    // Null value
    $nullValue = null;
    // echo $nullValue;


    // Change Data Type in PHP
    $x = 10;
    $x = "Anas";

    var_dump($x);

    $y = 10;
    $y = (string)$y;
    var_dump($y);

    $y = (float)$y;
    var_dump($y);

?>