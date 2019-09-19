<?php

function gcd ($a,$b) {
    $tmp = 0;
    $a_1 = $a;
    $b_1 = $b;
    //if ($a_1 < $b_1) {
    //    $tmp = $a_1;
    ///    $a_1 = $b_1;
    //    $b_1=$tmp;
  //  }

    while ($b_1 != 0) {
        $b_2 = $a_1 % $b_1;
        $a_1 = $b_1;
        $b_1=$b_2;
    }

    return $a_1;
}


?>
