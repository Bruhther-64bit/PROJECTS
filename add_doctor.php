<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Doctor</title>
</head>
<body>
    <h2>Add New Doctor</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Specialty:</label>
        <input type="text" name="specialty"><br>
        <label>Contact Info:</label>
        <input type="text" name="contact_info"><br>
        <label>Hospital ID:</label>
        <input type="number" name="hospital_id" required><br>
        <button type="submit" name="submit">Add Doctor</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $specialty = $_POST['specialty'];
        $contact_info = $_POST['contact_info'];
        $hospital_id = $_POST['hospital_id'];

        $sql = "INSERT INTO Doctor (Name, Specialty, Contact_Info, Hospital_ID)
                VALUES ('$name', '$specialty', '$contact_info', $hospital_id)";

        if ($conn->query($sql) === TRUE) {
            echo "New doctor added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
