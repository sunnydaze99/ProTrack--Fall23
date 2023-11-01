<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $studentName = $_POST["studentName"];
    $studentEmail = $_POST["studentEmail"];
    $studentPassword = $_POST["studentPassword"];
    $studentMajor = $_POST["studentMajor"];

    // Validate and store the data as needed (e.g., in a database).
    // You should add proper validation and database connection here.

    // Example: Storing in a text file (not recommended for production):
    $data = "Name: $studentName\nEmail: $studentEmail\nMajor: $studentMajor\n";
    file_put_contents("students.txt", $data, FILE_APPEND);

    // Redirect to a success page or perform other actions as needed.
    header("Location: studentdash.html");
}
?>
