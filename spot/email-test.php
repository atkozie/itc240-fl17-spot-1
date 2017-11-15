<?php
//email-test.php

if(mail("atkozie@gmail.com", "Subject Line Goes Here", "Test Email")){
    echo 'Email sent';
}else{
    echo 'Email not sent!';
}

