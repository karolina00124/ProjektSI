

<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>

<?php
echo 'Hello World! \n';
echo "\t";
echo "Hello World! \n";
$wyswietl = "Bardzo";
$wyswietl .= " lubię";
$wyswietl .= " placki.";

// polecenie wyświetli napis:
// "Bardzo lubię placki."
echo $wyswietl;

// wyświetli napis:
// Moje motto to: "Bardzo lubię placki."
echo 'Moje motto to: "'.$wyswietl.'"';

?>

