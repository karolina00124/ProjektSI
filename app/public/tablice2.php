<?php
require  dirname(__DIR__) .'/debug.php'; //przejscie do katalogu wyzej i do pliku debug
?>
<?php
foreach ($_GET as $key => $value)
{
    echo $key . ':' . $vslue . '<br>';
}
if (isset($_GET['var1']))
{
    echo $key . ':'. $value . '<br>';
}
?>
