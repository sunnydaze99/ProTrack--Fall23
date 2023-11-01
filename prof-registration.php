<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $professorName = $_POST["professorName"];
    $professorEmail = $_POST["professorEmail"];
    $professorPassword = $_POST["professorPassword"];

    // Validate and store the data as needed (e.g., in a database).
    // You should add proper validation and database connection here.

    // Example: Storing in a text file (not recommended for production):
    $data = "Name: $professorName\nEmail: $professorEmail\nSubject: $professorSubject\n";
    file_put_contents("professors.txt", $data, FILE_APPEND);

    // Redirect to a success page or perform other actions as needed.
    header("Location: instructordash.html");
}
?>
