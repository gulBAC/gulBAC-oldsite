<?php
$numero2 = count($_POST);
$tags2 = array_keys($_POST); // obtiene los nombres de las varibles
$valores2 = array_values($_POST);// obtiene los valores de las varibles

// crea las variables y les asigna el valor
for($i=0;$i<$numero2;$i++){ 
  $$tags2[$i]=$valores2[$i];
}

if ($captcha == '' and $nombre != '' and $apellido != '' and $mailto != '' and $mensaje != '') 
{
    //define the receiver of the email
    $to = 'admins@gulbac.org.ar';
    //define the subject of the email
    $subject = 'Nuevo mensaje desde gulbac.org.ar';
    //define the message to be sent. Each line should be separated with \n
    $message = "$nombre $apellido escribio el siguiente mensaje:\n\n$mensaje";
    //define the headers we want passed. Note that they are separated with \r\n
    $headers = "From: $nombre $apellido <$mailto>\r\nReply-To: $mailto";
    //send the email
    $mail_sent = @mail( $to, $subject, $message, $headers );
    //if the message is sent successfully print "Mail sent". Otherwise print "Mail failed"
    if ($mail_sent) {
      $loc='/contacto/exito';
    } else {
      $loc='/contacto/fracaso';
    }
    //echo $mail_sent ? "<h2>Mail enviado satisfactoriamente.</h2>" : "<h2>Error: Mail no enviado.</h2>";
} else {
  $loc='/contacto/fracaso-campos';
  //echo "<h2>Error: Mail no enviado.</h2><p>Asegurese que todos los campos est&eacute;n completados.</p>";
}

header("Location: $loc");
