<?php
// 1. Database connection
$conn = new mysqli("localhost", "root", "", "servixo");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 2. Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$location = $_POST['location'];
$date = $_POST['date'];
$time = $_POST['time'];
$service = $_POST['service'];
$provider = $_POST['provider'];
$urgency = $_POST['urgency'];
$message = $_POST['message'];

// 3. Insert query
$sql = "INSERT INTO bookings 
(name, phone, service, provider, location, date, time, urgency, message) 
VALUES 
('$name', '$phone', '$service', '$provider', '$location', '$date', '$time', '$urgency', '$message')";

// 4. Execute query
// if ($conn->query($sql) === TRUE) {
//     // SUCCESS PAGE
//     echo "<h2>✅ Booking Saved Successfully!</h2>";
//     echo "<a href='home.php'>Go Back Home</a>";
// } else {
//     echo "Error: " . $conn->error;
// }

// // 5. Close connection
// $conn->close();
if (!$conn->query($sql)) {
    echo "Error: " . $conn->error;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Booking Success</title>
    <link rel="stylesheet" href="booking-success.css">
</head>
<body style="font-family:Arial; text-align:center; margin-top:50px;">

    <div class="container">

    <h2>✅ Booking Confirmed Successfully</h2>

    <p><b>Name:</b> <?php echo $name; ?></p>
    <p><b>Service:</b> <?php echo $service; ?></p>
    <p><b>Provider:</b> <?php echo $provider; ?></p>
    <p><b>Location:</b> <?php echo $location; ?></p>
    <p><b>Date:</b> <?php echo $date; ?></p>
    <p><b>Time:</b> <?php echo $time; ?></p>

    <div class="home-btn">  

    <a href="home.php">Go Back to Home</a>
    
    </div>

    </div>

</body>
</html>