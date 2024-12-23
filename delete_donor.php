<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Donor</title>
</head>
<body>
    <h2>Delete Donor</h2>
    <form method="POST" action="">
        <label>Donor ID:</label>
        <input type="number" name="donor_id" required><br>
        <button type="submit" name="delete">Delete Donor</button>
    </form>

    <?php
    if (isset($_POST['delete'])) {
        $donor_id = $_POST['donor_id'];

        // Check if the donor exists
        $check_sql = "SELECT * FROM Donor WHERE Donor_ID = $donor_id";
        $check_result = $conn->query($check_sql);

        if ($check_result->num_rows > 0) {
            // Delete the donor
            $delete_sql = "DELETE FROM Donor WHERE Donor_ID = $donor_id";
            if ($conn->query($delete_sql) === TRUE) {
                echo "Donor with ID $donor_id has been deleted successfully.";
            } else {
                echo "Error deleting donor: " . $conn->error;
            }
        } else {
            echo "No donor found with ID $donor_id.";
        }
    }
    ?>
</body>
</html>
