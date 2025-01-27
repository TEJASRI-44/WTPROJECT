<?php
// Establish connection to the database
$con = mysqli_connect("localhost", "myadmin", "Tejasri@44!22", "hello", 3306);

if ($con) {
    // Connection successful
} else {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $votername = mysqli_real_escape_string($con, $_POST['username']);
    $voterId = mysqli_real_escape_string($con, $_POST['voterno']);
    $mobilenumber = mysqli_real_escape_string($con, $_POST['phonenumber']);
    $aadhar = mysqli_real_escape_string($con, $_POST['aadhaarNumber']); // Adjusted to match the POST key

    // Use prepared statements to avoid SQL injection
    $stmt = $con->prepare("INSERT INTO votersinfo (votername, voterId, mobilenumber, aadharnumber, votingstatus) VALUES (?, ?, ?, ?, 'notvoted')");
    $stmt->bind_param("ssss", $votername, $voterId, $mobilenumber, $aadhar);

    if ($stmt->execute()) {
        echo '<script>
            alert("Registered Successfully");
        </script>';
        header("Location: index.php");
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    header("Location: registration.php");
    exit();
}

// Close the connection
mysqli_close($con);
?>
