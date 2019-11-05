<!--<div id="cookie-footer">
            <h3>This website uses cookies</h3>
            <p>In order to improve your experience using Mathemacure, we store cookies on your computer.
                <br/>
                By continuing to use our website you agree to us storing these cookies on your computer.
            </p>
                          <a href="privacypolicy.php" class="ghost-btn-mathemacure" id="learn-more-cookie">Learn More</a>
      <span class="ghost-btn-mathemacure" id='pointer-hover' onclick="close_footer();">
              I agree to the Privacy Policy
          </span>
      </div>-->
<div id="modal-container">
     
      <span id='buttoner'data-toggle="modal" data-target="#myModal">
  Opener
</span>
<div class="modal fade" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header text-center">
        <h4 class="modal-title">This website uses cookies</h4>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>In order to improve your experience using Mathemacure, we store cookies on your computer.
            <br/>
            By continuing to use our website you agree to us storing these cookies on your computer.
        </p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <a href="privacypolicy.php" class="ghost-btn-mathemacure text-center">Learn More</a>
<span class="ghost-btn-mathemacure text-center" id='pointer-hover' data-dismiss="modal" onclick='close_footer();'>
I agree to the Privacy Policy
</span>
      </div>

    </div>
  </div>
</div>
    </div>
      <script>
          var cookie_footer = document.getElementById("modal-container");
          var cookies = decodeURIComponent(document.cookie).split(";");
          function check_agreement() {
              for (var i = 0; i < cookies.length; i++) {
                  if (cookies[i].trim() == "read_cookie_agreement=true") {
                      cookie_footer.innerHTML = "";
                  } else {
                      window.onload = function () {
                          document.getElementById('buttoner').click();
                      }
                  }
              }
          }
          check_agreement();
          function close_footer() {
              var expiration_date = new Date();
              expiration_date.setFullYear(expiration_date.getFullYear() + 1);
              document.cookie = "read_cookie_agreement=true; expires=" + (expiration_date.toUTCString());
              cookies = decodeURIComponent(document.cookie).split(";");
              check_agreement();
          }
      </script>
