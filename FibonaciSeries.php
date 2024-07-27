<?php
$n = 20; // Number of Fibonacci numbers to generate
$fib = [0, 1]; // Starting values of the Fibonacci series

for ($i = 2; $i < $n; $i++) {
    $fib[] = $fib[$i - 1] + $fib[$i - 2]; // Calculate and add the next Fibonacci number
}

echo "The first 20 numbers of the Fibonacci series are: ";
echo implode(", ", $fib);
?>

<?php
function fibonacci($n) {
    if ($n == 0) {
        return 1;
    } elseif ($n == 1) {
        return 2;
    } else {
        return fibonacci($n - 1) + fibonacci($n - 2);
    }
}

$n = 21;
$result = fibonacci($n);
echo $result;
?>
