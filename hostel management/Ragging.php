<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $rollno = htmlspecialchars($_POST['rollno']);
    $roomno = htmlspecialchars($_POST['roomno']);
    $complaint = htmlspecialchars($_POST['complaint']);

  
    $to = "recipient@example.com"; 
    $subject = "New Student Complaint";
    $headers = "From: no-reply@yourdomain.com\r\n";
    $headers .= "Reply-To: no-reply@yourdomain.com\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

  
    $message = "<html><body>";
    $message .= "<h2>New Student Complaint</h2>";
    $message .= "<p><strong>Name:</strong> $name</p>";
    $message .= "<p><strong>Roll No.:</strong> $rollno</p>";
    $message .= "<p><strong>Room No.:</strong> $roomno</p>";
    $message .= "<p><strong>Complaint:</strong></p>";
    $message .= "<p>$complaint</p>";
    $message .= "</body></html>";


    if (mail($to, $subject, $message, $headers)) {
        echo "Complaint submitted successfully!";
    } else {
        echo "Failed to send complaint.";
    }
} else {
    echo "Invalid request method.";
}
?>
