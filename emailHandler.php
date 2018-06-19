<?PHP
require 'email.php';

$data = array('alert' => '');

if(isset($_POST['name']) && !empty($_POST['name'])) {
  $name = addslashes($_POST['name']);
  $email = addslashes($_POST['email']);
  $message = addslashes($_POST['message']);

  if(!empty($name) && !empty($email) && !empty($message)) {

    //Create an instance of Email() Class and run sendMessage Method
    $e = new Email();
    if($e->sendMessage($name, $email, $message)) {
      $data['alert'] = 'Your message has been sent successfully';
    } else {
      $data['alert'] = false;
    }

    echo json_encode($data);
    exit;
  }
}
?>
