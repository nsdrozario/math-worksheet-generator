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
"mult"=>function(){
    $args = func_get_arg(0);
    return $args[0] * $args[1];
},
"linear-solve-x"=>function() {
    $args = func_get_arg(0);
    $ans = ($args[2] - $args[1])/$args[0];
    $sign = "";
    if ($ans < 0) {
    $sign = "-";
    }
    $gcd = gcd(($args[2] - $args[1]), $args[0]);
    if (intval($ans) != $ans) {
        return $sign . "\\frac{" . abs(($args[2] - $args[1])/$gcd)   . "}{" . abs($args[0]/ $gcd) . "}";
    } else {
        return $ans;
    }
},
"quadratic-factoring"=>function(){
     $args = func_get_arg(0);
     return quadratic_formula($args[0],$args[1],$args[2]);
},
"parametric-1"=>function() {
    $args = func_get_arg(0);
    return parametric_1($args[0],$args[1],$args[3],$args[4],$args[2]);
}
);

?>
