<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div {
            border: 1px solid blueviolet;
            width: fit-content;
            margin-left: 30%;
            margin-top: 5%;
            padding: 2%;
        }
    </style>
</head>

<body>

<div>
    <h1>full diamond</h1>
<?php
    echo "<pre>";
    $rows = 7;
    $cols = ($rows * 2) - 1;

    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $cols; $j++) {
            $diff = abs($j - ($rows + 1));
            $min = min($i - 1, $rows - $i);
            if ($diff <= $min) {
                echo ($min + 1 - $diff) * 3 . " ";
            } else {
                echo "&nbsp;&nbsp;";
            }
        }
        echo "<br>";
    }
    echo"<pre>"
    ?>
</div>

    <div>
        <h1>star program</h1>
        <?php
        $rows = 5;
        for ($i = 1; $i <= $rows; $i++) {
            for ($j = 1; $j <= $rows - $i; $j++) {
                echo "&nbsp;&nbsp;&nbsp;";
            }
            for ($k = 1; $k <= 2 * $i - 1; $k++) {
                echo "$k ";
            }
            echo "<br/>";
        }

        ?>
    </div>
    <div>
        <h1>star program</h1>
        <?php
        $rows = 5;
        for ($i = 1; $i <= $rows; $i++) {

            for ($k = 1; $k <= $i; $k++) {
                echo "* ";
            }
            echo "<br/>";
        }

        ?>
    </div>
    <div>
        <h1>prime number</h1>
        <?php

        $start = 2; // starting number of the range
        $end = 50; // ending number of the range

        for ($i = $start; $i <= $end; $i++) {
            $is_prime = true;

            for ($j = 2; $j <= sqrt($i); $j++) {
                if ($i % $j == 0) {
                    $is_prime = false;
                    break;
                }
            }

            if ($is_prime) {
                echo $i . " ";
            }
        }
        ?>
    </div>
    <div>
        <h1>fibonacci series</h1>
        <?php
        $a = 0;
        $b = 1;
        for ($i = 0; $i < 10; $i++) {
            $c = $a + $b;
            $a = $b;
            $b = $c;
            echo $c . '<br>';
        }
        ?>
    </div>
    <div>
        <?php
        for ($i = 2000; $i <= 2050; $i++) {
            if ($i % 4 == 0) {
                echo ("leap year" . $i) . '<br>';
            } else {
                echo ("not leap year" . $i) . '<br>';
            }
        }
        ?>
    </div>


</body>

</html>