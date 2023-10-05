<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $subject_1 = $_POST["subject"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  
  $to = "aishahanna363@gmail.com"; // Replace with your desired email address
  $subject = $subject_1;
  $body = "From: " . $name ."\n\nPhone: " . $phone."\n\n Message:".$message;
  $headers = "From: " . $name . " < ".$email." >\r\n";
  if (mail($to, $subject, $body, $headers)) {
    $_SESSION["reply"]  = "Message sent successfully.";
    header("Location: index.php?mail=success#cta");
  } else {
    $_SESSION["reply"]  = "Message could not be sent.";
 
  }
}

?>