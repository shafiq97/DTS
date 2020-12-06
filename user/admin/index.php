<?php include 'settings.php'; //include settings ?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/admin/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/admin/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Admin dashboard
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/admin/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/admin/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/admin/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="blue">
      <!--Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow" -->
     
      <div class="logo">
        <center> 
        <a href="https://www.iium.edu.my/" class="simple-text logo-normal">
        <img src="https://upload.wikimedia.org/wikipedia/en/thumb/8/8f/International_Islamic_University_Malaysia_logo.svg/1200px-International_Islamic_University_Malaysia_logo.svg.png" width="70" height="70"  title="iium" alt="iium" /> 
        </a>
        <a class="simple-text logo-normal">DTS Admin Dashboard</a>
        </center>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
          <li class="{{'dashboard'== request()->path() ? 'active' :''}}">
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <p>Dashboard</p>
            </a>
          </li>
          
          <li class = "{{'abouts'== request()->path() ? 'active' :''}}">
            <a href="/abouts">
              <i class="now-ui-icons ui-1_bell-53"></i>
              <p>Announcement</p>
            </a>
          </li>
          <li class = "{{'role-register'== request()->path() ? 'active' :''}}">
            <a href="/role-register">
              <i class="now-ui-icons users_single-02"></i>
              <p>User Profile</p>
            </a>
          </li>
          
          <li class="active-pro">
          <a href="https://www.iium.edu.my/" class="simple-text logo-normal">
            DTS Admin Dashboard
          </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Admin Dashboard</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              
              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  <?php $ufunc->UserName();?>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="../../includes/logout.php">Logout</a>

                                </div>
                            </li>


                <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                  <i class="far fa-bell"></i>
                  <span class="badge badge-warning navbar-badge">1</span>
                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/register">
                                       # new user
                                    </a>

                                    
                                </div>
                            </li>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->


      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
      

<div class="row">
          <!-- <div class="col-md-12"> -->
            <div class="card card-plain">
              <div class="card-header">
              <br>
              <br>
                <!-- <h4 class="card-title "> Admin Dashboard</h4> -->
                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                  <div class="section">
                  <div class="card-body">
                    <div class="alert alert-primary">
                      <span>Update user role</span>
                    </div>
                    
                    <div class="alert alert-primary">
                      <span>Create announcement</span>
                    </div>
                  </div>
                        <!-- <a class = "button" href="/register">UPDATE USER ROLE</a>
                        <a class = "button" href="/aboutus">ANNOUCEMENT</a> -->
                  
                </div>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.iium.edu.my">
                  Document Tracking System
                </a>
              </li>
              <li>
                <a href="https://www.iium.edu.my">
                  About Us
                </a>
              </li>

            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">ANIZATI</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">ANIZATI</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/admin/js/core/jquery.min.js"></script>
  <script src="../assets/admin/js/core/popper.min.js"></script>
  <script src="../assets/admin/js/core/bootstrap.min.js"></script>
  <script src="../assets/admin/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/admin/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/admin/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/admin/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/admin/demo/demo.js"></script>
 
</body>

</html>
