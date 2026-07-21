  <?php

    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    } ?>
  <header>
      <nav>
          <h1>Task Flow</h1>
      </nav>
      <div class="navbar">
          <?php if (!isset($_SESSION["user_id"])) { ?>
              <a href="../home/index.php">
                  <button id="homebtn">Home</button>
              </a>
              <a href="../home/register.php">
                  <button id="registerbtn">Signup</button>
              </a>

              <a href="../home/login.php">
                  <button id="loginbtn">login</button>
              </a>
              <a href="../home/about.php">
                  <button id="aboutbtn">About</button>
              </a>


          <?php } else { ?>
              <a href="../home/index.php">
                  <button id="homebtn">Home</button>
              </a>
              <a href="../home/profile.php">
                  <button id="profilebtn">Profile</button>
              </a>
              <a href="../home/dashboard.php">
                  <button id="dashboardbtn">Dashboard</button>
              </a>

              <a href="../home/about.php">
                  <button id="aboutbtn">About Us</button>
              </a>

              <a href="../home/logout.php">
                  <button id="logoutbtn">Logout</button>
              </a>

          <?php } ?>
      </div>
  </header>