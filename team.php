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
                $('#navsheet').css('color', '');
                $('#navhome').css('color', '');
            });
        </script>
    </head>
    <body class="seattle-background">
        <?php
           include 'include/cookie_footer.php';
           include 'include/navbar.php';
        ?>

        <div class="container">
            <article>
                <div class="jumbotron text-center" style="color: #FFFFFF;">
                    <h1>Our Team</h1>
                    <p>Mathemacure is run and maintained by an elite team of high school students who wish to help their community.</p>
                    <br/>
                    <br/>
                    <h2>Nathaniel D'Rozario</h2>
                    <p>CEO & Software Architect</p>
                    <h2>Nishchal Shukla</h2>
                    <p>Lead Web Developer</p>
                    <h2>Jennifer Chan</h2>
                    <p>Designer</p>
                    <h2>Sutantu Balamurugan</h2>
                    <p>Software Engineer</p>
                    <h2>Ryan Schlosser</h2>
                    <p>Software Engineer</p>
                </div>
            </article>
        </div>

        <?php
            include 'include/footer.php';
        ?>
    </body>
</html>
