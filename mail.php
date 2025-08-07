<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars(trim($_POST["name"]));
  $email = htmlspecialchars(trim($_POST["email"]));
  $message = htmlspecialchars(trim($_POST["message"]));

  // Email to your address
  $to = "your-email@example.com";  // ⛔ Change this to your actual email
  $subject = "New Contact Message from Portfolio";
  $headers = "From: $email\r\n";
  $headers .= "Reply-To: $email\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

  $body = "You received a new message from your portfolio contact form:\n\n";
  $body .= "Name: $name\n";
  $body .= "Email: $email\n\n";
  $body .= "Message:\n$message\n";

  if (mail($to, $subject, $body, $headers)) {
    echo "<script>alert('Message sent successfully!'); window.history.back();</script>";
  } else {
    echo "<script>alert('Message failed to send.'); window.history.back();</script>";
  }
} else {
  // Block direct access
  header("Location: index.php");
  exit();
}
?>
