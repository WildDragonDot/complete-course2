<?php

$emaiTo="shreyakad2001@gmail.com";
$subject="This is a subject";
$body="This is a body";
$headers="From:kadshreya07@gmail.com";

if(mail($emaiTo,$subject,$body,$headers)){
    echo "Email sent successfully!!";
}else{
    echo "Sorry,Email not sent";
}

?>