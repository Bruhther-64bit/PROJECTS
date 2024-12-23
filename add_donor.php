<?php include('../db.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Donor</title>
</head>
<body>
    <h2>Add New Donor</h2>
    <form method="POST" action="">
        <label>Name:</label>
        <input type="text" name="name" required><br>
        <label>Blood Type:</label>
        <input type="text" name="blood_type" required><br>
        <label>Phone Number:</label>
        <input type="text" name="phone" required><br>
        <label>Address:</label>
        <input type="text" name="address"><br>
        <label>Age:</label>
        <input type="number" name="age" required><br>
        <label>Medical History:</label>
        <textarea name="medical_history"></textarea><br>
        <label>Last Donation Date:</label>
        <input type="date" name="last_donation_date"><br>
        <button type="submit" name="submit">Add Donor</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $blood_type = $_POST['blood_type'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $medical_history = $_POST['medical_history'];
        $last_donation_date = $_POST['last_donation_date'];

        $sql = "INSERT INTO Donor (Name, Blood_Type, Phone_Number, Address, Age, Medical_History, Last_Donation_Date)
                VALUES ('$name', '$blood_type', '$phone', '$address', $age, '$medical_history', '$last_donation_date')";

        if ($conn->query($sql) === TRUE) {
            echo "New donor added successfully!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    ?>
</body>
</html>
