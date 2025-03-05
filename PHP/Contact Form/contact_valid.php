<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
    $city = filter_var(trim($_POST['city']), FILTER_SANITIZE_STRING);
    $subject = filter_var(trim($_POST['subject']), FILTER_SANITIZE_STRING);
    $message = filter_var(trim($_POST['message']), FILTER_SANITIZE_STRING);

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($city) || empty($subject) || empty($message)) {
        echo 'All fields are required.';
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.';
        exit;
    }

    // Set email parameters
    $adminEmail = 'info@omizstaffing.com'; // Admin email
    $adminEmailTwo = 'backupilogicx@gmail.com'; // Backup email
    $userEmail = $email; // User's email

    $adminSubject = 'Contact Form Submission From Website';
    $userSubject = 'Thank You for Contacting Us';

    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: Omiz Staffing <no-reply@omizstaffing.com>\r\n";

    // Email body for admin
    $adminBody = "<h2>Contact Form Submission from omizstaffing.com </h2>";
    $adminBody .= "<table border='1' cellspacing='0' cellpadding='5'>";
    $adminBody .= "<tr><th>Name</th><td>$name</td></tr>";
    $adminBody .= "<tr><th>Email</th><td>$email</td></tr>";
    $adminBody .= "<tr><th>Phone</th><td>$phone</td></tr>";
    $adminBody .= "<tr><th>City</th><td>$city</td></tr>";
    $adminBody .= "<tr><th>Subject</th><td>$subject</td></tr>";
    $adminBody .= "<tr><th>Message</th><td>$message</td></tr>";
    $adminBody .= "</table>";

    // Email body for user
    $userBody = "<h2>Thank You for Contacting Us</h2>";
    $userBody .= "<p>Dear $name,</p>";
    $userBody .= "<p>Thank you for reaching out to us. We will get back to you shortly.</p>";
    $userBody .= "<p>Best regards,<br> Team Omiz Staffing </p>";

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
