 <script type="text/javascript">
      function RedirectionJavascript(){
        document.location.href="overons.php";
      }
   </script>
     <body onLoad="setTimeout('RedirectionJavascript()', 2000)">
<?php
if(isset($_POST['submit'])){
	
    $name = ($_POST['name1']); 
    $email = ($_POST['email']); 
    $subject = ($_POST['subject']); 
    $message = ($_POST['comment']); 

    $email_from = $email;
    $email_to = 'qais.hussain@student.odisee.be';

    $body = 'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Subject: ' . $subject . "\n\n" . 'Message: ' . $message;

    mail($email_to, $subject, $body);
print'Jouw message is succesvol doorgestuurd!<br>
Dank u om ons te contacteren, we nemen zo snel mogelijk contact met u.'; }else{
	header('location: overons.php');
	exit(0);
}
    ?>
 
    
    </body> 