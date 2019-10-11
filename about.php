<!DOCTYPE html>
<html lang="en">
    <head>
        <?php
            include 'include/head.php';
        ?>
    </head>
    <body>
        <?php
            include 'include/navbar.php'
        ?>
        <div class='jumbotron text-center'><h2>Attributions</h2><br/></div>
        <p>Text file version: <a class="allow" href="NOTICE.txt">NOTICE.txt</a></p>
        <br/>

               <pre class="license">
<?php 
echo file_get_contents("NOTICE.txt");
?>
               </pre>
        <?php
        
include 'include/cookie_footer.php';
include 'include/footer.php';
        ?>
    </body>
</html>
