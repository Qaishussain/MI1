 <script type="text/javascript">
      function RedirectionJavascript(){
        document.location.href="overons.php";
      }
   </script>
     <body onLoad="setTimeout('RedirectionJavascript()', 2000)">
<?php
if(isset($_POST['submit'])){
	
    $name = ($_POST['yourname']); 
    $email = ($_POST['email']); 
    $subject = ($_POST['subject']); 
    $message = ($_POST['comments']); 

    $email_from = $email;
    $email_to = 'hallo.qais@gmail.com';

    $body ='Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    mail($email_to, $subject, $body);
include("thanks.html"); }else{
	header('location: overons.php');
	exit(0);
}
    ?>
  
    
    </body> 