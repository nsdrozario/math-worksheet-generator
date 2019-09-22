<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'include/head.php';
    ?>
    <script type='text/javascript'>
      $(document).ready(function() {
        $('#navhome').css('color', 'black');
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
      <div class='jumbotron' id='standout'>
        <h2 id='smaller'>Mathemacure</h2><br/>
        <h4>A simple solution for math training</h4><br/>
        <h5><a href='worksheet.php' id='start'>Get Started</a></h5>
      </div>
    </div>
    <div id='features'>
      <br/>
      <div class='jumbotron text-center' id='why'><h2>Why Mathemacure?</h2></div>
      <div class='row'>
        <div class="col-sm-6 text-center" id='left'>
                        <h2>Online</h2><br/>
                        <h4>This service is 100% online and requires no downloads.</h4>
                </div><br/><br/>
                 <div class='col-sm-6 text-center' id='right'>
                     <h2>Perfect for testing</h2><br/>
                     <h4>Randomize problem parameters and generate answer keys.</h4>
                </div>
              </div>
        </div>
      </div>
      <?php
      include 'include/footer.php';
       ?>
    </body>
</html>
