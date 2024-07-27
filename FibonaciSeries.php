Method 1:
<?php
$n = 20; // Number of Fibonacci numbers to generate
$fib = [0, 1]; // Starting values of the Fibonacci series

for ($i = 2; $i < $n; $i++) {
    $fib[] = $fib[$i - 1] + $fib[$i - 2]; // Calculate and add the next Fibonacci number
}

echo "The first 20 numbers of the Fibonacci series are: ";
echo implode(", ", $fib);
?>
//method 1 wii give the the sequence

method 2
<?php
function fibonacci($n) {
    if ($n == 0) {
        return 1;
    } elseif ($n == 1) {
        return 2;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);// Calculate and add the next Fibonacci number
    }
}

$n = 21;// Number of Fibonacci numbers to generate
$result = fibonacci($n);
echo $result;
?>
//Method 2 will give the total of all numbers
