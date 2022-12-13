<html>
<body>
<pre>
Beste <?php echo $_GET["firstname"]; ?>,
Bedankt voor het invullen van het formulier.
We zullen u binnenkort via <?php echo $_GET["email"]; ?> contacteren.
Met vriendelijke groet,
Team 
Uw bericht:
<?php echo $_GET["message"]; ?>
<?php
$to = "$_GET[email]";
$subject = "Bevestinging bericht ontvangen";
$txt = "Beste $_GET[firstname],
Bedankt voor het invullen van het formulier.
We zullen u binnenkort via $_GET[email] contacteren.
Met vriendelijke groet,
Team 
Uw bericht:
$_GET[message]";
$headers = "From: IUWGroep10@students.uu.nl".;

mail($to,$subject,$txt,$headers);
?>
</pre>
</body>
</html>