<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Patients</title>
</head>
<body>
    <h2>Patients List</h2>
    <table border="1">
        <tr>
            <th>Patient ID</th>
            <th>Name</th>
            <th>Location</th>
            <th>Contact Info</th>
            <th>Blood Type</th>
            <th>Current Disease</th>
            <th>Hospital ID</th>
        </tr>
        <?php
        $sql = "SELECT * FROM Patient";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['Patient_ID']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Location']}</td>
                        <td>{$row['Contact_Info']}</td>
                        <td>{$row['Blood_Type']}</td>
                        <td>{$row['Current_Disease']}</td>
                        <td>{$row['Hospital_ID']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No patients found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
