<?php
 
// Get values from the form
$name=@htmlspecialchars($_POST['name']);
$email=@htmlspecialchars($_POST['email']);
$objet=@htmlspecialchars($_POST['subject']);
$monmessage=@htmlspecialchars($_POST['message']);
 
$to = "alexmorand26@gmail.com";
$subject = "Devis en ligne";
$message = " Name: " . $name . "\r\n objet: " . $objet . "\r\n Email: " . $email . "\r\n Monmessage: " . $monmessage;
 
 
$from = "adomservice2607";
$headers = "From:" . $from . "\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
 
if(@mail($to,$subject,$message,$headers))
{
  print "<script>document.location.href='http://adomservice2607.com';</script>";
}else{
  echo "Erreur! Veuillez Remplir les Champs Requis.";
}

?>