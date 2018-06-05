<?PHP
class Email {

  public function sendMessage($name, $email, $message) {

    $receiver = "eriksonmagno@outlook.com";
    $subject = "Contact Question";
    
    //Email headers
    $msg_header = 'MIME-Version: 1.0'."\r\n";
    $msg_header .= 'Content-type: text/html; charset=utf-8'."\r\n";
    
    $msg_header = "From: forwarder.erikson@eriksonoliveira.com"."\r\n".
              "Repĺy-To: ".$email."\r\n".
              "X-Mailer: PHP/".phpversion();

    //Message
    $msg_body = "<html><body>";
    $msg_body .= "<h3>Message from: ".$name."</h3>";
    $msg_body .= "<p>Email: ".$email."</p>";
    $msg_body .= "</br></br>";
    $msg_body .= "<p>".$message."</p>";
    $msg_body .= "</body></html>";

    //Sending email
    if(mail($receiver, $subject, $msg_body, $msg_header)){
      return true;
    } else {
      return false;
    }
  }
}
?>
