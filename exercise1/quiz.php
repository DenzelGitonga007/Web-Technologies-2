<?php
// Displaying:
// a) the current date and time
echo "Today is: ". date("d/m/Y"). " ". "and the time is: ". date("h:ia");
echo "<br>";
echo "<hr>";
// b) first_name, last_name, gender, age
$particulars = array(
    array("Denzel", "Gitonga", "Male", 20),
    array("Catherine", "Marigu", "Female", "11"),
    array("Francis", "Mugane", "Male", "47"),
    array("Junne", "Onyango", "Female", "40"),
    array("Jayden", "Brave", "Male", "7"),
);
?>
<!-- Displaying the particulars on a table -->
<table>
    <thead>
        <th>#</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Age</th>
    </thead>
    <tbody>
        <!-- First record -->
        <tr>
            <td>1.</td>
            <td><?php echo $particulars[0][0] ?></td>
            <td><?php echo $particulars[0][1] ?></td>
            <td><?php echo $particulars[0][2] ?></td>
            <td><?php echo $particulars[0][3] ?></td>
        </tr>
        <!-- First record -->
        <tr>
            <td>2.</td>
            <td><?php echo $particulars[1][0] ?></td>
            <td><?php echo $particulars[1][1] ?></td>
            <td><?php echo $particulars[1][2] ?></td>
            <td><?php echo $particulars[1][3] ?></td>
        </tr>
        <!-- First record -->
        <tr>
            <td>3.</td>
            <td><?php echo $particulars[2][1] ?></td>
            <td><?php echo $particulars[2][0] ?></td>
            <td><?php echo $particulars[2][2] ?></td>
            <td><?php echo $particulars[2][3] ?></td>
        </tr>
        <!-- First record -->
        <tr>
            <td>4.</td>
            <td><?php echo $particulars[3][0] ?></td>
            <td><?php echo $particulars[3][1] ?></td>
            <td><?php echo $particulars[3][2] ?></td>
            <td><?php echo $particulars[3][3] ?></td>
        </tr>
        <!-- First record -->
        <tr>
            <td>5.</td>
            <td><?php echo $particulars[4][0] ?></td>
            <td><?php echo $particulars[4][1] ?></td>
            <td><?php echo $particulars[4][2] ?></td>
            <td><?php echo $particulars[4][3] ?></td>
        </tr>
        

    </tbody>
</table>