<html>
<head>
   <meta charset="UTF-8">
    <title>IF ELSE lekcja 6</title>
</head>
<body>
<h2>instrukcje warunkowe</h2>
<form action ="6_if_else.php" method="get">
    <input type="number" name="numb" id="">
    <input type="submit" value="ok">
</form>
    <?php
     if(isset($_GET['numb']) && is_numeric($_GET['numb'])) //jeżeli(true), warunek musi zwracać bool -> true lub false //ISSET czy jest ustanowiona // $_Get tablica globalna
     {
         $a = $_GET['numb'];
         echo 'liczba to: ' . $a . PHP_EOL;
         echo '<br>';
         if ($a % 2 == 0) //czy liczba jest parzysta
         {
             echo "liczba jest parzysta" . PHP_EOL;
             echo '<br>';
         } else
             {
             echo "liczba jest nieparzysta" . PHP_EOL;
             echo '<br>';
             }


         if ($a < 0) {
             echo "liczba jest mniejsza od zera" . PHP_EOL;
             echo '<br>';
         } elseif ($a == 0) {
             echo "liczba to zero" . PHP_EOL;
             echo '<br>';

         } else {
             echo "liczba jest większa od zera";
             echo '<br>';
         }

         //liczba podziela przez 3
         //operator tenarny = operator trojargumentowy = skrocona instrukcja if

         $wynik = $a % 3 == 0 ? '<br>liczba podzielna przez trzy' : '<br> liczba niepodzielna przez trzy';
         echo $wynik;

         echo $a % 6 == 0 ? '<br>liczba podzielna przez sześć' : '<br> liczba niepodzielna przez sześć';


     }
     else //w przeciwnym razie (false)
     {
         echo 'nie podano liczby';
         echo '<br>';
     }

    ?>

</body>
</html>