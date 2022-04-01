<?php

    $page_title = 'Message Sent';
    include 'header.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    if(isset($_POST['send_message'])) {
        
        $message_full_name = htmlspecialchars($_POST['message_full_name']);
        $message_email = htmlspecialchars($_POST['message_email']);
        $message = htmlspecialchars($_POST['message']); 
        
        try {
        
            
            $mail = new PHPMailer(true);
            
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                       
            $mail->isSMTP();                                             
            $mail->Host       = 'smtp.zoho.com';                      
            $mail->SMTPAuth   = true;                                    
            $mail->Username   = 'info@ultimatedoorsncabinets.com';                      
            $mail->Password   = 'Ultimatedoors1*';                                
            $mail->SMTPSecure = 'tls';             
            $mail->Port       = 587;                                     
        
            
            $mail->setFrom("$mail->Username", "$message_full_name");
            $mail->addAddress('info@ultimatedoorsncabinets.com', 'Ultimate Doors');  
        
            
            $mail->isHTML(true);                                   
            $mail->Subject = 'New Message - ULTIMATE DOORS N CABINETS';
            $mail->Body    = "Full Name - $message_full_name <br> Email - $message_email <br><br> Message - $message"; 
        
            $mail->send();
            $mail_feedback = 'Message has been sent. Someone from our team will reply you within 24hrs.'; 
        } catch (Exception $e) {
            $mail_feedback = 'Message could not be sent. Please, try again...';
        }
    
    }

?>

    <div class="mail-feedback">
        <center><h1>Thanks, <?= $message_full_name; ?></h1></center>
        <br><br>
        <center><p><?= $mail_feedback; ?></p></center>
        <br><br>
        <center><a href="index.php">Go back to homepage.</a></center>
    </div>


<?php

    include 'footer.php';

?>