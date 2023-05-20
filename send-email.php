<?php
if(isset($_POST['email'])) {
     
    // EDIT THE FOLLOWING LINES BELOW TO YOUR EMAIL ADDRESS AND SUBJECT
    $email_to = "thinkyours7@gmail.com";
    $email_subject = "Support Request";
     
     
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
     
     
    // validation expected data exists
    if(!isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
     
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $subject = $_POST['subject']; // required
    $message = $_POST['message']; // required
     
    $error_message = "";
     
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+.[A-Za-z]{2,}$/';

