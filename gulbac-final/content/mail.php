<?php
$numero2 = count($_POST);
$tags2 = array_keys($_POST); // obtiene los nombres de las varibles
$valores2 = array_values($_POST);// obtiene los valores de las varibles

// crea las variables y les asigna el valor
for($i=0;$i<$numero2;$i++){ 
    $$tags2[$i]=$valores2[$i]; 
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="robots" content="all" />
</head>
<body>

<?php 
if ($captcha == '' and $nombre != '' and $apellido != '' and $mailto != '' and $mensaje != '') 
{
    //define the receiver of the email
    $to = 'admins@gulbac.org.ar';
    //define the subject of the email
    $subject = 'Nuevo mensaje desde gulbac.org.ar';
    //define the message to be sent. Each line should be separated with \n
    $message = "El Sr/a. $nombre $apellido escribio el siguiente mensaje \n $mensaje";
    //define the headers we want passed. Note that they are separated with \r\n
    $headers = "From: $mailto\r\nReply-To: $mailto";
    //send the email
    $mail_sent = @mail( $to, $subject, $message, $headers );
    //if the message is sent successfully print "Mail sent". Otherwise print "Mail failed" 
    echo $mail_sent ? "<h2>Mail enviado satisfactoriamente.</h2>" : "<h2>Error: Mail no enviado.</h2>";
}
else
{
echo "<h2>Error: Mail no enviado.</h2><p>Asegurese que todos los campos est&eacute;n completados.</p>";
}
?>

</body>
</html>
