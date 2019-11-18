<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Mathemacure | Calculators</title>
    <?php
    include 'include/head.php';
     ?>
     <script type="text/javascript">
        $(document).ready(function() {
           $('#navcalc').css('color', 'white');
           $('#navcalc').css('cursor', 'default');
        });
        function get_problem(v) {
          var s = $('#subject').val();
          if(v == 'none') {
            $('#insert-here2').html('');
          }
          else {
            $.post('engine/calculator_db.php', {subject: s, value: v}, function(data, status) {
              document.getElementById('insert-here2').innerHTML = data;
            });
          }
        }
        function update_subject(v) {
          var s = $('#subject').val();
          if(s != 'none') {
            window.options = '';
            $.post("engine/subject_select.php", { subject: s }, function (data, status) {
              window.options = data;
              document.getElementById('insert-here').innerHTML = "<p><h2>Select a subsection:</h2><br/><select onchange='get_problem(this.value)'>" + window.options + "</select></p>";
            })
          }
          else {
            $('#insert-here').html('');
          }
        }
     </script>
  </head>
  <body>
    <?php
    include 'include/navbar.php';
     ?><br/><br/>
    <div class='jumbotron text-center'>
        <h2>Select a subject:</h2><br/>
        <p>
          <select id='subject' class='text-center' onchange='update_subject()'>
            <option value='none'>---</option>
            <option value="arithm">Arithmetic</option>
            <option value="alg">Algebra</option>
            <option value="precalc">Precalculus</option>
            <option value="calc">Calculus</option>
          </select>
        </p><br/><br/>
        <div id='insert-here'></div>
        <div id='insert-here2'></div>
    </div>
    <?php
    include 'include/cookie_footer.php';
    include 'include/footer.php';
     ?>
  </body>
</html>
