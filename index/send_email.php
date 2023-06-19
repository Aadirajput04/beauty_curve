<!-- <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["submit"])) {
        $to = "knikniknikni506@gmail.com"; // Replace with your email address
        $subject = $_POST["subject"];
        $name = $_POST["name"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];

        $message = "Name: $name\n";
        $message .= "Email: $email\n";
        $message .= "Phone: $phone\n";
        $message .= "Subject: $subject";

        $headers = "From: $name <$email>\r\n";
        $headers .= "Reply-To: $email\r\n";

        if (mail($to, $subject, $message, $headers)) {
            echo "Email sent successfully.";
        } else {
            echo "Failed to send email.";
            if (error_get_last()) {
                echo "<br>Error details: " . error_get_last()['message'];
            }
        }
    }
}
?> -->
