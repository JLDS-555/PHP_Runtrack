<?php

for ($i = 1; $i <= 100; $i++) 
{
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "FizzBuzz<br>";  // Si c'est un multiple de 3 et de 5
    } elseif ($i % 3 == 0) {
        echo "Fizz<br>";  // Si c'est un multiple de 3
    } elseif ($i % 5 == 0) {
        echo "Buzz<br>";  // Si c'est un multiple de 5
    } else {
        echo "$i<br>";  // Si ce n'est ni multiple de 3 ni de 5
    }
}


?>
