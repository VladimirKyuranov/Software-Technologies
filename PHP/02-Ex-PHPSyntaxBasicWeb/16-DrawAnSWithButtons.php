<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>First Steps Into PHP</title>
</head>
<body>
<?php
blueRow();
for ($i = 0; $i < 3; $i++) {
    leftBlueRow();
}
blueRow();
for ($i = 0; $i < 3; $i++) {
    rightBlueRow();
}
blueRow();


function blueRow()
{
    for ($i = 0; $i < 5; $i++) {
        echo "<button style='background-color: blue'>1</button>";
    }
    echo "<br/>";
}

function leftBlueRow()
{
    echo "<button style='background-color: blue'>1</button>";
    for ($i = 0; $i < 4; $i++) {
        echo "<button>0</button>";
    }
    echo "<br/>";
}

function rightBlueRow()
{
    for ($i = 0; $i < 4; $i++) {
        echo "<button>0</button>";
    }
    echo "<button style='background-color: blue'>1</button>";
    echo "<br/>";
}
?>
</body>
</html>