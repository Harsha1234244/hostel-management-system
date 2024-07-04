<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $morning = isset($_POST['morning']) ? "Eat" : "Not Eat";
    $afternoon = isset($_POST['afternoon']) ? "Eat" : "Not Eat";
    $night = isset($_POST['night']) ? "Eat" : "Not Eat";
    
    $to = "akshith2105@gmail.com";
    $subject = "Mess Attendance Report";
    $message = "Attendance Report:\n\n";
    $message .= "Morning (Breakfast): " . $morning . "\n";
    $message .= "Afternoon (Lunch): " . $afternoon . "\n";
    $message .= "Night (Dinner): " . $night . "\n";
    
    $headers = "From:puretiharshavardhan@gmail.com" . "\r\n" .
               "Reply-To:akshith2105@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();
    
    if (mail($to, $subject, $message, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Error: " . error_get_last()['message'];
    }
} else {
    echo "Invalid request method.";
}
?>
