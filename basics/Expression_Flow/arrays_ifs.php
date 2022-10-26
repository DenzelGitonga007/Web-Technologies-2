<!-- Calculating mean has a mean score of s and assigning grades -->
<?php
// Initialize the array
$marks = array(array(1, "SIT/0001/2021", "James Nyikal", 40, 50, 82),
        array(2, "SIT/0022/2021", "Pauline Nzioka", 50, 64, 81),
        array(3, "SIT/0011/2021", "Mark Masai", 60, 70, 44)
);
// Iterate and calculate mean has a mean score of 
$mean_1 = ($marks[0][3] + $marks[0][4] + $marks[0][5])/3;
$mean_2 = ($marks[1][3] + $marks[1][4] + $marks[1][5])/3;
$mean_3 = ($marks[2][3] + $marks[2][4] + $marks[2][5])/3;
// For first stuent
if ($mean_1 >= 70 and $mean_1 <= 100) {
    $grade_1 = "excellent";
    echo $marks[0][2]. " has a mean score of  " . $mean_1 . " which is ";
    echo "<br>";
}
elseif ($mean_1 >= 60 and $mean_1 <= 69) {
    $grade_1 = "very good";
    echo $marks[0][2]. " has a mean score of  " . $mean_1 . " which is " . $grade_1;
    echo "<br>";
}
elseif ($mean_1 >= 50 && $mean_1 <= 59) {
    $grade_1 = "good";
    echo $marks[0][2]. " has a mean score of  " . $mean_1 . " which is a " . $grade_1;
    echo "<br>";
}
elseif ($mean_1 >= 40 && $mean_1 <= 49) {
    $grade_1 = "nice attempt";
    echo $marks[0][2]. " has a mean score of  " . $mean_1 . " which is a " . $grade_1;
    echo "<br>";
}
else {
    $grade_1 = "repeat";
    echo $marks[0][2]. " has a mean score of  " . $mean_1 . " which is a " . $grade_1;
    echo "<br>";
}
// For secon stuent
if ($mean_2 >= 70 and $mean_2 <= 100) {
    $grade_2 = "excellent";
    echo $marks[1][2]. " has a mean score of  " . $mean_2 . " which is " . $grade_2;
    echo "<br>";
}
elseif ($mean_2 >= 60 and $mean_2 <= 69) {
    $grade_2 = "very good";
    echo $marks[1][2]. " has a mean score of  " . $mean_2 . " which is " . $grade_2;
    echo "<br>";
}
elseif ($mean_2 >= 50 && $mean_2 <= 59) {
    $grade_2 = "good";
    echo $marks[1][2]. " has a mean score of  " . $mean_2 . " which is a " . $grade_2;
    echo "<br>";
}
elseif ($mean_2 >= 40 && $mean_2 <= 49) {
    $grade_2 = "nice attempt";
    echo $marks[1][2]. " has a mean score of  " . $mean_2 . " which is a " . $grade_2;
    echo "<br>";
}
else {
    $grade_2 = "repeat";
    echo $marks[1][2]. " has a mean score of  " . $mean_2 . " which is a " . $grade_2;
    echo "<br>";
}
// For mean three
if ($mean_3 >= 70 and $mean_3 <= 100) {
    $grade_3 = "excellent";
    echo $marks[2][2]. " has a mean score of  " . $mean_3 . " which is ". $grade_3;
}
elseif ($mean_3 >= 60 and $mean_3 <= 69) {
    $grade_3 = "very good";
    echo $marks[2][2]. " has a mean score of  " . $mean_3 . " which is " . $grade_3;
}
elseif ($mean_3 >= 50 && $mean_3 <= 59) {
    $grade_3 = "good";
    echo $marks[2][2]. " has a mean score of  " . $mean_3 . " which is a " . $grade_3;
}
elseif ($mean_3 >= 40 && $mean_3 <= 49) {
    $grade_3 = "nice attempt";
    echo $marks[2][2]. " has a mean score of  " . $mean_3 . " which is a " . $grade_3;
}
else {
    $grade_3 = "repeat";
    echo $marks[2][2]. " has a mean score of  " . $mean_3 . " which is a " . $grade_3;
}

?>