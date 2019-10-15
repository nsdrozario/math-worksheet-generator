<?php
$id = $_POST['elem_id'];

$subject_problem = array(

"arithm"=>
    array(
        "add"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "} + \FormInput[2][math-input]{" . $id . "_p[]" . "} \)",
        "sub"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "} - \FormInput[2][math-input]{" . $id . "_p[]" . "} \) ",
        "mult"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "}  \cdot  \FormInput[2][math-input]{" . $id . "_p[]" . "} \) "
        ),
"alg"=>
    array(
    "linear-solve-x"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "}x + " . "\FormInput[2][math-input]{" . $id . "_p[]" . "} = \FormInput[2][math-input]{" . $id . "_p[]" . "}\)",
    "quadratic-factoring"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "}x^2 + " . "\FormInput[2][math-input]{" . $id . "_p[]" . "}x + " . "\FormInput[2][math-input]{" . $id . "_p[]" . "} = 0\)"
    )
);

$problem_type = $_POST['problem_type'];
$subject = $_POST['subject'];

echo $subject_problem[$subject][$problem_type];

?>
