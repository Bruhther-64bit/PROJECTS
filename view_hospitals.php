<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Hospitals</title>
</head>
<body>
    <h2>Hospitals List</h2>
    <table border="1">
        <tr>
            <th>Hospital ID</th>
            <th>Name</th>
            <th>Location</th>
            <th>Contact Info</th>
        </tr>
        <?php
        $sql = "SELECT * FROM Hospital";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['Hospital_ID']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Location']}</td>
                        <td>{$row['Contact_Info']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No hospitals found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
