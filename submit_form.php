<?php
$email = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $email = $_POST['dmcimateview_email_sub'];

  // Compose email message
  $to = 'info@dmclimateview.org';
  $subject = 'Subscription Request';
  $message = "Email Address: $email";

  // Send email
  $headers = "From: $email";
  if (mail($to, $subject, $message, $headers)) {
    echo 'Email sent successfully!';
    // Clear the form data after successful submission
    $email = '';
  } else {
    echo 'Error sending the email. Please try again.';
  }
}
?>
