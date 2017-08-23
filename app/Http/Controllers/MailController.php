<?php

namespace App\Http\Controllers;


use Mail;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\SendRequest;
require '../vendor/autoload.php';
use Mailgun\Mailgun;

class MailController extends Controller
{
    public function basic_email(Request $request){
        $email = $request->get('inputEmail');
        $name = $request->get('username');
        $phone = $request->get('phone');
        $message = $request->get('message');
        // $valEmail = substr($email, -3, 3);
        // if ($valEmail != 'com') {
        //     echo 'Please enter correct email address';
        // }
        // if ($message == null) {
        //     echo "Message is empty";
        // }
        
        $msg = 'Message from: '.$name.' Phone No. '.$phone.' Message: '.$message;
        
        $mgClient = new Mailgun('key-e22f13ae9bc5377239d19d9f4f91aad7');
        $domain = "sandbox3ac26d2de11d4c39aea6de0b5f89e79c.mailgun.org";

      $result = $mgClient->sendMessage("$domain",
          array('from'    => 'Mailgun Sandbox <postmaster@sandbox3ac26d2de11d4c39aea6de0b5f89e79c.mailgun.org>',
                'to'      => 'Psyphertxt <franciskornu@psyphertxt.com>',
                'subject' => 'Hello Psyphertxt',
                'text'    => $msg));

   }

   public function html_email(){
      require '../PHPMailerAutoload.php';

        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'franciskornu@gmail.com';   // SMTP username
        $mail->Password = '58e72a7d34c805b86be67ed0abe9416b';                           // SMTP password
        $mail->SMTPSecure = 'tls';                            // Enable encryption, only 'tls' is accepted

        $mail->From = 'postmaster@sandbox3ac26d2de11d4c39aea6de0b5f89e79c.mailgun.org';
        $mail->FromName = 'Mailer';
        $mail->addAddress('fkay0450@gmail.com');                 // Add a recipient

        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

        $mail->Subject = 'Hello';
        $mail->Body    = 'Testing some Mailgun awesomness';

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Message has been sent';
        }

   }
   
   public function attachment_email(){
      $data = array('name'=>"Virat Gandhi");
      Mail::send('mail', $data, function($message) {
         $message->to('abc@gmail.com', 'Tutorials Point')->subject
            ('Laravel Testing Mail with Attachment');
         $message->attach('C:\laravel-master\laravel\public\uploads\image.png');
         $message->attach('C:\laravel-master\laravel\public\uploads\test.txt');
         $message->from('xyz@gmail.com','Virat Gandhi');
      });
      echo "Email Sent with attachment. Check your inbox.";
   }
}
