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
        <div id="problems">

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

                       foreach ($_POST[strval($i+1)] as $param) {
                           array_push($p->parameters, $param);
                           $p->param_count = count($p->parameters);
                       }

                       array_push($problems, $p);
                    
                 }

      }
?>

        </div>
    <footer style="text-align: center;">Mathmacure © 2019</footer>
    </div>
</body>
</html>
