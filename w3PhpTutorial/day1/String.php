<?
    // Double or Signle Quotes in PHP

    # Single Quotes-> when you use single quotes, the string is not parsed for variables.

    $name = "Anas";
    echo 'My name is $name'; # Output: My name is $name

    # Double Quotes-> when you use double quotes, the string is parsed for variables.

    echo "\nMy name is $name \n"; # Output: My name is Anas



    // Calculate String Length in PHP
    $name = "Md Anas Khan";
    echo strlen("$name \n");    

    echo "\n";

    // Word Count in PHP
    echo str_word_count("$name \n");
?>