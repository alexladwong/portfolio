<?
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $message = $_POST['message'];
      $to = "alexladwongo@gmail.com"; //";
      $subject = "New Message from Contact Form";

      $body = "Name: $name\nEmail: $email\nMessage: $message";

      mail($to, $subject, $body);

      header("Location: thank-you.html");
?>