<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Mathemacure | Discord</title>
      <?php
         include 'include/head.php';
      ?>
      <script type='text/javascript'>
         $(document).ready(function() {
            $('#navdiscord').css('color', 'white');
            $('#navdiscord').css('cursor', 'default');
         });
      </script>
   </head>
   <body>
      <?php
         include 'include/cookie_footer.php';
         include 'include/navbar.php';
      ?>

      <div id='discord'>
         <div class='jumbotron text-center' id='standout'>
            <h2 id='smaller'>Our Discord</h2><br/>
            <h4>Join our discord server for a friendly environment and use it as a forums page where you can ask for help, collaborate, make new friends, and most of all, have fun.</h4><br/>
         </div>
      </div>

      <div id='features'>
         <br/>
         <div class="jumbotron text-center">
            <h2>What is our Discord?</h2>
            <p>Our discord server sounds like it would just be about math information and help, but that is not all that we offer. It is a friendly environment where people are kind to each other and a place to hang out. Its main purpose is to offer people a place to discuss about math or other academic subjects but you can use it to play some games with people or just socialize and talk about life. If you want to join our server. Just click the link below.</p>
            <br/>
            <br/>
            <a target='_blank' class='ghost-btn-mathemacure' href="https://discord.gg/nDd7JCm">Discord Join Link</a>
         </div>
      </div>
      <?php
         include 'include/footer.php';
      ?>
   </body>
</html>
