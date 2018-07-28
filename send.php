<?php

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$subject= $_POST['subject'];
$message=$_POST['message'];

$fname = htmlspecialchars($fname);
$lname = htmlspecialchars($lname);
$email = htmlspecialchars($email);
$subject=htmlspecialchars($subject);
$message=htmlspecialchars($message);

$fname = urldecode($fname);
$lname = urldecode($lname);
$email = urldecode($email);
$subject=urldecode($subject);
$message=urldecode($message);

$fname = trim($fname);
$lname = trim($lname);
$email = trim($email);
$subject=trim($subject);
$message=trim($message);

mail("dovid1989@gmail.com", "Заявка с сайта", "ФИО:".$fname.". E-mail: ".$email ,"From: info@svarog.dp.ua \r\n");

ini_set('display_errors','On');
error_reporting('E_ALL');

?>