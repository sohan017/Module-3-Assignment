<?php 
function removeEvenNumbers($numbers) {

    //An empty array to store odd numbers
    $oddNumbers = array();

    // input array
    foreach ($numbers as $number) {
        
        if ($number % 2 !== 0) {
           
            $oddNumbers[] = $number;
        }
    }

    // Print the odd numbers
    print_r($oddNumbers);
}

// Create an array the numbers 1 to 10
$numbers = range(1, 10);

// Call the function 
removeEvenNumbers($numbers);