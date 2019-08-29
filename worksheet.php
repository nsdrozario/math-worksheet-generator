

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
                    $(this).val(Math.floor(Math.random() * (parseInt(upper_bound) - parseInt(lower_bound))) + parseInt(lower_bound));
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

                if (parseInt(val_2) >= parseInt(val_1)) {
                    $("#randomize-inputs").prop("disabled", true);
                } else {
                    $("#randomize-inputs").prop("disabled", false);
                }
            }

            function addCard() {
                problem_count++;
                $("#problem_c").val(problem_count);
                var html = "<div id='problem" + problem_count + "' class='card container text-center'>" +
                "<div id='p_card_" + problem_count + "' class='card-body'>" +
                "<p>Problem type: </p><select class='text-center' name='p_" + problem_count + "_type' id='p_" + problem_count + "_type' onchange='get_problem(this.value, this.id, " + problem_count + ")'>" +
                window.options +
                "</select><br/>" +
                "<div class='preview' id='p_preview_" + problem_count + "'>" +
                "</div>" +
                "<div class='close-card' id='close_" + problem_count + "' onclick='remove_problem(this.id)'>x</div>"
                "</div></div>";
                $("#problems").append(html);
            }

            function remove_problem(id) {
                var card = document.getElementById(id);
                problem_count--;
                 $("#problem_c").val(problem_count);
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
       <div class='jumbotron text-center'><h1>Worksheet Creator</h1></div>

         <div id="menus">

             <div class='text-center' id="menu-1">
           <p><h2>Select a subject</h2></p><br/><p><select id="subject" class='text-center' onchange="update_subject()">
           <option value="none">---</option>
           <option value="arithm">Arithmetic</option>
           <option value="alg">Algebra</option>
           <option value="precalc">Precalculus</option>
           <option value="calc">Calculus</option>
        </select></p>
      </div>
      <div class='container text-center'>
              <div class='row text-center'>
                <div class='col-md-6'>
            <p><label for="lower_bound"><h3>Random number lower bound</h3></label></p>
            <p><input class='text-center' type="number" min="1" max="100" value="1" onchange="check()" id="lower_bound"/></div></p>
            <div class='col-md-6'>
             <p><label for="upper_bound"><h3>Random number upper bound</h3></label></p>
            <p><input class='text-center' type="number" min="1" max="100" value="10" onchange="check()" id="upper_bound"/></p>
                   </div>
                 </div><br/>

                      <p><button id="randomize-inputs" onclick="randomize($('#upper_bound').val(), $('#lower_bound').val())">Randomize inputs</button></p><br/>
                          <p><button id="add_card" onclick="addCard()" disabled>Add problem</button></p><br/>
</div>

        <div id="problem_cards" class='text-center'>
            <form id="form_problems" action="printable_worksheet.php" method="post" target="_blank">
                <div id="problems">
                 </div>
                <input type="hidden" name="problem_count" id="problem_c" value="0"/><br/>
                <p><input type="checkbox" name="print_on_open" id="print_on_open"/>  <label for="print_on_open">Show print dialog on preview</label></p>
                <br/>
                <p><input type="submit" name="gen_worksheet" value="Generate worksheet"/></p>
                <p><input type="submit" name="gen_answer_key" value="Generate answer key"/></p>
        </div>




    </body>
</html>
