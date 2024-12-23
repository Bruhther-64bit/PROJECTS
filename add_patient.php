<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Patient</title>
</head>
<body>
    <h2>Add New Patient</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Location:</label>
        <input type="text" name="location"><br>
        <label>Contact Info:</label>
        <input type="text" name="contact_info"><br>
        <label>Blood Type:</label>
        <input type="text" name="blood_type"><br>
        <label>Current Disease:</label>
        <input type="text" name="current_disease"><br>
        <label>Hospital ID:</label>
        <input type="number" name="hospital_id" required><br>
        <button type="submit" name="submit">Add Patient</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $location = $_POST['location'];
        $contact_info = $_POST['contact_info'];
        $blood_type = $_POST['blood_type'];
        $current_disease = $_POST['current_disease'];
        $hospital_id = $_POST['hospital_id'];

        $sql = "INSERT INTO Patient (Name, Location, Contact_Info, Blood_Type, Current_Disease, Hospital_ID)
                VALUES ('$name', '$location', '$contact_info', '$blood_type', '$current_disease', $hospital_id)";

        if ($conn->query($sql) === TRUE) {
            echo "New patient added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
