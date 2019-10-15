<div id="cookie-footer">
            <h3>This website uses cookies</h3>
            <p>In order to improve your experience using Mathemacure, we store cookies on your computer.
                <br/>
                By continuing to use our website you agree to us storing these cookies on your computer.
            </p>
                          <a href="privacypolicy.php" class="ghost-btn-mathemacure" id="learn-more-cookie">Learn More</a>
      <span class="ghost-btn-mathemacure" onclick="close_footer();">
              I agree to the Privacy Policy
          </span>
      </div>
      <script>
          var cookie_footer = document.getElementById("cookie-footer");
          var cookies = decodeURIComponent(document.cookie).split(";");
          function check_agreement() {
              for (var i = 0; i < cookies.length; i++) {
                  if (cookies[i].trim() == "read_cookie_agreement=true") {
                      cookie_footer.style.display = "none";
                  } else {
                      cookie_footer.style.display = "block";
                  }
              }
          }
          check_agreement();
          function close_footer() {
              var expiration_date = new Date();
              expiration_date = expiration_date.setYear(expiration_date.getYear() + 365); 
              document.cookie = "read_cookie_agreement=true; expires=" + expiration_date;
              cookies = decodeURIComponent(document.cookie).split(";");
              check_agreement();
          }
      </script>
