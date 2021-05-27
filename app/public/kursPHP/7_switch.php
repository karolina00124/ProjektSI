<html>
<head>
    <meta charset="UTF-8">
    <title>IF ELSE lekcja 6</title>
</head>
<body>
<h2>switch</h2>
<form action ="7_switch.php" method="get">
    <input type="number" name="numb" id="">
    <input type="submit" value="ok">
</form>
<?php
    if(isset($_GET['numb']) && is_numeric($_GET['numb'])) //jeżeli(true), warunek musi zwracać bool -> true lub false //ISSET czy jest ustanowiona // $_Get tablica globalna
    {
        $day = $_GET['numb'];
        echo 'dzień to: ' . $day . PHP_EOL;
        echo '<br>';

        switch($day) //instrukcja wyboru
        {
            case 1:
                echo 'Poniedziałek';
                break; //instrukcja skoku
            case 2:
                echo 'Wtorek';
                break;
            case 3:
                echo 'Środa';
                break;
            case 4:
                echo 'Czwartek';
                break;
            case 5:
                echo 'Piątek';
                break;
            case 6:
            case 7:
                echo 'weekend';
                break;
            default: //w przeciwnym wypadku, innym niż nazwane //OSTATNI ELEMENT instrukcji switch
                echo 'tydzień ma tylko 7 dni !!!';

        }

    }
    else
    {
      echo 'nie podano dnia!'. PHP_EOL;
        echo '<br>';
    }


?>

</body>
</html>
