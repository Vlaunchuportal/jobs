<?php
include_once('./DBConnect.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendmail($remail,$vcode) 
{
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");

    $mail = new PHPMailer(true);

    
try {
    //Server settings

    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = '1hk17cs057@hkbk.edu.in';                     //SMTP username
    $mail->Password   = 'usaidjawadasdf555';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('1hk17cs057@hkbk.edu.in', 'jawad');

    $mail->addAddress($remail);     //Add a recipient
    

 

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Email verification from jawad';
    $mail->Body    = "Thanks for Registration!
    Click the link below to verify the email address
    <a href='http://127.0.0.1:3307/job-listing-master/verify.php?remail=$remail&vcode=$vcode'> Verify </a>";
  

    $mail->send();
    return true;
    } 
    catch (Exception $e) {
    return false;
    }
}


if(isset($_POST['rname']) && isset($_POST['remail']) && isset($_POST['rpassword']) && isset($_POST['rnum']))
{
    $rname = $_POST['rname'];
    $remail = $_POST['remail'];
    $rpassword = $_POST['rpassword'];
    $rnum = $_POST['rnum'];
    $vcode = bin2hex(random_bytes(16));
    $subscribe = $_POST['subscribe'];
    
    sendmail($_POST['remail'],$vcode);

    $sql = "INSERT INTO recruiter(rname,remail,rpassword,rnum, usertype, verificationCode, isVerified, news) VALUES('$rname','$remail','$rpassword','$rnum', 'recruiter', '$vcode', '1', '$subscribe')";


    if(($conn-> query($sql) == TRUE )  ) {
        
    echo  json_encode("ok");
    } else {
    echo json_encode("failed");
    }
}

?>


