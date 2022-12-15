<?php
$myfile = fopen($_POST["firstname"].$_POST["lastname"].".txt", "w") or die("Unable to open file!");
fwrite($myfile, $txt);
$txt = "Neem contact op met $_POST[firstname].$_POST[lastname] op Email: $_POST[email]";
fclose($myfile);
?>