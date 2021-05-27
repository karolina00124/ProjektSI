<?php
require  dirname(__DIR__) .'/debug.php'; //przejscie do katalogu wyzej i do pliku debug

$tablica_request=['var1','var2']; // z jakich pol formularza moja aplikacja ma kozystac
$user = [];
foreach($tablica_request as $key) //przechodze po tablicy pol z formularza i jak sa to przepisuje jak nie to pusta
{
    $user[$key] = isset($_GET[$key]) ? $_GET[$key] : '';
}

echo $user['var1'];
?>