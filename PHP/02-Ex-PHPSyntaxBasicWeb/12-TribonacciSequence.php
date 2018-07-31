<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>

</head>
<body>
    <form>
        N: <input type="text" name="num" />
        <input type="submit" />
    </form>
    <?php
    if (isset($_GET['num'])) {
        $num = intval($_GET['num']);

        $firstNumber = 0;
        $secondNumber = 0;
        $thirdNumber = 1;
        $tribonacciNumber = 0;

        for ($i = 0; $i < $num; $i++) {
            $tribonacciNumber = $firstNumber + $secondNumber + $thirdNumber;
            $thirdNumber = $secondNumber;
            $secondNumber = $firstNumber;
            $firstNumber = $tribonacciNumber;
            echo $tribonacciNumber . PHP_EOL;
        }
    }
    ?>
</body>
</html>