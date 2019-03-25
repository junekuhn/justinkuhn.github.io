<?php 

if (isset($_POST['submit'])) {
    $uname = $_POST['uname'];
    $message = $_POST['message'];
//    repeat for number of inputs
    
    $mailTo = "justintkuhn@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an email";
    
    mail($mailTo, $txt, $message, $headers);
    
    header("Location: index.html?mailsend");
}


?>
