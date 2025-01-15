<?

// Upper case(strtoupper)
$name = "my name is Md. Anas Khan\n";

echo strtoupper($name);

// Lower case(strtolower)
echo strtolower($name);


// First letter capital(ucfirst)
echo ucfirst($name);

// Replace String(str_replace("old","new","string"))
echo str_replace("Anas", "Emon", $name);

// Reverce String(strrev)
echo strrev($name);

// Concatenation String(.)
$firstName = "Md. Anas";
$lastName = "Khan";

echo ("\nMy Name is ".$firstName." ".$lastName."\n");

// Slice String(substr())
echo  substr($firstName, 4, 4);


// Slice to the end
echo substr($firstName, 4)


?>