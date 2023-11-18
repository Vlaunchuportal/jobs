<?php
if(!isset($_SESSION)) {
    session_start();
}
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
              <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p>
            </div>
            <FORM id="reguser" onsubmit="return checkForm()" METHOD="post" ACTION="process_user.php" enctype="multipart/form-data" class="form-horizontal">
              <div class="form-group first">
                
                <input type="text" class="form-control" id="rname" name="rname" placeholder="Full Name">
                <label id="emailerror" class="error" ></label>

              </div>
              <div class="form-group first">
                
                <input type="email" class="form-control" id="remail" name="remail" placeholder="Email">
                <label id="emailerror" class="error" ></label>

              </div>
              <div class="form-group last mb-4">
                
                <input type="password" class="form-control" id="rpassword" name="rpassword" placeholder="Enter New Password">
             
                
              </div>
              <div class="form-group last mb-4">
                
                <input type="text" class="form-control" id="rnum" name="rnum" placeholder="Contact No.">
             
                
              </div>
              
              <input type="checkbox" id="subscribe" name="subscribe" value="1">
              <label for="vehicle1">Subscribe to our Exclusive Vlaunchu newsletters for regular intervals of offers!</label><br>

              
              <button class="btn text-white btn-block btn-primary" type="button" onclick="addRecr()">Register</button>
              
              
              <span class="d-block text-left my-4 text-muted"> or register with</span>

              
              <div class="social-login">
                <a href="#" class="facebook">
                  <span class="icon-facebook mr-3"></span> 
                </a>
                <a href="#" class="twitter">
                  <span class="icon-twitter mr-3"></span> 
                </a>
                <a href="#" class="google">
                  <span class="icon-google mr-3"></span> 
                </a>
              </div>
              <span id="statusLogMsg"></span>
            </FORM>
            
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