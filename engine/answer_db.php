<?php
include 'math.php';

$answer = array(
"add"=>function(){
    $args = func_get_arg(0);
    return $args[0] + $args[1];
},
"sub"=>function(){
    $args = func_get_arg(0);
    return $args[0] - $args[1];
},
"linear-solve-x"=>function() {
    $args = func_get_arg(0);
    $ans = ($args[1] - $args[2])/$args[0];
    $sign = "";
    if ($ans < 0) {
    $sign = "-";
    }
    $gcd = gcd(($args[1] - $args[2]), $args[0]);
    if (intval($ans) != $ans) {
        return $sign . "\\frac{" . ($args[1] - $args[2]) / $gcd  . "}{" . $args[0] / $gcd . "}";
    } else {
        return $ans;
    }
}
);

?>
