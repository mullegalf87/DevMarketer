<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>
<body>
  <?php

  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require($_SERVER['DOCUMENT_ROOT'].'/phpmailer/class.phpmailer.php');

  $name=$_POST["name"];
  $email=$_POST["email"];
  $message=$_POST["message"];

  $messaggio = new PHPmailer(true);
  $messaggio->SMTPSecure = "ssl";
  $messaggio->IsSMTP();
  $messaggio->IsHTML(true);
  $messaggio->Host='mail.ileniazitodesign.com';
  $messaggio->Port       = 465;  
  $messaggio->SMTPAuth = true; 
  $messaggio->Username='_mainaccount@ileniazitodesign.com';
  $messaggio->Password='}a3r6N:jKFF.i1!b'; //
  $messaggio->Mailer='smtp';
  $messaggio->FromName='Ileniadesign';
  $messaggio->Subject="Request ileniadesign";
  $messaggio->Body="
  <p>Name: ".$name."<br>
     Email: ".$email."<br>
     Message: ".$message."</p>";
     $recipients = array(
    'dario.rosciglione87@libero.it' => 'Person One',
    'ileniazitodesign@gmail.com' => 'Person Two',
    );
    foreach($recipients as $email => $name)
    {
        $messaggio->AddCC($email, $name);
    }

    $messaggio->Send();

    return "inviato";

  ?>
</body>
</html>



