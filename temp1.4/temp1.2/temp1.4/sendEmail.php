<?php session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php
$to = $_SESSION['email'];
echo $to;
$message = "Σας ενημερώνουμε ότι η εγγραφή σας έχει ολοκληρωθεί επιτυχώς. \r\n Πλέον, μπορείτε να βρείτε στο κατάστημα μας Κυπριακά Παραδοσικά προϊόντα, σε εξαιρετικές τιμές. \r\n \r\nΕυχαριστούμε, CyFoodMuseum.";
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

</body>

</html>

