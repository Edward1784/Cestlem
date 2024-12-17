<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $to = 'edward.gaci@gmail.com'; // Replace with your email address
    $subject = 'New Contact Form Submission';
    $message = "";

    foreach ($_POST as $key => $value) {
        $message .= ucfirst($key) . ": " . htmlspecialchars($value) . "\\n";
    }

    $headers = "From: webmaster@example.com\\r\\n" .
               "Reply-To: webmaster@example.com\\r\\n" .
               "X-Mailer: PHP/" . phpversion();

    if (mail($to, $subject, $message, $headers)) {
        http_response_code(200);
        echo 'Message sent successfully.';
    } else {
        http_response_code(500);
        echo 'Failed to send message.';
    }
}
?>
