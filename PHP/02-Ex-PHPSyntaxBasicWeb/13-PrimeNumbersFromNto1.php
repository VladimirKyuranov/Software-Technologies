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

        for ($i = $num; $i > 0; $i--){
            if (prime($i)){
                echo "$i ";
            }
        }
    }

    function prime(int $num) : bool{
        if ($num < 2)
        {
            return false;
        }

        for ($divisor = 2; $divisor <= sqrt($num); $divisor++)
        {
            if ($num % $divisor == 0)
            {
                return false;
            }
        }

        return true;
    }
    ?>
</body>
</html>