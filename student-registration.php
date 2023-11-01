<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST["studentName"];
    $studentEmail = $_POST["studentEmail"];
    $studentPassword = $_POST["studentPassword"];
    // Hash the password for security.
    $hashedPassword = password_hash($studentPassword, PASSWORD_DEFAULT);

    // Create a database connection (replace with your actual database credentials).
    $dsn = "mysql:host=localhost;dbname=mydbstudent";
    $username = "your_db_username";
    $password = "your_db_password";

    try {
        $db = new PDO($dsn, $username, $password);

        // Insert user data into the users table.
        $sql = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $stmt = $db->prepare($sql);
        $stmt->execute([
            ':name' => $studentName,
            ':email' => $studentEmail,
            ':password' => $hashedPassword,
        ]);

        // Redirect to a success page or perform other actions as needed.
        header("Location: studentdash.html");
        exit;
    } catch (PDOException $e) {
        echo "Database error: " . $e->getMessage();
    }
}
?>

