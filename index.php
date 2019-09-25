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
      <div class='jumbotron text-center'>
        <h1>Mathemacure</h1>
        <h4>The ultimate solution for math worksheet generation</h4><br/><br/><br/>
      </div>
    </div>
    <div id='features'>
        <div class="jumbotron text-center"><h1>What is Mathemacure?</h1></div>
        <div class="text-center">
            <p>Mathemacure is a versatile worksheet generator that can quickly generate printable worksheets and answer keys.
            </p>
        </div>
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
