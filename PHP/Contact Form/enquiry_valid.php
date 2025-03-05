<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

    // Validate fields
    if (empty($name) || empty($email) || empty($phone)) {
        echo 'Name, Email, and Phone are required fields.';
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.';
        exit;
    }

    // Set email parameters
    $adminEmail = 'uday@enermax.co.in'; // Admin email
    $adminEmailTwo = 'backupilogicx@gmail.com'; // Backup email
    $userEmail = $email; // User's email

    $adminSubject = 'Contact Form Submission From Website';
    $userSubject = 'Thank You for Contacting Us';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: Enermax <no-reply@enermax.co.in>\r\n";
    
    // Email body for admin
    $adminBody = "<h2>Contact Form Submission from enermax.co.in</h2>";
    $adminBody .= "<table border='1' cellspacing='0' cellpadding='5'>";
    $adminBody .= "<tr><th>Name</th><td>$name</td></tr>";
    $adminBody .= "<tr><th>Email</th><td>$email</td></tr>";
    $adminBody .= "<tr><th>Phone</th><td>$phone</td></tr>";
    $adminBody .= "</table>";

    // Email body for user
    $userBody = "<h2>Thank You for Contacting Us</h2>";
    $userBody .= "<p>Dear $name,</p>";
    $userBody .= "<p>Thank you for reaching out to us. We will get back to you shortly.</p>";
    $userBody .= "<p>Best regards, Enermax</p>";

    // Headers for user email
    $userHeaders = $headers . "Reply-To: $email\r\n"; 

    // Send email to user
    $userMailResult = mail($userEmail, $userSubject, $userBody, $userHeaders);

    // Send emails to admin and backup admin
    $adminMailResultOne = mail($adminEmail, $adminSubject, $adminBody, $headers);
    $adminMailResultTwo = mail($adminEmailTwo, $adminSubject, $adminBody, $headers);

    // Check if emails were sent successfully
    if ($userMailResult && $adminMailResultOne && $adminMailResultTwo) {
        echo 'sent';
    } else {
        echo 'Failed to send email.';
    }
} else {
    echo 'Invalid request method.';
}
?>
