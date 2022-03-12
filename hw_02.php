<?php
for ($s = 1; $s < 101; $s++) {
    if ($s % 5 == 0 && $s % 3 == 0){
        echo 'FizzBuzz' . "<br/>";
    } elseif ($s % 5 == 0) {
        echo 'Buzz' . "<br/>";
    } elseif ($s % 3 == 0)  {
        echo 'Fizz' . "<br/>";
    } else {
        echo $s . "<br/>";
    }
}
?>
