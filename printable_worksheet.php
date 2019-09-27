 <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <?php
        include 'include/head.php';
        include 'engine/problem.php';
       include 'engine/problem_format.php';
       include 'engine/answer_db.php';
    ?>
    <link rel="stylesheet" href="worksheet.css"/>
</head>
<body>
    <div id="wrapper" class="text-center">
     <p><pre><?php if (isset($_POST['gen_answer_key'])) { echo "<span style='wdith:100%;'>Answers</span>"; } else { echo "<pre>Name ______________         Date ______________                                     Period ___</pre>";}?></pre></p>
        <div id="problems" class="row">

           <?php

       if (isset($_POST['gen_worksheet'])) {
                  $problems = array();
                  $req_type = $_POST['gen_worksheet'] ?: $_POST['gen_answer_key'];
                 $problem_count = intval($_POST['problem_count']);
                  for ($i = 0; $i<$problem_count; $i++) {

                       $p = new Problem;
                       $p->id = $i + 1;
                       $p->problem_type = $_POST['p_' . ($i+1) . '_type'];
                       foreach ($_POST[strval($i+1) . "_p"] as $param) {
                           array_push($p->parameters, $param);
                           $p->param_count = count($p->parameters);
                       }

                       array_push($problems, $p);
                 }
                 foreach($problems as $prob){
                        echo '<div class="unresponsive">';

                        $prob_info = $format[($prob->problem_type)];

                        for ($i = 0; $i < ($prob->param_count); $i++) {
                            $prob_info = preg_replace('/a/', $prob->parameters[$i], $prob_info, 1);
                        }

                        echo $prob->id . ". \(" . $prob_info . "\)";

                        echo '</div>';
                    }
      } else if (isset($_POST['gen_answer_key'])) {
           $problems = array();
                  $req_type = $_POST['gen_answer_key'];
                 $problem_count = intval($_POST['problem_count']);
                  for ($i = 0; $i<$problem_count; $i++) {

                       $p = new Problem;
                       $p->id = $i + 1;
                       $p->problem_type = $_POST['p_' . ($i+1) . '_type'];
                       foreach ($_POST[strval($i+1) . "_p"] as $param) {
                           array_push($p->parameters, $param);
                           $p->param_count = count($p->parameters);
                       }

                       array_push($problems, $p);
                 }
                 foreach($problems as $prob){
                        echo '<div class="unresponsive-answer">';

                        $prob_answer = $answer[$prob->problem_type]($prob->parameters);

                        echo $prob->id . ". \(" . $prob_answer . "\)";

                        echo '</div>';
                    }
      }
?>
                <!--
            <div class="col-md-6">
                      <p id="hint">1.  Solve for x.</p>
                \( 2x+5=10 \)
                </div>
                <div class="col-md-6">
                </div>
            -->

            </div>



        </div>


    </div>

        </div>
    <footer style="text-align: center;">© 2019 Mathemacure</footer>
    </div>

    <div id="menu">
        <div id="print" onclick="window.print();">
        </div>
    </div>
    <?php
    include 'include/cookie_footer.php';
    ?>
</body>
</html>
