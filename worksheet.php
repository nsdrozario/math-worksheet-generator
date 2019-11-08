

<!DOCTYPE html>
<html lang="en">
   <head>
      <?php
         include 'include/head.php';
      ?>

      <script>
         window.onload = function() {
            document.getElementById('navsheet').style.color = 'white';
            document.getElementById('navsheet').style.cursor = 'default';
         }
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
            }
            else {
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
            }
            else {
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
            var card_id = card.id;
            card_id = card_id.match(/\d+/g);
            problem_count--;
            $("#problem_c").val(problem_count);
            card.parentNode.parentNode.parentNode.removeChild(card.parentNode.parentNode);

            // now decrement every number within the div id problems

            var str = document.getElementById("problems").innerHTML;
            str = str.replace(/(\d+)/g, function (_, num) {
               if (parseInt(num) > parseInt(card_id)) {
                  return parseInt(num) - 1;
               }
               else {
                  return parseInt(num);
               }
            });

            document.getElementById("problems").innerHTML = str;
         }

         function update_subject() {
            problem_count = 0;
            $("#problems").html("");
            var s = $("#subject").val();
            if (s != "none") {
               $("#add_card").prop('disabled', false);
            }
            else {
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
      ?><br/><br/>

      <div class='jumbotron text-center' id="header-jumbotron" style="background-color: #66c7ff; color: white; padding: 8%;"><h1 style="color: white;">Worksheet Creator</h1></div>

      <div id="menus">
         <div class='text-center' id="menu-1">
            <h2 class="normal-color">Select a subject</h2><br/>
            <p><select id="subject" class='text-center' onchange="update_subject()">
               <option value="none">---</option>
               <option value="arithm">Arithmetic</option>
               <option value="alg">Algebra</option>
               <option value="precalc">Precalculus</option>
               <!--  <option value="calc">Calculus</option> -->
            </select></p>
         </div>
      </div>
      <div class='container text-center'>
         <div class='row text-center'>
            <div class='col-md-6'>
               <p><label for="lower_bound"><h3 class="normal-color">Random number lower bound</h3></label></p>
               <p><input class='text-center' type="number" min="1" max="100" value="1" onchange="check()" id="lower_bound"/></p>
            </div>
            <div class='col-md-6'>
               <p><label for="upper_bound"><h3 class="normal-color">Random number upper bound</h3></label></p>
               <p><input class='text-center' type="number" min="1" max="100" value="10" onchange="check()" id="upper_bound"/></p>
            </div>
         </div><br/>

         <p><button id="randomize-inputs" class="btn-mathemacure" onclick="randomize($('#upper_bound').val(), $('#lower_bound').val())">Randomize inputs</button></p><br/>
         <p>
            <label for="quantity-problems">Amount of problems to add:</label>
            <input id="quantity-problems" name="quantity-problems" type="number" style='margin-bottom: 15px;'></input>
            <button id="add_card" class="btn-mathemacure" onclick="for(var i=0; i<parseInt(document.getElementById('quantity-problems').value); i++) {addCard();}" disabled>Add problems</button>
         </p>
         <p>
            <button id='clearAll' class="btn-mathemacure" onclick='document.getElementById("problems").innerHTML = "";'>Clear All Problems</button>
         </p><br/>
      </div>

      <div id="problem_cards" class='text-center'>
         <form id="form_problems" action="printable_worksheet.php" method="post" target="_blank">
            <div id="problems"></div>
            <input type="hidden" name="problem_count" id="problem_c" value="0"/><br/><br/>
            <p><input type="submit" class="btn-mathemacure" name="gen_worksheet" value="Generate worksheet"/></p>
            <p><input type="submit" class="btn-mathemacure" name="gen_answer_key" value="Generate answer key"/></p>
         </form>
      </div>
      <br/><br/>
      <?php
         include 'include/cookie_footer.php';
         include 'include/footer.php';
      ?>
   </body>
</html>
