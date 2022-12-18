<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IUW Webopdracht | Contact</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <script src="https://kit.fontawesome.com/cc5b65ca39.js" crossorigin="anonymous"></script>
</head>
<body>
<header>
        <div class="container">
            <div class="wrapper">
                <div class="icon">
                    <h1><a href="index.html"><i class="fa-sharp fa-solid fa-house"></i></a></h1>
                </div>
                <h1>IUW Webopdracht</h1>    
            </div>
            <div class="nav">
                <ul>
                    <li><a href="index.html">Voorpagina</a></li>
                    <li><a href="images.html">Foto's</a></li>
                    <li><a href="video.html">Video</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>    
            </div>
        </div>
    </header>
    <content>
        <div class="content-wrapper">
            <h2>Contact</h2>
            <p>
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
            $txt = "Beste $_POST[firstname],
            Bedankt voor het invullen van het formulier.
            We zullen u binnenkort via $_POST[email] contacteren.
            Met vriendelijke groet,
            Team 
            Uw bericht:
            $_POST[message]";
            $headers = "From: IUWGroep10@students.uu.nl";

            mail($to,$subject,$txt,$headers);
            ?>
            <?php
            $myfile = fopen($_POST["firstname"].$_POST["lastname"].".txt", "w") or die("Unable to open file!");
            $txt = "Neem contact op met $_POST[firstname].$_POST[lastname] op Email: $_POST[email]";
            fwrite($myfile, $txt);
            fclose($myfile);
            ?>
            </p>
        </div>
    </content>
    <footer>
        <p>Werkgroep 4 - Groep 10 © 2022</p>
    </footer>
</body>
</html>