<?php
   define('FILE',  dirname(__DIR__));
    use Symfony\Component\Mime\Email;
    require FILE.'/PHPMailer-5.2-stable/PHPMailerAutoload.php';
    define('EMAIL', 'phuyen329@gmail.com');
    define('PASS', 'gxblluxxafamxpjd');
class Mailer{
public function dathang($name,$email,$note,$tilte){
                        $mail = new PHPMailer;
                        $mail->CharSet="UTF-8";
                        // $mail->SMTPDebug = 4;                               // Enable verbose debug output
                    
                        $mail->isSMTP();                                      // Set mailer to use SMTP
                        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                        $mail->SMTPAuth = true;                               // Enable SMTP authentication
                        $mail->Username = EMAIL;                 // SMTP username
                        $mail->Password = PASS;                           // SMTP password
                        $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                        $mail->Port = 587;                                    // TCP port to connect to
                    
                        $mail->setFrom($email, EMAIL);
                        $mail->addAddress(EMAIL,"Customer"); 
                        $mail->addAddress($email);     // Add a recipient
                    
                        //$mail->addReplyTo(EMAIL);
                        // $file=$_FILES['file']['tmp_name'];
                        // print_r($_FILES['file']); exit;
                        // for ($i = 0; $i < count($_FILES['file']['tmp_name']); $i++) {
                        //     $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
                        // }
                        $mail->isHTML(true);                                  // Set email format to HTML
                    
                        $mail->Subject = "Customer's Name:".$name.",".$tilte;
                        $mail->Body    = $note;
                        // $mail->AltBody = $note;
                    
                        if (!$mail->send()) {
                            echo 'Message could not be sent.';
                            echo 'Mailer Error: ' . $mail->ErrorInfo;
                        } else {
                            $sucess = "Order Success";
                            
                        }
                    }
                }