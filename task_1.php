<?php


function modifyText($text) {
    // Convert string to lowercase
    $text = strtolower($text);

    // Replace "brown" with "red"
    $text = str_replace("brown", "red", $text);

    // Print the modified text
    echo $text;
}

// Define the variable
$text = "The quick brown fox jumps over the lazy dog.";

// Call the function 
modifyText ($text);