<?php 

// keeping email address in PHP snippet to help prevent leaks

$email_submission = $_POST['email'];

$sql = 'INSERT INTO `newsletter` (email) VALUES  (\''. $email_submission . '\')';
$stmt = $modx->prepare($sql);
$stmt->execute();

$body = $modx->getChunk('pyxlSignup');
 
$modx->getService('mail', 'mail.modPHPMailer');
$modx->mail->set(modMail::MAIL_BODY,$body);
$modx->mail->set(modMail::MAIL_FROM,'sethhowell2197@gmail.com');
$modx->mail->set(modMail::MAIL_SUBJECT,'Newsletter Signup');
$modx->mail->address('to','webdev.seth@gmail.com');
$modx->mail->address('reply-to','me@xexample.org');
$modx->mail->setHTML(true);
$modx->mail->SMTPSecure = 'ssl';
if (!$modx->mail->send()) {
	return 'failed yo --- '.$modx->mail->mailer->ErrorInfo;
    $modx->log(modX::LOG_LEVEL_ERROR,'An error occurred while trying to send the email: '.$modx->mail->mailer->ErrorInfo);
}
$modx->mail->reset();


return $email_submission;