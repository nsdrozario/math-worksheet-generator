<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8" />
      <title>Mathemacure | Our Team</title>
      <?php
         include 'include/head.php';
      ?>
      <script type='text/javascript'>
         $(document).ready(function() {
            $('#navteam').css('color', 'white');
            $('#navteam').css('cursor', 'default');
         });
      </script>
   </head>
   <body>
      <?php
         include 'include/cookie_footer.php';
         include 'include/navbar.php';
      ?>

      <div id='team' class="background">
         <div class='jumbotron text-center' id='standout'>
            <h2 id='smaller'>Our Team</h2><br/>
            <h4>Mathemacure is run and maintained by an elite team of high school students who wish to help their community.</h4><br/>
         </div>
      </div>

      <div id='features'>
         <br/>
         <div class="jumbotron text-center">
            <h2>Nathaniel D'Rozario</h2><br/>
            <p>Co-Founder, CEO & Software Architect</p><br/><br/>
            <h2>Nishchal Shukla</h2><br/>
            <p>Co-Founder, Lead Web Developer</p><br/><br/>
            <h2>Sutantu Balamurugan</h2><br/>
            <p>Software Engineer</p><br/><br/>
            <h2>Ryan Schlosser</h2><br/>
            <p>Web Developer</p><br/><br/>
         </div>
         <?php
            include 'include/footer.php';
         ?>
      </div>
   </body>
</html>
