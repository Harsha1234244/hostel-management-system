<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blockNumber = $_POST['blockNumber'];
    $floorNumber = $_POST['floorNumber'];
    $roomNumber = $_POST['roomNumber'];
    $description = $_POST['description'];

    $to = 'your-email@example.com'; 
    $subject = 'Problem Report';
    $message = "Block Number: $blockNumber\n";
    $message .= "Floor Number: $floorNumber\n";
    $message .= "Room Number: $roomNumber\n\n";
    $message .= "Description:\n$description";

    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        echo 'Message sent successfully.';
    } else {
        echo 'Failed to send message. Please try again later.';
    }
}
?>
