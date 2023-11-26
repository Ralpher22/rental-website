<?php
if (isset($_POST['email-box'])) {
  $email = $_POST['email-box'];

  $subject = "Website Contact Form Submission";
  $message = "A new message has been submitted through the website contact form.\n\nEmail: " . $email;

  $to = "rickyralph@gmail.com";
  $headers = "From: noreply@yourwebsite.com"; 

  if (mail($to, $subject, $message, $headers)) {
    echo "Your message has been sent successfully.";
  } else {
    echo "There was an error sending your message. Please try again later.";
  }
}
