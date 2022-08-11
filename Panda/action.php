<?php


/*session_start();
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
 $db = mysqli_connect("localhost", "root", "", "mailer");

  $msg = "";
  if (isset($_POST['encrypt'])) {
    
    
    // $email = martha.kwamboka
    $subject =$_POST['text'];
    $message =$_POST['Key'];
  
    
    mysqli_query($db, $sql);
    require 'encryption.php';

   $mail = new PHPMailer(true);                             
    //Server settings
    $mail->isSMTP();                                     
    $mail->Host = 'smtp.gmail.com';                      
    $mail->SMTPAuth = true;                               
    $mail->Username = 'kenyanyamartha27@gmail.com';     
    $mail->Password = '';                    
    $mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );                         
    $mail->SMTPSecure = 'ssl';                           
    $mail->Port = 465;                                   

    $mail->setFrom('kenyanyamartha27@gmail.com');
    
    //Recipients
    $mail->addAddress($email);              
    $mail->addReplyTo('kenyanyamartha27@gmail.com');
   
    //Content
    $mail->isHTML(true);                                  
    $mail->Subject = $text;
    $mail->Body    = $Key
    ;

    $mail->send();

   
    unset($_SESSION['email']);

    $_SESSION['success'] = 'Message sent .';
    header('location: action.php');

        
}*/


 if(isset($_POST['encrypt'])){

     $simple_string = $_POST['text'];

     $_POST['Key']= rand(1,100);
     echo "plaintext: " . $simple_string=$_POST['text'];
     echo "<br>";
     echo "<br>";
     $ciphering = "des-cbc"; //DES Cipher command
     $option = 0; //holds the bitwise disjunction of the flags
     $encryption_iv='12345678'; //holds the initialization vector which is not null
     $encryption= openssl_encrypt($simple_string= $_POST['text'],$ciphering,$simple_string = $_POST['Key'],$option,$encryption_iv);
     $encryption_key=''; //can set password
     echo "Encrypted Data: " .$encryption;
     echo "<br>";
     echo "<br>";
      echo "Generated key: " .$_POST['Key'];
     
    
 }

 if(isset($_POST['decrypt'])){

     $text = $_POST['text'];
     $key = $_POST['key'];
     $ciphering = "des-cbc"; //DES Cipher command
     $option = 0;
     $decryption_iv = '12345678';
     $decryption = openssl_decrypt($text = $_POST['text'],$ciphering, $key = $_POST['key'],$option,$decryption_iv);
     echo "Decrypted Data: " .$decryption;
     echo "<br>";
     echo "<br>";
     echo "Key Used: " .$key;
     echo "<br>";   
 }
  
 
?>