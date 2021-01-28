<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Choose Wellness</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="../dist/img/logo_small.png">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <img src="../dist/img/logo_small.png" alt="Profile Pic" style="height:50px;" style="opacity: 1">
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link"><h3>Choose Wellness</h3></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <?php if($_SESSION["emp_gender"] == "Male"){ ?><img src="../dist/img/avatarMale.png" alt="Profile Pic" class="brand-image img-circle elevation-3" style="opacity: 1"><?php } ?>
            <?php if($_SESSION["emp_gender"] == "Female"){ ?><img src="../dist/img/avatarFemale.png" alt="Profile Pic" class="brand-image img-circle elevation-3" style="opacity: 1"><?php } ?>
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["emp_name"]; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="index.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="records.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Medical Records
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="analysis.php" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Analysis
              </p>
            </a>
          </li>
          <!--<li class="nav-item">
            <a href="mail.html" class="nav-link">
              <i class="nav-icon far fa-bell"></i>
              <p>
                Mailbox
              </p>
            </a>
          </li>-->
          <!--<li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Contact
              </p>
            </a>
          </li>-->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0" style="">Current Stats</h1>
            <p class="m-0" style="color:#a6a6a6;">Last Updated : <font id="last_updated"></font></p>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="sugar_level"></h3>
                <p>Sugar Level</p>
              </div>
              <div class="icon">
                <i class="ion ion-cube"></i>
              </div>
              <a href="analysis.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="pressure_level"></h3>
                <p>Pressure level</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="analysis.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="color:white;" id="oxygen_level"></h3>
                <p style="color:white;">Oxygen Level</p>
              </div>
              <div class="icon">
                <i class="ion ion-thermometer"></i>
              </div>
              <a href="analysis.php" class="small-box-footer"><font style="color:white;">More info <i class="fas fa-arrow-circle-right"></i></font></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 id="heart_rate"></h3>
                <p>Heart Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-heart"></i>
              </div>
              <a href="analysis.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-brown" style="background-color:#e67300;">
              <div class="inner">
                <h3 style="color:white;" id="respiration"></h3>
                <p style="color:white;">Respiration Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-bicycle"></i>
              </div>
              <a href="analysis.php" class="small-box-footer"><font style="color:white;">More info <i class="fas fa-arrow-circle-right"></i></font></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="card card-row card-primary">
          <div class="card-header">
            <h3 class="card-title">
              Predictions
            </h3>
          </div>
          <div class="card-body" id="prediction_tab">
            <!--<div class="card card-primary card-outline" style="background-color:#b3e6ff;">
              <div class="card-header">
                <h5 class="card-title">Create first milestone</h5>
              </div>
            </div>
            <div class="card card-danger card-outline" style="background-color:#ffc2b3;">
              <div class="card-header">
                <h5 class="card-title">Create first milestone</h5>
              </div>
            </div>-->
          </div>
        </div>
        <!-- Main row -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy;2021 <a href="./">Choose Wellness</a>.</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->




<!-- jQuery -->
<script src="../plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../dist/js/pages/dashboard.js"></script>

<!-- AJ Script -->

<script>

function getData() {
    $.post('general_process.php', {'function' : 'get_data'}, 
    function(response) {
        var response = JSON.parse(response);
        document.getElementById('sugar_level').innerHTML = response.sugar_level+'<h6>mg/dL</h6>';
        document.getElementById('pressure_level').innerHTML = response.pressure_level1+'/'+response.pressure_level2+'<h6>mm Hg</h6>';
        document.getElementById('oxygen_level').innerHTML = response.oxygen_level+'<h6>%</h6>';
        document.getElementById('heart_rate').innerHTML = response.heart_rate+'<h6>/min</h6>';
        document.getElementById('respiration').innerHTML = response.respiration+'<h6>/min</h6>';
        document.getElementById('last_updated').innerHTML = response.last_updated;
        
        document.getElementById("prediction_tab").innerHTML = "";
        
        var danger = 0;
        
        if(response.sugar_level > 140 && response.sugar_level < 199){
            danger = 1;
            document.getElementById("prediction_tab").innerHTML += "<div class='card card-danger card-outline' style='background-color:#ffc2b3;'> <div class='card-header'> <h5 class='card-title'>Your Current Data shows signs of Pre-Diabetes !</h5> </div> </div>";
        }
        if(response.sugar_level > 200){
            danger = 1;
            document.getElementById("prediction_tab").innerHTML += "<div class='card card-danger card-outline' style='background-color:#ffc2b3;'> <div class='card-header'> <h5 class='card-title'>Your Current Data shows signs of Diabetes !</h5> </div> </div>";
        }
        if(response.pressure_level2 < 80){
            danger = 1;
            document.getElementById("prediction_tab").innerHTML += "<div class='card card-danger card-outline' style='background-color:#ffc2b3;'> <div class='card-header'> <h5 class='card-title'>Your Current Data shows signs of Low Pressure(Hypotension) !</h5> </div> </div>";
        }
        if(response.pressure_level1 > 140){
            danger = 1;
            document.getElementById("prediction_tab").innerHTML += "<div class='card card-danger card-outline' style='background-color:#ffc2b3;'> <div class='card-header'> <h5 class='card-title'>Your Current Data shows signs of High Pressure(Hypertension) !</h5> </div> </div>";
        }
        if(response.oxygen_level < 95){
            danger = 1;
            document.getElementById("prediction_tab").innerHTML += "<div class='card card-danger card-outline' style='background-color:#ffc2b3;'> <div class='card-header'> <h5 class='card-title'>Your Current Data shows signs of Hypoxemia !</h5> </div> </div>";
        }
        if(response.pressure_level1 > 140 && response.pressure_level2 > 90 && response.heart_rate > 100){
            danger = 1;
            document.getElementById("prediction_tab").innerHTML += "<div class='card card-danger card-outline' style='background-color:#ffc2b3;'> <div class='card-header'> <h5 class='card-title'>Your Current Data shows signs of Coronary Heart Disease !</h5> </div> </div>";
        }
        if(response.oxygen_level < 96 && response.heart_rate > 99 && response.respiration > 20){
            danger = 1;
            document.getElementById("prediction_tab").innerHTML += "<div class='card card-danger card-outline' style='background-color:#ffc2b3;'> <div class='card-header'> <h5 class='card-title'>Your Current Data shows signs of Asthma !</h5> </div> </div>";
        }
        
        if(danger == 0){
            document.getElementById("prediction_tab").innerHTML += "<div class='card card-primary card-outline' style='background-color:#b3e6ff;'> <div class='card-header'> <h5 class='card-title'>You are Perfectly Alright !</h5> </div> </div>";
        }
        
    });
}
getData();
setInterval(function(){
    getData()
}, 5000);

</script>

<!-- AJ Script -->

</body>
</html>
