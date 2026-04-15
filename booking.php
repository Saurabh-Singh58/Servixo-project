<?php
session_start();

$service = isset($_GET['service']) ? ucfirst($_GET['service']) : "Service";
$provider = isset($_GET['provider']) ? $_GET['provider'] : "Provider";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Book Service</title>
    <link rel="stylesheet" href="booking.css">
</head>
<body>

<div class="booking-container">

    <h2>Book <?php echo $service; ?> Service</h2>
    <p class="provider">Provider: <b><?php echo $provider; ?></b></p>

    <form action="save_booking.php" method="POST">

        <!-- Hidden Data -->
        <input type="hidden" name="service" value="<?php echo $service; ?>">
        <input type="hidden" name="provider" value="<?php echo $provider; ?>">

        <!-- Name -->
        <label>Name</label>
        <input type="text" name="name" 
        value="<?php echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; ?>" required>

        <!-- Phone -->
        <label>Phone Number *</label>
        <input type="tel" name="phone" required>

        <!-- Address -->
        <label>Full Address</label>
        <input type="text" name="location" required>

        <!-- Date -->
        <label>Date</label>
        <input type="date" name="date" required>

        <!-- Time -->
        <label>Time</label>
        <input type="time" name="time" required>

        <!-- Urgency -->
        <label>Urgency</label>
        <select name="urgency">
            <option value="Normal">Normal</option>
            <option value="Urgent">Urgent</option>
        </select>

        <!-- Message -->
        <label>Describe your problem</label>
        <textarea name="message" placeholder="Explain your issue..."></textarea>

        <!-- Submit -->
        <button type="submit">Confirm Booking</button>

    </form>

</div>

</body>
</html>