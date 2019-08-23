<?php

    

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'include/head.php';
        ?>

        <script>
            var problem_count = 0;
            // todo: use real DOM manipulation functions instead of just writing strings of html
            function get_problem(type, element) {
                $.post("engine/problem_db.php", { problem_type: type, subject: $("#subject").val() }, function (data, status) {
                    window.problem_info = data;
                    $("#" + element).parent().append("<br/>" + window.problem_info);
                    MathJax.Hub.Queue(["Typeset",MathJax.Hub]);
                });
            }

            function addCard() {
                problem_count++;
                var html = "<div id='problem" + problem_count + "' class='card'>" +
                                   "<div id='p_card_" + problem_count + "' class='card-body'>" +
                                   "<p>Problem type: <select name='p_" + problem_count + "_type' id='p_" + problem_count + "_type' onchange='get_problem(this.value, this.id)'>" +
                                   window.options +
                                   "</select>";
                $("#problems").append(html);
            }


            function update_subject() {
                problem_count = 0;
                $("#problems").html("");
                var s = $("#subject").val();
                if (s != "none") {
                    $("#add_card").prop('disabled', false);
                } else {
                    $("#add_card").prop('disabled', true);
                }
                window.options = ""; // global var
                $.post("engine/subject_select.php", { subject: s }, function (data, status) {
                    window.options = data;
                })
            }
</script>

    </head>
    <body>
        <?php
            include 'include/navbar.php';
        ?>
        <br/>
        <br/>
        <br/>
       <h1>Worksheet Creator</h1>

        <p>Select a subject: 
       <select id="subject" onchange="update_subject()">
           <option value="none">---</option>
           <option value="arithm">Arithmetic</option>
           <option value="alg">Algebra</option>
           <option value="precalc">Precalculus</option>
           <option value="calc">Calculus</option>
        </select>
            <button id="add_card" onclick="addCard()" disabled>Add problem</button>
        </p>

        <div id="problem_cards">
            <form id="problems" action="worksheet.php" method="post">
            </form>
        </div>
        



    </body>
</html>
