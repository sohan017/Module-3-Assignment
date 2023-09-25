<?php
function generatePassword($length) {

    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $specialChars = '!@#$%^&*()_+';
    
    // Combine all in one
    $allChars = $lowercase . $uppercase . $numbers . $specialChars;
    
    // Initialize password variable
    $password = '';
    
    // Generate random characters for password
    for ($i = 0; $i < $length; $i++) {
        // Choose a random character from $allChars
        $randomChar = $allChars[rand(0, strlen($allChars) - 1)];
        
        // Add random character to  password
        $password .= $randomChar;
    }
    
    return $password;
}

// Generate a password with a length of 12 characters
$password = generatePassword(12);

// Print generated password
echo "Generated Password: $password\n";

