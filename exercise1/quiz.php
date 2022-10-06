<?php
// Displaying:
// a) the current date and time
echo "Today is: ". date("d/m/Y"). " ". "and the time is: ". date("h:ia");
echo "<br>";
echo "<hr>";
// b) first_name, last_name, gender, age
$particulars = array(
    "Denzel", "Gitonga", "Male", 20);
?>
<!-- Displaying the particulars on a table -->
<table>
    <thead>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Gender</th>
        <th>Age</th>
    </thead>
    <tbody>
        <td><?php echo $particulars[0] ?></td>
        <td><?php echo $particulars[1] ?></td>
        <td><?php echo $particulars[2] ?></td>
        <td><?php echo $particulars[3] ?></td>
    </tbody>
</table>