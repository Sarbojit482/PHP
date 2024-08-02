<?php
$r = 5; // Number of rows for the Pascal's Triangle
$co = 1; // Variable to store the coefficient

echo "-----This is the pascal triangle pattern-----\n\n"; // Print the header

for ($i = 0; $i < $r; $i++) { // Loop through each row
    echo "\t"; // Print a tab for formatting
    for ($ws = 1; $ws <= $r - $i; $ws++) { // Loop to print leading spaces for each row
        echo "  "; // Print spaces to align the triangle
    }
        
    for ($j = 0; $j <= $i; $j++) { // Loop through each element in the row
        if ($j == 0 || $i == 0) // If it's the first element in the row or the first row
            $co = 1; // Set coefficient to 1 (the first element of each row is always 1)
        else
            $co = $co * ($i - $j + 1) / $j; // Calculate the next coefficient using the previous one
        echo $co . "   "; // Print the coefficient followed by spaces for formatting
    }
    echo "\n"; // Move to the next line after each row
}

?>
