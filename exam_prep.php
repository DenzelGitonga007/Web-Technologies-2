<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Assignment</title>
</head>
<body>
    <!-- Variable increment and decrement -->
    <?php 
    $x = 5;
    $y = 6;
    if (++$x == 6) {
        echo "x is now 6"; // Increments x to 6 first, then does the comparison
    }
    else {
        echo "x is still 5";
    }
    if ($y-- == 5) {
        echo "y is now 4"; // first does the comparison, then decrements
    }
    else {
        echo "y is still 5";
    }
    ?>
</body>
</html>