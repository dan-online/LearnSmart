      <?php 
      session_start();
      include('main/database/access_control.php');

      ?>
      <!-- start nav bar -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="/1819dw/LearnSmart">
                  <img src="/1819dw/LearnSmart/assets/images/logo.png" width="60" height="60" alt=""> Learn Smart
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item active">
                      <a class="nav-link" href="/1819dw/LearnSmart">Home <span class="sr-only">(current)</span></a>
                    </li>
                  </ul>

                  <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <?php 
                      if ($access_control['logged_in'] == "no" || !$access_control['logged_in']) {
                    ?>

                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/1819dw/LearnSmart/user/register.php">Sign up</a>
                    </li>
                      <a class="nav-link" href="/1819dw/LearnSmart/user/login.php">Login</a>
                    <?php
                      } else {
                    ?>
                        <a class="nav-link" href="#">You are logged in as
                        <?php echo $access_control['email']; ?> </a>
                        
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="/1819dw/LearnSmart/user/logout.php">Logout</a>
                        </li>

                    <?php
                      }
                    ?>
                    
                    
                    </li>
                  </ul>
                </div>
        </nav>