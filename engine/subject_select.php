<?php

$subjects = array();    

ob_start()
?>

<option value="linear-constant-solve-x">Solve for x in linear function equal to constant</option>
<option value="quadratic-factoring">Factoring quadratics</option>

<?php
    
    $subjects["alg"] = ob_get_clean();
    ob_start();    
?>

<option value="none">---</option>
<option value="add">Addition</option>
<option value="sub">Subtraction</option>
<option value="mult">Multiplication</option>
<option value="divide">Division</option>

<?php
    $subjects["arithm"] = ob_get_clean();
    $subject = $_POST['subject'];
    echo $subjects[$subject];

?>
 