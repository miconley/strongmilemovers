<?php
    /*
     * Enable error reporting
     */

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/phpmailer/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/phpmailer/src/SMTP.php';

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
 
    /*
     * Setup email addresses and change it to your own
     */
    $from = "info@strongmilemovers.com";
    $to = "michaeljconley@gmail.com";
    $subject = "Simple test for mail function";
    $message = "This is a test to check if php mail function sends out the email";
    $headers = "From:" . $from;
 
    /*
     * Test php mail function to see if it returns "true" or "false"
     * Remember that if mail returns true does not guarantee
     * that you will also receive the email
     */

    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->Mailer = "smtp";

    $mail->SMTPDebug  = 1;  
    $mail->SMTPAuth   = TRUE;
    $mail->SMTPSecure = "tls";
    $mail->Port       = 587;
    $mail->Host       = "smtp.gmail.com";
    $mail->Username   = "strongmilemovers@gmail.com";
    $mail->Password   = "fpwezhwvoxmakerq";

    $mail->IsHTML(true);
    $mail->AddAddress("michaeljconley@gmail.com", "recipient-name");
    $mail->SetFrom("info@strongmilemovers.com", "Strongmile Quote Request");
    $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
    $content = "<b>This is a Test Email sent via Gmail SMTP Server using PHP mailer class.</b>";

    $mail->MsgHTML($content); 
    if(!$mail->Send()) {
      echo "Error while sending Email.";
      var_dump($mail);
    } else {
      echo "Email sent successfully";
    }
?>