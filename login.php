 <?php
session_start();
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data safely
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Check if fields are empty
    if (empty($email) || empty($password)) {
        echo "<script>
            alert('Please fill all fields');
            window.location.href='login.html';
        </script>";
        exit();
    }

    // Prepare SQL (secure)
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        // Verify password (hashed)
        if (password_verify($password, $row['password'])) {

            // Store session
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_name'] = $row['name'];

            // Redirect to homepage
            header("Location: home.php");
            exit();

        } else {
            echo "<script>
                alert('Incorrect Password');
                window.location.href='login.html';
            </script>";
        }

    } else {
        echo "<script>
            alert('User not found');
            window.location.href='login.html';
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>