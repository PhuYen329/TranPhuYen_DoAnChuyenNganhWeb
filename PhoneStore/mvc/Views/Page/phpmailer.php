 <?php
//include("/mvc/Views/include/config.php");
 define('ROOT',  dirname(__DIR__));
 include (ROOT."/PHPMailer-master/src/PHPMailer.php");
 include (ROOT."/PHPMailer-master/src/Exception.php");
 include (ROOT."/PHPMailer-master/src/OAuth.php");
 include (ROOT."/PHPMailer-master/src/POP3.php");
 include (ROOT."/PHPMailer-master/src/SMTP.php");
 use Symfony\Component\Mime\Email;
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;
 define('EMAIL', 'phuyen329@gmail.com');
 define('PASS', 'gxblluxxafamxpjd');
$email="DH51800004@student.stu.edu.vn";
$name="Hello";
$tilte="Yen";
$note="Bạn rất đẹp và tĩnh";
 $mail = new PHPMailer(true);
try {
   
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
                            echo "Order Success";
                            
                        }
                    
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


//  define('ROOT',  dirname(__DIR__));
//  include (ROOT."/PHPMailer-master/src/PHPMailer.php");
//  include (ROOT."/PHPMailer-master/src/Exception.php");
//  include (ROOT."/PHPMailer-master/src/OAuth.php");
//  include (ROOT."/PHPMailer-master/src/POP3.php");
//  include (ROOT."/PHPMailer-master/src/SMTP.php");
//  use PHPMailer\PHPMailer\PHPMailer;
//  use PHPMailer\PHPMailer\Exception;

// $error_msg=null;
// $success_msg=null;

// if ($_POST) {
//     //$name = isset($_POST['name']) ? filter_var($_POST['name'], FILTER_SANITIZE_STRING) : null;
//     //$email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) : null;
//     //$message = htmlspecialchars($_POST['message']);

//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $message = $_POST['message'];

//     if (empty($name) || empty($email) || empty($message)) {
//         $error_msg = 'Fill out required entry fields!';
//     }

//     if (is_null($error_msg)) {

//         $mail = new PHPMailer(TRUE);

//         $mail->isSMTP();
//         $mail->Host = "smtp.gmail.com";
//         $mail->SMTPAuth = true;
//         $mail->Username = "mail@gmail.com";
//         $mail->Password = "";
//         $mail->SMTPSecure = "tls";
//         $mail->Port = 587;

//         $mail->isHTML(true);
//         $mail->setFrom($email, $name);
//         $mail->addAddress("mail@gmail.com");
//         $mail->Subject = "Nowa wiadomość z formularza kontaktowego";
//         $mail->Body = $message;

//         $mail->send();

//         $success_msg = "Message sent.";
//     }
// }
?>
