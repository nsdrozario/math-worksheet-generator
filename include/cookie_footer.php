<div id="cookie-footer">
          <div id="close-cookie-footer" onclick="close_footer();">
              &times;
          </div>
            <h3>This website uses cookies</h3>
            <p>In order to improve your experience using Mathemacure, we store cookies on your computer.
                <br/>
                By continuing to use our website you agree to us storing these cookies on your computer.
                <a href="privacypolicy.php">Learn More</a>
            </p>
          
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
              document.cookie = "read_cookie_agreement=true";
              check_agreement();
          }
      </script>