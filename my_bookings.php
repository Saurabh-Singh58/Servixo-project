<?php
session_start();

$conn = new mysqli("localhost", "root", "", "servixo");

// Check login
if (!isset($_SESSION['user_name'])) {
    header("Location: login.html");
    exit();
}

$user_name = $_SESSION['user_name'];

// Fetch bookings of this user
$sql = "SELECT * FROM bookings WHERE name='$user_name' ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>My Bookings</title>
    <link rel="stylesheet" href="my_bookings.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
</head>
<body>

<div class="top-bar">
    <h2>📋 My Bookings</h2>
    <a href="home.php" class="back-btn">← Back to Home</a>
</div>

<div class="main-container">

<?php if ($result->num_rows > 0) { ?>

    <div class="booking-grid">

    <?php while($row = $result->fetch_assoc()) { ?>

        <div class="booking-card">

            <h3> <?php echo $row['service']; ?></h3>
            <p class="provider">👨 <?php echo $row['provider']; ?></p>

            <div class="info">
                <p>📅 <?php echo $row['date']; ?></p>
                <p>⏰ <?php echo $row['time']; ?></p>
                <p>📍 <?php echo $row['location']; ?></p>
            </div>

            <p class="status <?php echo strtolower($row['status']); ?>">
                <?php echo $row['status']; ?>
            </p>

        </div>

    <?php } ?>

    </div>

<?php } else { ?>

    <div class="empty">
        <h3>No bookings yet 😔</h3>
        <a href="services.php" class="explore-btn">Explore Services</a>
    </div>

<?php } ?>

</div>

</body>
</html>


