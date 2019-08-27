<?php
$id = $_POST['elem_id'];

$subject_problem = array(

"arithm"=>
    array(
        "add"=>"\(\FormInput[2][math-input]{" . $id . "[]" . "} + \FormInput[2][math-input]{" . $id . "[]" . "} = \) _____",
        "sub"=>"\(\FormInput[2][math-input]{" . $id . "[]" . "} - \FormInput[2][math-input]{" . $id . "[]" . "} = \) _____"
        ),

);

$problem_type = $_POST['problem_type'];
$subject = $_POST['subject'];

echo $subject_problem[$subject][$problem_type];

?>
