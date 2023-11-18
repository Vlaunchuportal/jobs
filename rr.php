<?php
if(!isset($_SESSION)) {
    session_start();
}
include_once('./DBConnect.php');
require_once 'config.php';





?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="font/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
  

  <title>Login #8</title>
  <Style>
      body {
    font-family: "Roboto", sans-serif;
    background-color: #f8fafb; }
  
  p {
    color: #b3b3b3;
    font-weight: 300; }
  
  h1, h2, h3, h4, h5, h6,
  .h1, .h2, .h3, .h4, .h5, .h6 {
    font-family: "Roboto", sans-serif; }
  
  a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
    a:hover {
      text-decoration: none !important; }
  
  .content {
    padding: 7rem 0; }
  
  h2 {
    font-size: 20px; }
  
  @media (max-width: 991.98px) {
    .content .bg {
      height: 500px; } }
  
  .content .contents, .content .bg {
    width: 50%; }
    @media (max-width: 1199.98px) {
      .content .contents, .content .bg {
        width: 100%; } }
    .content .contents .form-group, .content .bg .form-group {
      position: relative; }
      .content .contents .form-group label, .content .bg .form-group label {
        position: absolute;
        top: 50%;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        -webkit-transition: .3s all ease;
        -o-transition: .3s all ease;
        transition: .3s all ease; }
      .content .contents .form-group input, .content .bg .form-group input {
        background: transparent;
        border-bottom: 1px solid #ccc; }
      .content .contents .form-group.first, .content .bg .form-group.first {
        border-top-left-radius: 7px;
        border-top-right-radius: 7px; }
      .content .contents .form-group.last, .content .bg .form-group.last {
        border-bottom-left-radius: 7px;
        border-bottom-right-radius: 7px; }
      .content .contents .form-group label, .content .bg .form-group label {
        font-size: 12px;
        display: block;
        margin-bottom: 0;
        color: #b3b3b3; }
      .content .contents .form-group.focus, .content .bg .form-group.focus {
        background: #fff; }
      .content .contents .form-group.field--not-empty label, .content .bg .form-group.field--not-empty label {
        margin-top: -25px; }
    .content .contents .form-control, .content .bg .form-control {
      border: none;
      padding: 0;
      font-size: 20px;
      border-radius: 0; }
      .content .contents .form-control:active, .content .contents .form-control:focus, .content .bg .form-control:active, .content .bg .form-control:focus {
        outline: none;
        -webkit-box-shadow: none;
        box-shadow: none; }
  
  .content .bg {
    background-size: cover;
    background-position: center; }
  
  .content a {
    color: #888;
    text-decoration: underline; }
  
  .content .btn {
    height: 54px;
    padding-left: 30px;
    padding-right: 30px; }
  
  .content .forgot-pass {
    position: relative;
    top: 2px;
    font-size: 14px; }
  
  .social-login a {
    text-decoration: none;
    position: relative;
    text-align: center;
    color: #fff;
    margin-bottom: 10px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: inline-block; }
    .social-login a span {
      position: absolute;
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      -ms-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%); }
    .social-login a:hover {
      color: #fff; }
    .social-login a.facebook {
      background: #3b5998; }
      .social-login a.facebook:hover {
        background: #344e86; }
    .social-login a.twitter {
      background: #1da1f2; }
      .social-login a.twitter:hover {
        background: #0d95e8; }
    .social-login a.google {
      background: #ea4335; }
      .social-login a.google:hover {
        background: #e82e1e; }
  
  .control {
    display: block;
    position: relative;
    padding-left: 30px;
    margin-bottom: 15px;
    cursor: pointer;
    font-size: 14px; }
    .control .caption {
      position: relative;
      top: .2rem;
      color: #888; }
  
  .control input {
    position: absolute;
    z-index: -1;
    opacity: 0; }
  
  .control__indicator {
    position: absolute;
    top: 2px;
    left: 0;
    height: 20px;
    width: 20px;
    background: #e6e6e6;
    border-radius: 4px; }
  
  .control--radio .control__indicator {
    border-radius: 50%; }
  
  .control:hover input ~ .control__indicator,
  .control input:focus ~ .control__indicator {
    background: #ccc; }
  
  .control input:checked ~ .control__indicator {
    background: #38d39f; }
  
  .control:hover input:not([disabled]):checked ~ .control__indicator,
  .control input:checked:focus ~ .control__indicator {
    background: #4dd8a9; }
  
  .control input:disabled ~ .control__indicator {
    background: #e6e6e6;
    opacity: 0.9;
    pointer-events: none; }
  
  .control__indicator:after {
    font-family: 'icomoon';
    content: '\e5ca';
    position: absolute;
    display: none;
    font-size: 16px;
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease; }
  
  .control input:checked ~ .control__indicator:after {
    display: block;
    color: #fff; }
  
  .control--checkbox .control__indicator:after {
    top: 50%;
    left: 50%;
    margin-top: -1px;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%); }
  
  .control--checkbox input:disabled ~ .control__indicator:after {
    border-color: #7b7b7b; }
  
  .control--checkbox input:disabled:checked ~ .control__indicator {
    background-color: #7e0cf5;
    opacity: .2; }
  
  </Style>
  </head>
  
  <body>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


function sendMail($cemail,$vcode)
{


require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

$mail = new PHPMailer(true);


try {
  //Server settings

  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = '1hk17cs057@hkbk.edu.in';                     //SMTP username
  $mail->Password   = 'zhxm syvx ubfx fvar';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

  //Recipients
  $mail->setFrom('1hk17cs057@hkbk.edu.in', 'Vlaunchu');
  $mail->addAddress($cemail);     //Add a recipient
  

  

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = 'Email Verification from Vlaunchujob.com';
  $mail->Body    = "Thank you for registering to vlaunchu, 
  Click the above link to verify your account
  <a href='http://localhost/job-listing-master/verifyrr.php?cemail=$cemail&vcode=$vcode'>Verify</a>";
 


  $mail->send();
  return true;
} catch (Exception $e) {
  return false;
}

}


if(isset($_REQUEST['search'])){
if(isset($_POST['cname']) && isset($_POST['cemail']) && isset($_POST['cpassword']) && isset($_POST['cnum']))

{
    $sql="SELECT * FROM recruiter WHERE remail = '{$_POST['cemail']}'";
    $result = $conn->query($sql);

    $sqlr="SELECT * FROM candidate WHERE cemail = '{$_POST['cemail']}'";
    $resultr = $conn->query($sqlr);

    if($result->num_rows == 1 || $resultr->num_rows == 1) 
    
    {
        echo '<span class="alert-danger"> Email id already exist ! </span>';
    }
    else
    {
        

        $cname = $_POST['cname'];
        $cemail = $_POST['cemail'];
        $cpassword = $_POST['cpassword'];
        $cnum = $_POST['cnum'];
        $cn = $_POST['code'];
        

    
        if(isset($_POST['subscribe']))

        {
            $ss = 1;
        }
        else
        {
            $ss = 0;
        }
        
        $vcode = bin2hex(random_bytes(16));
        
        

        if($_POST['code']!='')
        {
        $sql = "SELECT * FROM recruiter where referralcode = '$cn'";


        
        $result = $conn->query($sql);
        
            if($result->num_rows == 1) 
            {
                $row = $result->fetch_assoc();
                
                $wallet=$row['wallet']+20;
                $sql = "UPDATE recruiter SET wallet = '$wallet' WHERE referralcode = '$cn' ";
                $result = $conn->query($sql);
                

            }
        }


        $referralcode = strtoupper(bin2hex(random_bytes(4)));
        
        
        
        
        

        $sql = "INSERT INTO recruiter(rname,remail,rpassword,rnum, usertype, verificationCode, isVerified,news, referralcode) VALUES('$cname','$cemail','$cpassword','$cnum', 'recruiter', '$vcode', '0', '$ss', '$referralcode')";

    
    
        if($conn-> query($sql) == TRUE && sendMail($cemail,$vcode) )   {
        
        // $subject = "Verification Link";
        // $body = "Hi, WELCOME to VLAUNCHU verify the verification code link to REGISTER your account";
        // $headers = "From: 1hk17cs057@hkbk.edu.in";
        
        // if (mail($cemail, $subject, $body, $headers)) {
        //     echo "Email successfully sent to $cemail...";
        // } else {
        //     echo "Email sending failed...";
        // }
        
        echo '<span class="alert-success"> Registration Successful, and verification code has been sent to the Email ! </span>';
        } else {
        
        echo '<span> Unable to Registration! </span>';
        }
    }
    
}

}






/// social account connect


// include('configr.php');




if(isset($_GET["code"]))
{

 $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


 if(!isset($token['error']))
 {
 
  $google_client->setAccessToken($token['access_token']);

 
  $_SESSION['access_token'] = $token['access_token'];


  $google_service = new Google_Service_Oauth2($google_client);

 
  $data = $google_service->userinfo->get();

 
  if(!empty($data['given_name']))
  {
   $_SESSION['user_first_name'] = $data['given_name'];
  }

  if(!empty($data['family_name']))
  {
   $_SESSION['user_last_name'] = $data['family_name'];
  }

  if(!empty($data['email']))
  {
   $_SESSION['user_email_address'] = $data['email'];
  }

  if(!empty($data['gender']))
  {
   $_SESSION['user_gender'] = $data['gender'];
  }

  if(!empty($data['picture']))
  {
   $_SESSION['user_image'] = $data['picture'];
  }
 }
}





?>

  
  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="img/undraw_file_sync_ot38.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Register with  <strong>VLaunchu</strong></h3>
              <p class="mb-4">Recruiter account.</p>
            </div>
            <FORM action="" METHOD="post" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group first">
                
                <input type="text" class="form-control" id="cname" name="cname" placeholder="Full Name">
                <label id="emailerror" class="error" ></label>

              </div>
              <div class="form-group first">
                
                <input type="email" class="form-control" id="cemail" name="cemail" placeholder="Email">
                <label id="emailerror" class="error" ></label>

              </div>
              <div class="form-group last mb-4">
                
                <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Enter New Password">
             
                
              </div>
              <div class="form-group last mb-4">
                
                <input type="text" class="form-control" id="cnum" name="cnum" placeholder="Contact No.">
             
                
              </div>
              
              <div class="form-group last mb-4">
                
                <input type="text" class="form-control" id="code" name="code" placeholder="Referral Code (Optional)"> 
             
                
              </div>

              <input type="checkbox" id="subscribe" name="subscribe" value="news">
              <label for="vehicle1">Subscribe to our Exclusive Vlaunchu newsletters for regular intervals of offers!</label><br>
             
                
              
              
              

              
              <button class="btn text-white btn-block btn-primary" type="submit" name="search" value="search">Register</button>
              
              
              <span class="d-block text-left my-4 text-muted"> or register with</span>

              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <?php
                
                echo '<a href="'.$google_client->createAuthUrl().'" class="google">';
                ?>
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
              <span id="statusLogMsg"></span>
            </FORM>
            <?php


            if(!isset($_SESSION['is_login']))
            {
              if(isset($_SESSION['user_first_name'])){
              $sname = $_SESSION['user_first_name'];
              $semail = $_SESSION['user_email_address'];
              $simage = $_SESSION["user_image"];
              }
              if(isset($_SESSION['user_email_address'])) 
              {   
                $sql = "SELECT * FROM recruiter where remail = '{$_SESSION['user_email_address']}' ";
                $result = $conn->query($sql);
                $row = $result->num_rows;

                $sqlc = "SELECT * FROM candidate where cemail = '{$_SESSION['user_email_address']}' ";
                $resultc = $conn->query($sqlc);
                
                if($resultc->num_rows == 1) 
                {
                  echo "<script>
                  alert('Already registered email in candidate account');
                  window.location.href='logout.php'; </script>";
                }
                else
                if($row === 1 ) 
                {
                  $_SESSION['is_login'] = true;
                  $_SESSION['remail'] = $semail;
                  echo "<script>
                  alert('login successfull');
                  window.location.href='recruiter/Recruiter.php'; </script>";
                }
                
                else
                {

                  $sql= "INSERT INTO recruiter (rname, remail,rimage, usertype) VALUES ('$sname', '$semail', '$simage', 'recruiter')";
                
                  if($conn -> query($sql) == TRUE) 
                  {
                      $_SESSION['is_login'] = true;
                      $_SESSION['remail'] = $semail;
                      echo "<script>
                      alert('first time login successfull');
                      window.location.href='recruiter/Recruiter.php'; </script>";
                    $Msg ='<div class="alert alert-success col-sm-6 ml-5 mt-2">signin successful </div>';
                  } else 
                  {
                      $Msg ='<div class="alert alert-danger col-sm-6 ml-5 mt-2">job didnt added successfull </div>';
                  }
                }
              }
            }

           


            // echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
            // echo '<img src="'.$_SESSION["user_image"].'" class="img-responsive img-circle img-thumbnail" />';
            // echo '<h3><b>Name :</b> '.$_SESSION['user_first_name'].' '.$_SESSION['user_last_name'].'</h3>';
            // echo '<h3><b>Email :</b> '.$_SESSION['user_email_address'].'</h3>';
            // echo '<h3><a href="logout.php">Logout</h3></div>';
            ?>
            </div>
          </div>
          
        </div>
        
      </div>
    </div>
  </div>

    <script>
      $(function() {
        'use strict';

        
        $('.form-control').on('input', function() {
          var $field = $(this).closest('.form-group');
          if (this.value) {
            $field.addClass('field--not-empty');
          } else {
            $field.removeClass('field--not-empty');
          }
        });

      });
    </script>
    <script src="js/jquery.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.4.4/cjs/popper.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/ajaxrequest.js"></script>
    
  </body>
</html>