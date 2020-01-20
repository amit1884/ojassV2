<?php include_once 'nav.php';?>
<br>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/contact-2.css">
  <title>Contact Us</title>
</head>
<body>

<div class="contact-box" style='position:unset; width:90%; margin: 0 auto;'>  
  <br><br><br>
    <center><h1 style="color:#413e66;font-size:30px;font-family:batman, sans-serif;">Get in touch</h1></center><br>
    <form>      
  <input name="name" type="text" class="feedback-input" placeholder="Name" />   
  <input name="email" type="text" class="feedback-input" placeholder="Email" />
  <textarea name="text" class="feedback-input" style ="min-height:100px;"placeholder="Comment"></textarea>
  <input type="submit" value="SUBMIT"/>
</form>
<br>
    </div>
    <?php include_once 'footer.php';?>
</body>
</html>

<style>
 @font-face {
  font-family: batman;
  src: url(batmfa__.ttf) format('truetype');
}
</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>