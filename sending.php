<?php
 $emailTo=$_POST["smail"];
 $subject=$_POST["sub"];
 $body=$_POST["bod"];
 $header="From:lola@gmail.com";
 if(mail($emailTo,$subject,$body,$header))
   	echo "<script type='text/javascript'>alert('Message Sent');</script>";
 else
    echo "<script type='text/javascript'>alert('Message NOT Sent, Try Again.');</script>";
?>