<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <?php
        include 'include/head.php';
    ?>
    <link rel="stylesheet" href="worksheet.css"/>
</head>
<body>
    <div id="wrapper" class="text-center">
     <p><pre>Name ______________         Date ______________                                     Period ___</pre></p>
        <div id="problems" class="row">

           <?php
       include 'engine/problem.php';
       $problems = array();
       if (isset($_POST['gen_worksheet']) || isset($_POST['gen_answer_key'])) {
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
                        // $index + 1 is problem id
                        // figure out how many problems in one column
                        // extract info from problem class to create render
                        echo '<div class="unresponsive">';
                        echo '<p id="'.($prob->id).'">'.(strval($prob->id)).'.  \('.(strval($prob->parameters[0])).' + '.(strval($prob->parameters[1])).'\)</p>';
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
    <footer style="text-align: center;">© 2019 Nishchal Shukla and Nathaniel D'Rozario</footer>
    </div>
</body>
</html>
