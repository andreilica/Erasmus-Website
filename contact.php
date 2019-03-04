<?php
$field_name = $_POST['name'];
$field_email = $_POST['email'];
$field_message = $_POST['message'];

$mail_to = 'vampirul_14@yahoo.com';
$subject = $_POST['subject'];

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Multumim, va vom contacta cat de curand.');
		window.location = '.';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Eroare trimitere mesaj');
		window.location = '.';
	</script>
<?php
}
?>