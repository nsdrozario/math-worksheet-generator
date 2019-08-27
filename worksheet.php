<?php

       if (isset($_POST['gen_worksheet']) || isset($_POST['gen_answer_key'])) {
                  $req_type = $_POST['gen_worksheet'] ?: $_POST['gen_answer_key'];
                  $problem_count = $_POST['problem_count'];
       } else {
           // do nothing
       }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'include/head.php';
        ?>

        <script>

            var problem_count = 0;

            function randomize(upper_bound, lower_bound) {
                $(".math-input").each(function (i, v) {
                    $(this).val(Math.floor(Math.random() * parseInt(upper_bound)) + parseInt(lower_bound));
                }
                )
            }

            function get_problem(type, element, id) {

                if (type == "none") {
                    $("#" + element).parent().children("div").html("");
                } else {

                    $.post("engine/problem_db.php", { problem_type: type, subject: $("#subject").val(), elem_id: id }, function (data, status) {
                        window.problem_info = data;
                        $("#" + element).parent().children("div.preview").html("<br/>" + window.problem_info);
                        MathJax.Hub.Queue(["Typeset", MathJax.Hub]);
                    });
                }
            }

            function check() {

                var val_1 = $("#upper_bound").val();
                var val_2 = $("#lower_bound").val();

                if (val_2 >= val_1) {
                    $("#randomize-inputs").prop("disabled", true);
                } else {
                    $("#randomize-inputs").prop("disabled", false);
                }
            }

            function addCard() {
                problem_count++;
                $("#problem_c").val(problem_count);
                var html = "<div id='problem" + problem_count + "' class='card'>" +
                "<div id='p_card_" + problem_count + "' class='card-body'>" +
                "<span>Problem type: </span><select name='p_" + problem_count + "_type' id='p_" + problem_count + "_type' onchange='get_problem(this.value, this.id, " + problem_count + ")'>" +
                window.options +
                "</select>" +
                "<div class='preview' id='p_preview_" + problem_count + "'>" +
                "</div>" +
                "<div class='close-card' id='close_" + problem_count + "' onclick='remove_problem(this.id)'>x</div>"
                "</div></div>";
                $("#problems").append(html);
            }

            function remove_problem(id) {
                var card = document.getElementById(id);
                problem_count--;
                card.parentNode.parentNode.parentNode.removeChild(card.parentNode.parentNode);
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

         <div id="menus">

             <div id="menu-1">
           <p>Select a subject:  <select id="subject" onchange="update_subject()">
           <option value="none">---</option>
           <option value="arithm">Arithmetic</option>
           <option value="alg">Algebra</option>
           <option value="precalc">Precalculus</option>
           <option value="calc">Calculus</option>
        </select>
            <button id="add_card" onclick="addCard()" disabled>Add problem</button>
            </div>
           
            <div id="menu-2">
            <label for="lower_bound">Random number lower bound: </label>
            <input type="number" min="1" max="100" value="1" onchange="check()" id="lower_bound"/>
            <br/>
             <label for="upper_bound">Random number upper bound: </label>
            <input type="number" min="1" max="100" value="10" onchange="check()" id="upper_bound"/>
                 <button id="randomize-inputs" onclick="randomize($('#upper_bound').val(), $('#lower_bound').val())">Randomize inputs</button>
            </p>
            </div>

            </div>
            
        <div id="problem_cards">
            <form id="form_problems" action="worksheet.php" method="post" target="_blank">
                <div id="problems">
                 </div>
                <input type="hidden" name="problem_count" id="problem_c" value="0"/>
                <label for="print_on_open">Show print dialog on preview: </label><input type="checkbox" name="print_on_open"/>
                <br/>
                <input type="submit" name="gen_worksheet" value="Generate worksheet"/>
                <input type="submit" name="gen_answer_key" value="Generate answer key"/>
        </div>
        



    </body>
</html>
