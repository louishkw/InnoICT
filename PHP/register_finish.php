<?php session_start(); ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
include("condatabase.php");
 ini_set('SMTP','localhost');
ini_set('sendmail_from','lu1@lutest.idv.tw');


$id = $_POST['InputAccountName'];
$pw = $_POST['InputPassword1'];
$pw2 = $_POST['InputPassword2'];
$email = $_POST['Email'];
$activationKey =  mt_rand() . mt_rand() . mt_rand() . mt_rand() . mt_rand();
$subject = " ur2doc.com Registration";
$message = "Welcome to our website!\r\rYou, or someone using your email address, has completed registration at ur2doc.com. You can complete registration by clicking the following link:\rlocalhost/InnoICT-master/PHP/verify.php?$activationKey\r\rIf this is an error, ignore this email and you will be removed from our mailing list.\r\rRegards,\ YOURWEBSITE.com Team";

$headers = 'From: noreply@ ur2doc.com' . "\r\n" .
	 
	    'Reply-To: noreply@ ur2doc.com' . "\r\n" .
	 
	    'X-Mailer: PHP/' . phpversion();

if($id != null && $pw != null && $pw2 != null && $email != null && $pw == $pw2)
{

    $sql = "INSERT INTO `member`( `email`, `password`, `username`,`activationkey`,`status`) VALUES ('$email','$id','$pw','$activationKey','0')" ; 
    if(mysqli_query($conn , $sql) ){
        echo "success" ; 
        
        echo "An email has been sent to '$email' with an activation key. Please check your mail to complete registration.";
        
        //ini_set('sendmail_from','ruler750@gmail.com');
        mail($email, $subject, $message, $headers);


    }
}



?>