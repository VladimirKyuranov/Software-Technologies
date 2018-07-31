<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
<form>
    N: <input type="text" name="num"/>
    <input type="submit"/>
</form>
<?php
if (isset($_GET['num'])) {
    $num = intval($_GET['num']);

    $firstNumber = 0;
    $secondNumber = 1;
    $fibonacciNumber = 0;

    for ($i = 0; $i < $num; $i++) {
        $fibonacciNumber = $firstNumber + $secondNumber;
        $secondNumber = $firstNumber;
        $firstNumber = $fibonacciNumber;
        echo $fibonacciNumber . PHP_EOL;
    }
}
?>
</body>
</html>