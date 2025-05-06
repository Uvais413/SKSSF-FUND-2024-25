<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // You can now process this data. Here are a few examples:

    // 1. Display the received data (for testing):
    echo "<h2>Thank you for your message!</h2>";
    echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    echo "<p>Phone: " . htmlspecialchars($phone) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Message: " . htmlspecialchars($message) . "</p>";

    // 2. Send an email:
    $to = "skssffund2025@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: " . $name . "\n";
    $body .= "Phone: " . $phone . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message:\n" . $message;
    $headers = "From:skssffund2025@gmail.com"; // Replace with a valid "from" address

    // mail($to, $subject, $body, $headers);
    // echo "<p>Your message has been sent.</p>";

    // 3. Save to a text file:
    $file = "contact_messages.txt";
    $data = "Name: " . $name . ", Phone: " . $phone . ", Email: " . $email . ", Message: " . $message . "\n";
    // file_put_contents($file, $data, FILE_APPEND);
    // echo "<p>Your message has been saved.</p>";

    // 4. Save to a database (requires database setup and connection):
    // You would typically use PDO or MySQLi for database interaction.
    // This is a more advanced topic.

} else {
    // If someone tries to access this file directly
    echo "Sorry, there was an error processing your request.";
}
?>