<?PHP
class Email {

  public function sendMessage($name, $email, $message) {

    $receiver = "eriksonmagno@outlook.com";
    $subject = "Contact Question";
    $msg_body = "Name: ".$name." - Email: ".$email."- \r\nMessage: ".$msg.".";
    $msg_head = "From: forwarder.erikson@eriksonoliveira.com"."\r\n".
              "Repĺy-To: ".$email."\r\n".
              "X-Mailer: PHP/".phpversion();


    mail($receiver, $subject, $msg_body, $msg_head);
    echo "<h2>Email Sucessfully Sent!</h2>";
    exit;
  }

}
?>