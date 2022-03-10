 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>
<body>
  <?php


  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require("./phpmailer/class.phpmailer.php");

  $username=$_POST["username"];
  $email=$_POST["email"];
  $date_expiration=$_POST["date_expiration"];

  
  $messaggio = new PHPmailer(true);
  $messaggio->SMTPSecure = "ssl";
  $messaggio->IsSMTP();
  $messaggio->SMTPDebug  = 1;
  $messaggio->IsHTML(true);
  $messaggio->Host='smtps.aruba.it'; //smtp.gmail.com
  $messaggio->Port       = 465;  
  $messaggio->SMTPAuth = true; 
  $messaggio->Username='d.rosciglione@panema.it'; //dario.rosciglione87@gmail.com
  $messaggio->Password='Dario1234'; //
  $messaggio->Mailer='smtp';
  $messaggio->FromName='Bookmap';
  $messaggio->Subject="Subscription purchase";
  $messaggio->Body =
  "<h1>Thank you for your purchase.</h1>
  <h2>Summary subscription</h2>
  <h3>Username :  ".$username."
  <br>Email : ".$email."
  <br>Date Expiration : ".$date_expiration."
  <br>Total price:  ".$_POST["sum"]." &euro;
  </h3>
  ";

  $messaggio->Body .='<p>For any problems contact us to mail: dario.rosciglione87@libero.it<br>
  Goodbye<p>';

  $recipients = array(
   'dario.rosciglione87@libero.it' => 'Person One',
    $email => 'Person Two',
  );
  foreach($recipients as $email => $username)
  {
     $messaggio->AddCC($email, $username);
  }
 
  // $messaggio->AddAddress("dario.rosciglione87@libero.it");
  // $messaggio->AddAddress($email);



  return $messaggio->Send();

  ?>

 
</body>
</html>



