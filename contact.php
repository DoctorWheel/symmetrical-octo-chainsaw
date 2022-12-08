<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

Beste <?php echo $_GET["fname"]; ?><,
Bedankt voor het invullen van het formulier. We zullen u binnenkort
via uw <?php echo $_GET["email"]; ?> contacteren .
Met vriendelijke groet,
Team
Uw bericht:
<?php echo $_GET["message"]; ?>
</body>
</html>