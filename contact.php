<html>
<body>
<pre>
Beste <?php echo $_POST["firstname"]; ?>,
Bedankt voor het invullen van het formulier.
We zullen u binnenkort via <?php echo $_POST["email"]; ?> contacteren.
Met vriendelijke groet,
Team 
Uw bericht:
<?php echo $_POST["message"]; ?>
<?php
$to = $_POST['email'];
$subject = "Bevestinging bericht ontvangen";
$txt = "Beste $_POST['firstname'],
Bedankt voor het invullen van het formulier.
We zullen u binnenkort via $_POST['email'] contacteren.
Met vriendelijke groet,
Team 
Uw bericht:
$_POST['message']";
$headers = "From: IUWGroep10@students.uu.nl";

mail($to,$subject,$txt,$headers);
?>
<?php
$myfile = fopen($_POST["firstname"].$_POST["lastname"].".txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
$txt = "Neem contact op met $_POST['firstname'].$_POST['lastname'] op Email: $_POST['email']";
fclose($myfile);
?>
</pre>
</body>
</html>