<?php

$output = shell_exec('git pull');
echo "<pre>$output</pre>";

?>

<?php
// Gibt den Benutzernamen aus, unter dem der PHP/HTTPD-Prozess läuft
// (auf einem System in dem das Programm "whoami" im Ausführungspfad liegt)
echo exec('whoami');
?>