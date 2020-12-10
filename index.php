<?php

   require 'vendor/autoload.php';

   $from = new SendGrid\Email(null, "vermakrishna5606@gmail.com");
   $subject = "Hello World from the SendGrid PHP Library!";
   $to = new SendGrid\Email(null, "emartecomsite2020@gmail.com");
   $content = new SendGrid\Content("text/plain", "Hello, Email!");
   $mail = new SendGrid\Mail($from, $subject, $to, $content);

   $apiKey = getenv('SENDGRID_API_KEY');
   $sg = new \SendGrid($apiKey);

   $response = $sg->client->mail()->send()->post($mail);
   echo $response->statusCode();
   echo $response->headers();
   echo $response->body();
?>
