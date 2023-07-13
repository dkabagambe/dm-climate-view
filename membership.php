<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Retrieve form data
  $name = $_POST['name'];
  $organization = $_POST['organization'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $country = $_POST['country'];
  $thematicGroup = $_POST['thematic-group'];

  // Compose email message
  $to = 'info@dmclimateview.org';
  $subject = 'Membership Application';
  $message = "Applicant Name: $name\n";
  $message .= "Organization Name: $organization\n";
  $message .= "Email: $email\n";
  $message .= "Mobile Number: $mobile\n";
  $message .= "Country of Operation: $country\n";
  $message .= "Preferred Thematic Group: $thematicGroup\n";

  // Send email
  $headers = "From: $email";
  if (mail($to, $subject, $message, $headers)) {
    // Redirect to membership.html after successful submission
    header('Location: membership.html');
    exit();
  } else {
    echo "Error sending the email. Please try again.";
  }
}
?>
