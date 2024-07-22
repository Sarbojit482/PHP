<?php
// Initialize variables
$total = null;
$percentage = null;       
$grade = null;

// Prompt the user to check if they know their percentage
$s = readline("Do you know your percentage (Y/N): ");

// Check the user's response
if ($s == "Y" || $s == "y") {
    // If the user knows their percentage, prompt for the percentage category
    $percentage = readline("Enter your percentage category (1-(90-100), 2-(80-89), 3-(70-79), 4-(60-69), 5-(50-59), 6-(40-49), 7-(35-39)): ");
    
    // Determine the grade based on the percentage category
    switch ($percentage) {
        case 1:
            $grade = "A+";
            break;
        case 2:
            $grade = "A";
            break;
        case 3:
            $grade = "B+";
            break;
        case 4:
            $grade = "B";
            break;
        case 5:
            $grade = "C+";
            break;
        case 6:
            $grade = "C";
            break;
        case 7:
            $grade = "D";
            break;
        default:
            // Handle incorrect percentage category input
            echo "The choice is incorrect\n";
            exit;
    }
    // Output the grade
    echo "Your grade is: $grade\n";

} else if ($s == "N" || $s == "n") {
    // If the user does not know their percentage, prompt for the number of subjects
    $k = readline("Enter number of subjects (4-7): ");
    
    // Check if the number of subjects is within the valid range
    if ($k >= 4 && $k <= 7) {
        echo "You entered marks for $k subjects.\n";
        $marks = [];
        $total = 0;

        // Collect marks for each subject and calculate the total
        for ($i = 1; $i <= $k; $i++) {
            $mark = readline("Enter Marks for subject $i: ");
            $marks[] = $mark;
            $total += $mark;
        }

        // Calculate the percentage based on the total marks
        $percentage = ($total / ($k * 100)) * 100;

        // Assign grade based on the calculated percentage
        if ($percentage >= 90 && $percentage <= 100) {
            $grade = "A+";
        } elseif ($percentage >= 80 && $percentage < 90) {
            $grade = "A";
        } elseif ($percentage >= 70 && $percentage < 80) {
            $grade = "B+";
        } elseif ($percentage >= 60 && $percentage < 70) {
            $grade = "B";
        } elseif ($percentage >= 50 && $percentage < 60) {
            $grade = "C+";
        } elseif ($percentage >= 40 && $percentage < 50) {
            $grade = "C";
        } elseif ($percentage >= 35 && $percentage < 40) {
            $grade = "D";
        } else {
            $grade = "F"; // Fail grade for percentage below 35
        }

        // Output the total marks, percentage, and grade
        $max_marks = $k * 100;
        echo "Your total marks are: $total out of $max_marks\n";
        echo "Your percentage is: $percentage%\n";
        echo "Your grade is: $grade\n";
    } else {
        // Handle invalid number of subjects
        echo "Invalid number of subjects. Please enter a number between 4 and 7.\n";
    }
} else {
    // Handle invalid initial input
    echo "Invalid input. Please enter Y/y or N/n.\n";
}
?>
