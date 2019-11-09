<?php
$id = $_POST['elem_id'];

$subject_problem = array(

"arithm"=>
    array(
        "add"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "} + \FormInput[2][math-input]{" . $id . "_p[]" . "} \)",
        "sub"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "} - \FormInput[2][math-input]{" . $id . "_p[]" . "} \) ",
        "mult"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "}  \cdot  \FormInput[2][math-input]{" . $id . "_p[]" . "} \) ",
        "divide"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "}  \div  \FormInput[2][math-input]{" . $id . "_p[]" . "} \) "
        ),
"alg"=>
    array(
    "linear-solve-x"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "}x + " . "\FormInput[2][math-input]{" . $id . "_p[]" . "} = \FormInput[2][math-input]{" . $id . "_p[]" . "}\)",
    "quadratic-factoring"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "}x^2 + " . "\FormInput[2][math-input]{" . $id . "_p[]" . "}x + " . "\FormInput[2][math-input]{" . $id . "_p[]" . "} = 0\)"
    ),
    "precalc"=>array(
    "parametric-1"=>"\( _{t=0} ( \FormInput[2][math-input]{" . $id . "_p[]" . "}, \FormInput[2][math-input]{" . $id . "_p[]" . "})\)<br/>\( _{t=\FormInput[2][math-input]{" . $id . "_p[]}} ( \FormInput[2][math-input]{" . $id . "_p[]" . "}, \FormInput[2][math-input]{" . $id . "_p[]" . "})\)"
    ),
    "calc"=>array(
    "deriv-poly"=>"Polynomial: <span class='math-input math-expr'  id='" . $id . "_p[]_i' class='" . $id . "_p[]_i'></span> @ x=<input type='number' name='" . $id . "_p[]'>" .
                  "<input type='hidden' name='" . $id . "_p[]' id='" . $id ."_p[]'></input>"
    )
);

$problem_type = $_POST['problem_type'];
$subject = $_POST['subject'];

echo $subject_problem[$subject][$problem_type];

?>
