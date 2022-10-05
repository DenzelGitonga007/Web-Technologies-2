<?php
// declare and initialize an array
$team = array('Bill', 'Isaac', 'Denzel', 'Ruth');
// print the 3rd index value
echo "The fourth team-mate is " . $team[3];
echo "<br>"
?>

<!-- 2d-array -->
<?php
$marks = array(
    array(40, 70, 63, 80, 34),
    array(84, 70, 54, 44, 70),
    array(60, 50, 40, 90, 74),
    array(54, 80, 60, 70, 50),
);
echo "The marks of the third student are: "
 . $marks[2][0]. " ". $marks[2][1]. " " . $marks[2][2]. " " . $marks[2][3]. " " .$marks[2][4];