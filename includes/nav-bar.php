<body>
  <?php
    require_once("includes/db.php");
  ?>
  <!-- header part start -->
  <div id="header" class="bg-primary">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg">
        <?php if(!isset($_SESSION['login_success'])): ?>
        <a class="navbar-brand" href="index.php">Azizul Islam Milton</a>
        <?php endif; ?>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse nav-menu" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <?php if(!isset($_SESSION['login_success'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact</a>
            </li>
            <?php endif; ?>
            <?php if(isset($_SESSION['login_success'])): ?>
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="fa fa-tachometer" aria-hidden="true"></i>
                Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_list.php">
                <i class="fa fa-users" aria-hidden="true"></i>
                User List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="inbox.php">
                <i class="fa fa-commenting" aria-hidden="true"></i>
                Messages<span class="badge badge-success">
                  <?php
                    $select_query = "SELECT * FROM contact_messages WHERE message_status=1 AND delete_status= 1";
                    $query_data = mysqli_query($db_connect, $select_query);
                    echo $query_data->num_rows;
                  ?>
                </span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="trash_message.php">
                <i class="fa fa-trash" aria-hidden="true"></i>
                Trash<span class="badge badge-success">
                  <?php
                    $select_query = "SELECT * FROM contact_messages WHERE delete_status= 2";
                    $query_data = mysqli_query($db_connect, $select_query);
                    echo $query_data->num_rows;
                  ?>
                </span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">
                <i class="fa fa-briefcase" aria-hidden="true"></i>
                Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="portfolio.php">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="skills.php">
                <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                Skills</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="brands.php">
                <i class="fa fa-modx" aria-hidden="true"></i>
                Brands</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="awards.php">
                <i class="fa fa-trophy" aria-hidden="true"></i>
                Awards</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="testimonial.php">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                Testimonial</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="settings.php">
                <i class="fa fa-cog" aria-hidden="true"></i>
                Settings</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile_edit.php">
                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                Profile</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
              <?php if(isset($_SESSION['login_success'])): ?>
              <a class="nav-link bg-danger login_register_button" href="logout.php">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                Logout</a>
              <?php else:?>
              <a class="nav-link login_register_button" href="login.php">
                <i class="fa fa-sign-in" aria-hidden="true"></i>
                Login/Register</a>
              <?php endif; ?>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </div>
  <div>
    <style>
      .nav-link {
        color: #ffffff !important;
      }

      .login_register_button {
        background-color: navy;
        color: white;
      }
      @media only screen and (max-width: 1400px) and (min-width: 1200px) {
        
      }

    </style>
  </div>
  <!-- header part end -->
