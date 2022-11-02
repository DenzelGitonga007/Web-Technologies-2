<!-- While loop -->
<?php
    // Define the variable
    $count = 0;
    while(++$count <= 12)
    echo "$count times 12 is" . $count * 12 . "<br>";
?>
<!-- Displaying a star-triangle -->
<?php
    $row = 0;
    while (++$row <= 4) {
        // echo "*" . "<br>";
        $col = 0;
        while (++$col <= $row ) {
            echo "*";
        }
        echo "<br>";
    }
    echo "Using the for loop". "<br>";

// Using a for loop to display the pattern
    // $rows = 0;
    for ($rows = 0; $rows <= 5; ++$rows) {
        for ($columns = 0; $columns <= $rows; ++$columns) {
        echo "*";
        }
        echo "<br>";
    }

// Printing odd numbers
for ($rows = 0; $rows <= 7; $rows++){
    if (($rows % 2) != 0) {
        for ($columns = 1; $columns <= 4; $columns++){
            echo "$rows";
        }
        echo "<br>";
    }
}
    
?>