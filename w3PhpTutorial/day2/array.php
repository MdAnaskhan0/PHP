<?
    // Array in php: An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.

    function myFunction(){
        echo "This is a function.";
    }

    $myArray = array("Anas", 24, true, 'myFunction');
    echo $myArray[0]."\n";
    echo $myArray[1]."\n";
    echo $myArray[2]."\n";
    echo call_user_func($myArray[3])."\n";

    echo "Total item in the array:".count($myArray)."\n";

    foreach($myArray as $item){
        echo $item."\n";
    }

    $ShoppingItem = array("UpperPart"=>"T-Shart", "Brand"=>"RichMan", "Price"=>2500);
    foreach($ShoppingItem as $item => $product){
        echo "$item: $product \n";
    }
?>