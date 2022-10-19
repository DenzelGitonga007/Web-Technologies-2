<!-- Incrementing values -->
<?php
$x = 5;
$y = 6;
// Test for incrementing
if (++$x == $y)
    echo "yes";
    echo "<br>";
if ($x++ == $y)
    echo "yes";
    echo "<br>";
if (++$x == $y--)
    echo "okay";
    echo "<br>";
if ($x++ == --$y)
    echo "okay";
    echo "<br>";
?>