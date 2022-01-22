<?php

use Symfony\Component\Mime\Email;

if (isset($_POST['sendmail'])) {
    define('ROOT',  dirname(__DIR__));
    require ROOT.'/PHPMailer-5.2-stable/PHPMailerAutoload.php';
    define('EMAIL', 'phuyen329@gmail.com');
    define('PASS', 'gxblluxxafamxpjd');

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

    $mail->setFrom(EMAIL, $_POST['name']);
    $mail->addAddress(EMAIL);     // Add a recipient

    $mail->addReplyTo(EMAIL);
    // $file=$_FILES['file']['tmp_name'];
    // print_r($_FILES['file']); exit;
    // for ($i = 0; $i < count($_FILES['file']['tmp_name']); $i++) {
    //     $mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
    // }
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $_POST['subject'];
    $mail->Body    = '<div style="border:1px solid red;">'.$_POST['message'].'</b></div>';
    $mail->AltBody = $_POST['message'];

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
        //header('Location:'.$a.'/Home');
    }
}
?>
<main role="main">
    <!-- Block content - Đục lỗ trên giao diện bố cục chung, đặt tên là `content` -->
    <div class="container mt-2">
        <h1 class="text-center">Contact Phone's Store</h1>
        <div class="row">
            <div class="col col-md-6">
                <img src="https://cdn.viettelstore.vn/Images/Product/ProductArchive/27/%E1%BB%A8ng%20d%E1%BB%A5ng%20hay/1-Thang%209/28%2009/2/google-photos-01.jpg" width="500px">
            </div>
            <div class="col col-md-6">
                <form method="post" action="" id="myForm ">
                    <div class="row">
                        <div class="col-sm-9 form-group">
                            <label for="name">Your Name</label>
                            <input type="text" class="form-control" id="email" name="name" placeholder="Enter your name" maxlength="50">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-9 form-group">
                            <label for="subject">Subject:</label>
                            <input type="text" class="form-control" id="subject" name="subject" value="Test Mail with attachments" maxlength="50">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-9 form-group">
                            <label for="name">Message:</label>
                            <textarea class="form-control" type="textarea" id="message" name="message" placeholder="Your Message Here" maxlength="6000" rows="4"></textarea>
                        </div>
                    </div>
                    <!-- <div class="row">
                        <div class="col-sm-9 form-group">
                            <label for="name">File:</label>
                            <input name="file[]" multiple="multiple" class="form-control" type="file" id="file">
                        </div>
                    </div> -->
                    <div class="row">
                        <div class="col-sm-9 form-group">
                            <button type="submit" name="sendmail" class="btn btn-lg btn-success btn-block">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col col-md-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3928.7235485722294!2d105.78061631523369!3d10.039656175103817!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a062a768a8090b%3A0x4756d383949cafbb!2zMTMwIFjDtCBWaeG6v3QgTmdo4buHIFTEqW5oLCBBbiBI4buZaSwgTmluaCBLaeG7gXUsIEPhuqduIFRoxqEsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1556697525436!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>
    <!-- End block content -->

</main>

<!-- footer -->

<!-- end footer -->

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="../asset/popperjs/popper.min.js"></script>
<script src="../asset/bootstrap/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Custom script - Các file js do mình tự viết -->
<script src="../assets/js/app.js"></script>
<!-- <script src="text/javascript">
        function sendMail(){
            var name=$("#name");
            var email=$("#email");
            var message=$("#message");
            if(isNotEmty(name)&&isNotEmty(email)&&isNotEmty(message)){
                $.ajax({
                    url:'sendMail.php',
                    method:'POST',
                    dataType:'JSON',
                    data:{
                        name:name.val(), 
                        email:email.val(),
                         message:message.val(),
                    },success:function(reopen){
                        $('#myForm')[0].reset;
                        $('#Sent').text('Message send successfully');
                    }


                })
            }
        }
        function isNotEmty(caller){
if(caller.val()==""){
    caller.css('border','1px solid red');
    return false;
}else{
    caller.css('border'," ");
    return true;  
}
        }
    </script> -->