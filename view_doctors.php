<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Doctors</title>
</head>
<body>
    <h2>Doctors List</h2>
    <table border="1">
        <tr>
            <th>Doctor ID</th>
            <th>Name</th>
            <th>Specialty</th>
            <th>Contact Info</th>
            <th>Hospital ID</th>
        </tr>
        <?php
        $sql = "SELECT * FROM Doctor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['Doctor_ID']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Specialty']}</td>
                        <td>{$row['Contact_Info']}</td>
                        <td>{$row['Hospital_ID']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No doctors found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
