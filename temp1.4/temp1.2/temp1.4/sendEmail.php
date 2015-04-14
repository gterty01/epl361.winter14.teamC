<?php session_start(); ?>


<?php
$to = $_SESSION['email'];
echo $to;
$message = "Σας ενημερώνουμε ότι η εγγραφή σας έχει ολοκληρωθεί επιτυχώς.\r\n Πλέον, μπορείτε να βρείτε στο κατάστημα μας Κυπριακά Παραδοσικά προϊόντα, σε εξαιρετικές τιμές.\r\n\r\n Ευχαριστούμε, CyFoodMuseum.";
$subject = 'Εγγραφή CyFoodMuseum';
//$message = wordwrap($msg, 70, "\r\n");
//mail($to, $subject, $message);
if(@mail($to, $subject, $message))
{
  echo "Mail Sent Successfully";
}else{
  echo "Mail Not Sent";
}
header("Location: index.html");
die;
?>
