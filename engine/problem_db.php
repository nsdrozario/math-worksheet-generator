<?php
$id = $_POST['elem_id'];

$subject_problem = array(

"arithm"=>
    array(
        "add"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "} + \FormInput[2][math-input]{" . $id . "_p[]" . "} = \) _____",
        "sub"=>"\(\FormInput[2][math-input]{" . $id . "_p[]" . "} - \FormInput[2][math-input]{" . $id . "_p[]" . "} = \) _____"
        ),

);

$problem_type = $_POST['problem_type'];
$subject = $_POST['subject'];

echo $subject_problem[$subject][$problem_type];

?>
