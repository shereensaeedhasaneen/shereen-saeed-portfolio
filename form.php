
<?php  

if(isset($_POST['submit'])) {
 $mailto = "sheerysaeed123@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $fromEmail = $_POST['email']; //getting customer email
 $fromMessage = $_POST['message']; //getting customer message 


 //Email body I will receive
 $message = "Cleint Name: " . $name . "\n"
 . "Client Message: " . $fromMessage . "\n\n"
 ;


 //Email headers
 $headers = "From: " . $fromEmail; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client

 //PHP mailer function

  $result1 = mail($mailto, $message, $headers); // This email sent to My address
  $result2 = mail($fromEmail, $fromMessage, $headers2); //This confirmation email to client

  //Checking if Mails sent successfully

  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }

}

?>