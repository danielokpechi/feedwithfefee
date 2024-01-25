<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $full_name = $_POST["contact-name"];
    $email = $_POST["contact-email"];
    $state = $_POST["state"]; // Note: You might want to change this to a unique name
    $phone = $_POST["contact-phone"];
    $experience = $_POST["additional-message"];
    $reason_to_volunteer = $_POST["additional-message"];

    // Compose email message
    $to = "okpechichinedum@gmail.com";  // Replace with the actual recipient email address
    $subject = "New Volunteer Form Submission";
    $message = "Full Name: $full_name\nEmail: $email\nState: $state\nPhone: $phone\nExperience: $experience\nReason to Volunteer: $reason_to_volunteer";

    // Send email
    mail($to, $subject, $message);

    // Redirect to a thank-you page
    header("Location: thank-you.html");
    exit;
}
?>
