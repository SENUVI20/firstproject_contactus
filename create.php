<?php
include_once 'config.php';

?>

<?php

    $username = $_POST['Username'];
    $email = $_POST['Email'];
    $subject = $_POST['Subject'];
    $additionalDetail = $_POST['AdditionalDetail'];
   
    $stmt = $conn -> prepare("insert into contact(username, email, subject, detail)
    values(?,?,?,?)");

    $stmt -> bind_param("ssss",$username, $email, $subject, $additionalDetail);
    $stmt -> execute();

    header("Location: contact.html");

    $stmt-> close();
    $conn ->  close(); 

    
?>