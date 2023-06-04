<?php
$error = "";
$successMessage ="";

if($_POST){

    if(!$_POST['email']){
        $error .= "Email is required. <br>"; 
    }
    if($_POST['email'] && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false ){
        $error .= "Email does not exist. <br>"; 
    }
    if(!$_POST['subject']){
        $error .= "Sujbect is required. <br>"; 
    }
    if(!$_POST['message']){
        $error .= "Content message is required. <br>"; 
    }
    if($error !=""){
        $error = "<div class='alert alert-danger' role='alert'>". $error ."</div>";
    }
    else{
        $emailTo = "ayezabashir442@gmail.com";
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = "From: " . $_POST['email'];

        if ( mail($emailTo, $subject, $message, $headers)){
            $successMessage = "Your mail was sent";
        }
        else{
            $error="Failed to sent!";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <title>Contact Form</title>
  </head>
  <body>
    <div class="container">

        <div id="error"><?php echo $error.$successMessage; ?></div>

        <form method="POST">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Email" class="form-control" >
            <small class="form-text text-muted">We will never share your email with anyone else</small>
        </div>

        <div class="form-group">
           <label for="subject">Subject</label>
           <input type="text" name="subject" id="subject" placeholder="Subject" class="form-control" > 
        </div>
        
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows=5></textarea>
        </div>
        
        <button type="submit" name="submit" class="btn btn-success" >Submit</button>
    </form>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="main.js"></script> 
  </body>
</html>
