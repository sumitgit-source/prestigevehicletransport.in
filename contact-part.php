<?php
if ($_POST['Customer_E']) {
    $to_email = "pvtcarrier@gmail.com"; // Change this to your recipient email address
    $subject = "Inquiry from Prestige Vehicle Transport And Carriers Pvt Ltd"; // Change this to your email subject

   
    // Get the form data
    $name = $_POST["Customer_N"];
    $email = $_POST["Customer_E"];
    $phone = $_POST["Customer_P"];
    $moveFrom = $_POST["Move_From"];
    $moveTo = $_POST["Move_To"];
    $moveDate = $_POST["Required_Date"];

    // Construct message body
    $message = "Name: $name\n";
    $message .= "Email: $email\n";
    $message .= "Contact Number: $phone\n";
    $message .= "Move From: $moveFrom\n";
    $message .= "Move To: $moveTo\n";
    $message .= "Moving Date: $moveDate\n";
 

    // Additional headers
    $headers = "From:prestige_vehicle@gmail.com";

    // Send email
    if (mail($to_email, $subject, $message, $headers)) {
        echo "<script>window.location.href = 'index.php'</script>";
        // header('location: index.php');
    } else {
        echo "Email sending failed.";
    }
}
?>
