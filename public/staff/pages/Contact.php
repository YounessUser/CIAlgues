<?php require_once('../../../private/initialize.php'); ?> 


<?php 
if(is_post_request()){
    
$mailfrom = $_POST['email'];
    $mailSub = $_POST['subject'];
    $mailMsg = $_POST['message'];
    $mailerName = $_POST['name'];
   $mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 2; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = E_MAIL;
$mail->Password = PASSWORD_MAIL;
#$mail->From= $mailfrom;
#$mail->FromName=$mailerName;
$mail->setFrom($mailfrom,"{$mailerName} <{$mailfrom}>");
#$mail->setFrom($mailfrom,$mailfrom);
$mail->Subject = $mailSub;
$mail->Body = $mailMsg;
$mail->Timeout = 1000;
$mail->SMTPAutoTLS = TRUE;
$mail->AddAddress(E_MAIL);
#$mail->AddAddress("melato@tinoza.org");
   
   if(!$mail->Send())
   {
       echo "Mail Not Sent".$mail->ErrorInfo;
   }
}
?>
<?php include(SHARED_PATH . '/Header.php'); ?>

<div class="section">
    <div class="pageContent">
        <!-- contact -->
        <div class="contact" id="contact">
                <h3 class="w3ls-title"><?=$contact_contenu[0];?></h3>
                <div class="agile-contact-form">
                    <div class="col-md-4 contact-form-left">
                        <div class="w3layouts-contact-form-top">
                            <h3>Contact info</h3>
                            <address>
                                Visit us at:<a href="http://cialgues-2018.uca.ma">cialgues-2018.uca</a>.<br>
                                Secrétariat du cialgues-2018:  Pr. H. BOUAMAMA  <br>
                                LBVPA, FSTG, BP 549, 40 000, Marrakech-Morocco <br>
                                Tél:  212 524 433 404 (Poste 321) <br> Fax: 212 524 433 170 <br>
                                E-mail: cialgues2018@gmail.com
                            </address>

                        </div>
<!--                        <div class="agileits-contact-address">
                            <h3>Follow us on</h3>
                            <div class="social">
                                <ul>
                                    <li>
                                        <a href="#" class="fa fa-facebook"> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-twitter"> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-google-plus"> </a>
                                    </li>
                                    <li>
                                        <a href="#" class="fa fa-linkedin"> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>-->
                    </div>
                    <div class="col-md-8 contact-form-right">
                        <div class="contact-form-top">
                            <h3><?=$contact_contenu[1];?></h3>
                        </div>
                        <div class="agileinfo-contact-form-grid">
                            <form action="#" method="post">
                                <input type="text" name="name" placeholder="<?=$contact_contenu[2];?>" required="">
                                <input type="text" name="subject" placeholder="<?=$contact_contenu[3];?>" required="">
                                <input type="email" name="email" placeholder="<?=$contact_contenu[4];?>" required="">
                                <textarea name="message" placeholder="<?=$contact_contenu[5];?>" required=""></textarea>
                                <button class="btn1">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
        </div>
        <!-- contact -->
    </div>
</div>





<?php include(SHARED_PATH . '/Footer.php'); ?>
<?php include(SHARED_PATH . '/staff_footer.php'); ?>