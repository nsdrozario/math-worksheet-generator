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
        <h4>A simple solution for math training</h4><br/><br/><br/>
        <h4><a href='#features' onclick='scrollToAnchor("features")'>Scroll<span class='rotate'>></span></a></h4>
      </div>
    </div>
    <div id='features'>
      <br/>
      <div class='jumbotron text-center'><h1>Why Mathemacure?</h1></div>
      <div class='row'>
        <div class="col-md-6 text-center">
                        <h2>Online</h2><br/>
                        <h4>This service is 100% online and requires no downloads.</h4>
                </div><br/><br/>
                 <div class='col-md-6 text-center'>
                     <h2>Perfect for testing</h2><br/>
                     <h4>Randomize problem parameters and generate answer keys.</h4>
                </div>
              </div><br/><br/>
        <div class='jumbotron text-center'>
          <p><h4><a href='#home' onclick='scrollToAnchor("home")'>Back to Top<span class='rotate'><</span></a></h4></p>
        </div>
        </div>
      </div>
      <?php
      include 'include/footer.php';
       ?>
    </body>
</html>
