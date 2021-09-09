<?php
$to = "kartik292000@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "Fro" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$txt,$headers);
?>