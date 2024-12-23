<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>View Donors</title>
</head>
<body>
    <h2>Donors List</h2>
    <table border="1">
        <tr>
            <th>Donor ID</th>
            <th>Name</th>
            <th>Blood Type</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Age</th>
            <th>Last Donation Date</th>
        </tr>
        <?php
        $sql = "SELECT * FROM Donor";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['Donor_ID']}</td>
                        <td>{$row['Name']}</td>
                        <td>{$row['Blood_Type']}</td>
                        <td>{$row['Phone_Number']}</td>
                        <td>{$row['Address']}</td>
                        <td>{$row['Age']}</td>
                        <td>{$row['Last_Donation_Date']}</td>
                      </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No donors found</td></tr>";
        }
        ?>
    </table>
</body>
</html>
