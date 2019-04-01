<?php

$fname = $_POST["firstname"];
$lname = $_POST["lastname"];
$mail = $_POST["mail"];
$reason = $_POST["reason"];
$subject = $_POST["subject"];

$empfaenger = "info@prometheus-racing.de";
$betreff = $reason;
$from = "From: $fname $lname $mail <admin@prometheus-racing.de>";
$text = $subject;

mail($empfaenger, $betreff, $text, $from);
?>
<h1>Wir haben ihre Nachricht erfolgreich erhalten!</h1>

<script language="JavaScript" type="text/javascript">
setTimeout("location.href='/'", 1000); //1000 Millisekunden
</script>
