<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $organization = $_POST['organization'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $country = $_POST['country'];
    $thematicGroup = $_POST['thematic_group'];

    // Prepare email message
    $to = 'Danielkabagambe@gmail.com';
    $subject = 'Membership Application';
    $message = "Applicant Name: $name\n";
    $message .= "Organization Name: $organization\n";
    $message .= "Email: $email\n";
    $message .= "Mobile Number: $mobile\n";
    $message .= "Country of Operation: $country\n";
    $message .= "Preferred Thematic Group: $thematicGroup\n";

   // Send email
$headers = "From: $email\r\n";
if (mail($to, $subject, $message, $headers)) {
    echo 'Thank you for your application. We will get back to you soon.';
    // Redirect to membership.html
    header('Location: membership.html');
    exit;
} else {
    echo 'There was a problem sending your application. Please try again later.';
}
}
?>
