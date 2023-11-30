<?php
include('include/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $fullname = $_POST["fullname"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contactform (fullname, email, phone, message) VALUES ('$fullname', '$email', '$phone', '$message')";

    if ($conn->query($sql) === TRUE) {
        $response = "Form submitted successfully!";
    } else {
        $response = "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    // Send email
    $to = "info@beausulzle.nl";
    $subject = "New Form Submission";
    $emailMessage = "Name: $fullname\nEmail: $email\nPhone: $phone\nMessage: $message";
    mail($to, $subject, $emailMessage);

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode(['response' => $response]);
}
?>
