<?php

    $page_title = 'Message Sent';
    include 'header.php';

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'vendor/autoload.php';

    if(isset($_POST['book_now'])) {
        
        $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $origin_location = mysqli_real_escape_string($conn, $_POST['origin_location']);
        $destination = mysqli_real_escape_string($conn, $_POST['destination']);
        $pickup_date = mysqli_real_escape_string($conn, $_POST['pickup_date']);
        $pickup_time = mysqli_real_escape_string($conn, $_POST['pickup_time']);
        
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
        
            
            $mail->setFrom("$email", "$full_name");
            $mail->addAddress('info@ultimatedoorsncabinets.com', 'Ultimate Doors');  
        
            
            $mail->isHTML(true);                                   
            $mail->Subject = 'New Booking - ULTIMATE DOORS N CABINETS';
            $mail->Body    = "Full Name - $full_name <br> Email - $email <br> Origin Location - $origin_location <br> Destination Location - $destination <br> Delivery Date - $pickup_date <br> Delivery Time - $pickup_time"; 
        
            $mail->send();
            $mail_feedback = 'Message has been sent'; 
        } catch (Exception $e) {
            $mail_feedback = 'Message could not be sent. Please, try again...';
        }
    
    }

?>

    <div class="mail-feedback">
        <center><h1>Thanks, <?= $full_name; ?></h1></center>
        <br><br>
        <center><p><?= $mail_feedback; ?>. Someone from our team will reply you within 24hrs.</p></center>
        <br><br>
        <center><a href="index.php">Go back to homepage.</a></center>
    </div>


<?php

    include 'footer.php';

?>