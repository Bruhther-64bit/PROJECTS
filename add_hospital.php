<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Hospital</title>
</head>
<body>
    <h2>Add New Hospital</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Location:</label>
        <input type="text" name="location" required><br>
        <label>Contact Info:</label>
        <input type="text" name="contact_info"><br>
        <button type="submit" name="submit">Add Hospital</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $location = $_POST['location'];
        $contact_info = $_POST['contact_info'];

        $sql = "INSERT INTO Hospital (Name, Location, Contact_Info)
                VALUES ('$name', '$location', '$contact_info')";

        if ($conn->query($sql) === TRUE) {
            echo "New hospital added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
