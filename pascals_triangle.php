<?php 
$rows = 5;

// Loop through each row
for ($i = 0; $i < $rows; $i++) { 
    // Initialize the first element of the row as 1
    $n = 1; 

    // Loop to generate each element in the row
    for ($j = 0; $j <= $i; $j++) { 
        // Print the current element followed by a space
        echo $n . " "; 

        // Calculate the next element using the binomial coefficient formula
        $n = $n * ($i - $j) / ($j + 1); 
    } 

    // Move to the next line after finishing the current row
    echo "\n"; 
} 
?>
