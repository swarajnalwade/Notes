<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $gender = trim($_POST['gender']);
    $country = trim($_POST['country']);
    $city = trim($_POST['city']);
    $experience_years = trim($_POST['experience_years']);
    $experience_months = trim($_POST['experience_months']);
    $salary_lakhs = trim($_POST['salary_lakhs']);
    $salary_thousands = trim($_POST['salary_thousands']);

    // Validate required fields
    if (empty($name) || empty($email) || empty($phone) || empty($gender) || empty($country) || empty($city) || empty($experience_years) || empty($experience_months) || empty($salary_lakhs) || empty($salary_thousands)) {
        echo 'All fields are required.';
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Invalid email format.';
        exit;
    }

    // File Upload Handling
    $uploadDir = "uploads/";
    $filePath = "";
    $attachment = "";

    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true); // Create directory if it doesn't exist
    }

    if (isset($_FILES['file']) && $_FILES['file']['error'] == 0) {
        $fileTmpPath = $_FILES['file']['tmp_name'];
        $fileName = time() . "_" . basename($_FILES['file']['name']);
        $filePath = $uploadDir . $fileName;

        $allowedExtensions = ['pdf', 'doc', 'docx'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if (in_array($fileExt, $allowedExtensions) && $_FILES['file']['size'] <= 10 * 1024 * 1024) {
            if (move_uploaded_file($fileTmpPath, $filePath)) {
                $attachment = $filePath;
            } else {
                echo "File upload failed.";
                exit;
            }
        } else {
            echo "Invalid file format or size.";
            exit;
        }
    }

    // Email Recipients
    $adminEmail = 'nalwadeswaraj123@gmail.com';
    $adminEmailTwo = 'backupilogicx@gmail.com';
    $userEmail = $email;

    // Email Subjects
    $adminSubject = 'Job Application Form Submission';
    $userSubject = 'Thank You for Contacting Us';

    // Construct Email Body
    $adminBody = "<h2>Job Application Form Submission from hr-evangelist.com</h2>";
    $adminBody .= "<table border='1' cellspacing='0' cellpadding='5'>";
    $adminBody .= "<tr><th>Name</th><td>$name</td></tr>";
    $adminBody .= "<tr><th>Email</th><td>$email</td></tr>";
    $adminBody .= "<tr><th>Phone</th><td>$phone</td></tr>";
    $adminBody .= "<tr><th>Gender</th><td>$gender</td></tr>";
    $adminBody .= "<tr><th>Country</th><td>$country</td></tr>";
    $adminBody .= "<tr><th>City</th><td>$city</td></tr>";
    $adminBody .= "<tr><th>Total Work Experience (Years)</th><td>$experience_years</td></tr>";
    $adminBody .= "<tr><th>Total Work Experience (Months)</th><td>$experience_months</td></tr>";
    $adminBody .= "<tr><th>Current Annual Salary (Lakhs)</th><td>$salary_lakhs</td></tr>";
    $adminBody .= "<tr><th>Current Annual Salary (Thousands)</th><td>$salary_thousands</td></tr>";
    $adminBody .= "</table>\r\n\r\n";

    // Email Headers
    $boundary = md5(time()); // Unique boundary for the email
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";
    $headers .= "From: HR Evangelist <no-reply@hr-evangelist.com>\r\n";

    // Email Message with Admin Body
    $message = "--$boundary\r\n";
    $message .= "Content-Type: text/html; charset=UTF-8\r\n";
    $message .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $message .= $adminBody . "\r\n\r\n";

    // Attach File
    if ($attachment) {
        $fileContent = chunk_split(base64_encode(file_get_contents($attachment)));
        $fileName = basename($attachment);

        $message .= "--$boundary\r\n";
        $message .= "Content-Type: application/octet-stream; name=\"$fileName\"\r\n";
        $message .= "Content-Transfer-Encoding: base64\r\n";
        $message .= "Content-Disposition: attachment; filename=\"$fileName\"\r\n\r\n";
        $message .= "$fileContent\r\n\r\n";
    }

    $message .= "--$boundary--";

    // Send Emails to Admins
    if (mail($adminEmail, $adminSubject, $message, $headers) && mail($adminEmailTwo, $adminSubject, $message, $headers)) {
        // Send Thank You Email to User
        $userHeaders = "MIME-Version: 1.0\r\n";
        $userHeaders .= "Content-Type: text/html; charset=UTF-8\r\n";
        $userHeaders .= "From: HR Evangelist <no-reply@hr-evangelist.com>\r\n";

        $userMessage = "<h2>Thank You for Contacting Us</h2>";
        $userMessage .= "<p>Dear $name,</p>";
        $userMessage .= "<p>Thank you for reaching out to us. We will get back to you shortly.</p>";
        $userMessage .= "<p>Best regards,<br> Team HR Evangelist</p>";

        mail($userEmail, $userSubject, $userMessage, $userHeaders);
        echo "sent";
    } else {
 $error = error_get_last();
    echo "Email sending failed. Error: " . ($error ? $error['message'] : 'Unknown error');
    }
} else {
    echo 'Invalid request method.';
}
?>
