<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'include/head.php';
    ?>
    <script type='text/javascript'>
      $(document).ready(function() {
        $('#navhome').css('color', 'white');
          $('#navhome').css('cursor', 'default');
        $('#navsheet').css('color', '');
      });
    </script>
  </head>
  <body>
    <?php
      include 'include/navbar.php';
    ?>
    <div id='home'>
      <div class='jumbotron text-center' id='standout'>
        <h2 id='smaller'>Mathemacure</h2><br/>
        <h4>A simple solution for math training</h4><br/>
        <h5><a href='worksheet.php' class="btn-mathemacure" id='start'>Get Started</a></h5>
      </div>
      <span id='buttoner'data-toggle="modal" data-target="#myModal">
  Opener
</span>
    </div>

    <div id='features'>
      <br/>
        <div class="jumbotron text-center" id="what">
            <h2>What is Mathemacure?</h2>
            <p>
                Mathemacure is the ultimate web-based math worksheet generation utility.
                <br/>
                Supercharge your learning with our dynamic worksheets or even use our website to teach in the classroom.
            </p>
        </div>
      <div class='jumbotron text-center' id='why'><h2>Why Mathemacure?</h2></div>
      <div class='row'>
        <div class="col-sm-6 text-center" id='left'>
                        <h2>Online</h2><br/>
                        <p>Mathemacure is completely web-based and requires no downloads.</p>
                </div><br/><br/>
                 <div class='col-sm-6 text-center' id='right'>
                     <h2>Perfect for testing</h2><br/>
                     <p>Randomize problem parameters and generate answer keys.</p>
                </div>
              </div>
        <div class="row">
               <div class="col-sm-6 text-center" id='left'>
                        <h2>Fast</h2><br/>
                        <p>Create worksheets within minutes</p>
                </div>
                 <div class='col-sm-6 text-center' id='right'>
                     <h2>Diverse</h2><br/>
                     <p>Put multiple kinds of problems from the same subject in one worksheet.</p>
                </div>
        </div>
        <?php
            include 'include/footer.php';
             ?>
        </div>
      <?php
      include 'include/cookie_footer.php';

?>
    </body>
</html>
