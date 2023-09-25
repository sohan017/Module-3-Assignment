<?php 
function sortGradesDescending($grades) {

    // Sort the grades array in descending order
    rsort($grades);

    // Print the  grades array
    print_r($grades);
}

// Array with the grades
$grades = array(85, 92, 78, 88, 95);

// Call the function 
sortGradesDescending($grades);
?>