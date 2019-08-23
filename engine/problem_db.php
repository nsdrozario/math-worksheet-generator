<?php

$subject_problem = array(

"arithm"=>
    array(
        "add"=>"\(\FormInput{input1} + \FormInput{input2} = \) _____"
        ),

);

$problem_type = $_POST['problem_type'];
$subject = $_POST['subject'];

echo $subject_problem[$subject][$problem_type];

?>
