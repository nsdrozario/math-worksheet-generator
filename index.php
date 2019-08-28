<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
      include 'include/head.php';
    ?>
    <script type='text/javascript'>
    function scrollToAnchor(aid){
      var divTag = $("div[id='"+ aid +"']");
      $('html,body').animate({scrollTop: divTag.offset().top}, 1000);
    }
    </script>
  </head>
  <body>
    <?php
      include 'include/navbar.php';
    ?>
    <div id='home'>
      <div class='jumbotron text-center'>
        <h1>Mathemacure</h1>
        <p><h4>A simple solution for math training</h4></p><br/><br/><br/>
        <p><h4><a href='#features' onclick='scrollToAnchor("features")'>Scroll <i class='material-icons'>keyboard_arrow_down</i></a></h4></p>
      </div>
    </div>
    <div id='features'>
      <br/>
      <div class='jumbotron text-center'><h1>Features</h1></div>
      <div class='row'>
        <div class="col-md-6 text-center">
                        <p><h2>Online</h2></p><br/>
                        <p><h4>This service is 100% online and requires no downloads.</h4></p>
                </div><br/><br/>
                 <div class='col-md-6 text-center'>
                     <p><h2>Test Mode</h2></p><br/>
                     <p><h4>Automatically generate multiple forms and answer keys with shown work.</h4></p>
                </div>
              </div><br/><br/>
        <div class='jumbotron text-center'>
          <p><h4><a href='#home' onclick='scrollToAnchor("home")'>Back to Top <i class='material-icons'>keyboard_arrow_up</i></a></h4></p>
        </div>
        </div>
      </div>
    </body>
</html>
