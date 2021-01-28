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
          <li class="nav-item">
            <a href="index.php" class="nav-link">
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
            <a href="analysis.php" class="nav-link active">
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
    <section class="content-header" style="display:none;">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Overall Health Analysis</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Analysis</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row" style="display:none;">
          <div class="col-12">
            <!-- interactive chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Daily Based Analysis
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--Real time
                  <div class="btn-group" id="realtime" data-toggle="btn-toggle">
                    <button type="button" class="btn btn-default btn-sm active" data-toggle="on">On</button>
                    <button type="button" class="btn btn-default btn-sm" data-toggle="off">Off</button>
                  </div>-->
                </div>
              </div>
              <div class="card-body">
                <div id="interactive" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->

          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div>
                <h1>Sugar Level Analysis</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <div class="row">
          <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Daily Based Analysis
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="line-chart" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- Donut chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Overall Statistics
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="donut-chart" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div>
                <h1>Pressure Level Analysis</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <div class="row">
          <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Daily Based Analysis
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="line-chart2" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- Donut chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Overall Statistics
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="donut-chart2" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div>
                <h1>Oxygen Level Analysis</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <div class="row">
          <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Daily Based Analysis
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="line-chart3" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- Donut chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Overall Statistics
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="donut-chart3" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div>
                <h1>Heart Rate Analysis</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <div class="row">
          <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Daily Based Analysis
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="line-chart4" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- Donut chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Overall Statistics
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="donut-chart4" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div>
                <h1>Respiration Rate Analysis</h1>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>
        <div class="row">
          <div class="col-md-6">
            <!-- Line chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Daily Based Analysis
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="line-chart5" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-6">
            <!-- Donut chart -->
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="far fa-chart-bar"></i>
                  Overall Statistics
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <!--<button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>-->
                </div>
              </div>
              <div class="card-body">
                <div id="donut-chart5" style="height: 300px;"></div>
              </div>
              <!-- /.card-body-->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
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
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- FLOT CHARTS -->
<script src="../plugins/flot/jquery.flot.js"></script>
<!-- FLOT RESIZE PLUGIN - allows the chart to redraw when the window is resized -->
<script src="../plugins/flot/plugins/jquery.flot.resize.js"></script>
<!-- FLOT PIE PLUGIN - also used to draw donut charts -->
<script src="../plugins/flot/plugins/jquery.flot.pie.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>

<!-- Page specific script -->
<script>
var response;

/*function getData() {
    $.post('general_process.php', {'function' : 'graph_data_daily'}, 
    function(response) {
        response = JSON.parse(response);
        //alert(response[0].data[0].sugar);
        for(var i=0;i<response.length;i++){
            //alert(response[i].data[0].date);
        }
    });
}
getData();*/

  function getData() {
      
    var aj1 = [], aj2 = [], aj3 = [], aj4 = [], aj5 = [], aj6 = [];
    var sugar_ok = 0, pressure_ok = 0, oxygen_ok = 0, heart_rate_ok = 0, respiration_ok = 0, sugar_not_ok = 0, pressure_not_ok = 0, oxygen_not_ok = 0, heart_rate_not_ok = 0, respiration_not_ok = 0, total_value = 0;
      
    $.post('general_process.php', {'function' : 'graph_data_daily'}, 
    function(response) {
        response = JSON.parse(response);
        for(var i=0;i<response.length;i++){
            aj1.push([i, response[i].data[0].sugar]);
            aj2.push([i, response[i].data[0].pressure1]);
            aj3.push([i, response[i].data[0].pressure2]);
            aj4.push([i, response[i].data[0].oxygen]);
            aj5.push([i, response[i].data[0].heart_rate]);
            aj6.push([i, response[i].data[0].respiration]);
            
            if(response[i].data[0].sugar>199){ sugar_not_ok+=1; }else{ sugar_ok+=1; }
            if(response[i].data[0].pressure1>140 || response[i].data[0].pressure1<80){ pressure_not_ok+=1; }else{ pressure_ok+=1; }
            if(response[i].data[0].oxygen<96){ oxygen_not_ok+=1; }else{ oxygen_ok+=1; }
            if(response[i].data[0].heart_rate>99){ heart_rate_not_ok+=1; }else{ heart_rate_ok+=1; }
            if(response[i].data[0].respiration>19){ respiration_not_ok+=1; }else{ respiration_ok+=1; }
            if(response[i].data[0].sugar>0){ total_value+=1; }
            
        }
        
        sugar_ok = (sugar_ok/total_value)*100;
        pressure_ok = (pressure_ok/total_value)*100;
        oxygen_ok = (oxygen_ok/total_value)*100;
        heart_rate_ok = (heart_rate_ok/total_value)*100;
        respiration_ok = (respiration_ok/total_value)*100;
            
        sugar_not_ok = (sugar_not_ok/total_value)*100;
        pressure_not_ok = (pressure_not_ok/total_value)*100;
        oxygen_not_ok = (oxygen_not_ok/total_value)*100;
        heart_rate_not_ok = (heart_rate_not_ok/total_value)*100;
        respiration_not_ok = (respiration_not_ok/total_value)*100;
        
    /*
     * Flot Interactive Chart
     * -----------------------
     */
    // We use an inline data source in the example, usually data would
    // be fetched from a server
    var data        = [],
        totalPoints = 100

    function getRandomData() {

      if (data.length > 0) {
        data = data.slice(1)
      }

      // Do a random walk
      while (data.length < totalPoints) {

        var prev = data.length > 0 ? data[data.length - 1] : 50,
            y    = prev + Math.random() * 10 - 5

        if (y < 0) {
          y = 0
        } else if (y > 100) {
          y = 100
        }

        data.push(y)
      }

      // Zip the generated y values with the x values
      var res = []
      for (var i = 0; i < data.length; ++i) {
        res.push([i, data[i]])
      }

      return res
    }

    var interactive_plot = $.plot('#interactive', [
        {
          data: getRandomData(),
        }
      ],
      {
        grid: {
          borderColor: '#f3f3f3',
          borderWidth: 1,
          tickColor: '#f3f3f3'
        },
        series: {
          color: '#3c8dbc',
          lines: {
            lineWidth: 2,
            show: true,
            fill: true,
          },
        },
        yaxis: {
          min: 0,
          max: 100,
          show: true
        },
        xaxis: {
          show: true
        }
      }
    )

    var updateInterval = 500 //Fetch data ever x milliseconds
    var realtime       = 'on' //If == to on then fetch data every x seconds. else stop fetching
    function update() {

      interactive_plot.setData([getRandomData()])

      // Since the axes don't change, we don't need to call plot.setupGrid()
      interactive_plot.draw()
      if (realtime === 'on') {
        setTimeout(update, updateInterval)
      }
    }

    //INITIALIZE REALTIME DATA FETCHING
    if (realtime === 'on') {
      update()
    }
    //REALTIME TOGGLE
    $('#realtime .btn').click(function () {
      if ($(this).data('toggle') === 'on') {
        realtime = 'on'
      }
      else {
        realtime = 'off'
      }
      update()
    })
    /*
     * END INTERACTIVE CHART
     */


    /*
     * LINE CHART 1
     * ----------
     */
    //LINE randomly generated data
    
    var line_data1 = {
      data : aj1,
      color: '#3c8dbc'
    }
    $.plot('#line-chart', [line_data1], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(0),
            y = item.datapoint[1].toFixed(0)

        $('#line-chart-tooltip').html('Sugar Value at ' + x + ' hours = ' + y + ' mg/dL')
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart-tooltip').hide()
      }

    })
    /* END LINE CHART */
    /*
     * LINE CHART 2
     * ----------
     */
    //LINE randomly generated data
    var line_data1 = {
      data : aj2,
      color: '#3c8dbc'
    }
    var line_data2 = {
      data : aj3,
      color: '#00c0ef'
    }
    $.plot('#line-chart2', [line_data1, line_data2], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart2-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart2').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(0),
            y = item.datapoint[1].toFixed(0)

        $('#line-chart2-tooltip').html('Pressure Value at ' + x + ' hours = ' + y + ' mm Hg')
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart2-tooltip').hide()
      }

    })
    /* END LINE CHART */
    /*
     * LINE CHART 3
     * ----------
     */
    //LINE randomly generated data

    var line_data1 = {
      data : aj4,
      color: '#3c8dbc'
    }
    $.plot('#line-chart3', [line_data1], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart3-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart3').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(0),
            y = item.datapoint[1].toFixed(0)

        $('#line-chart3-tooltip').html('Oxygen Level at ' + x + ' hours = ' + y + ' %')
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart3-tooltip').hide()
      }

    })
    /* END LINE CHART */
    /*
     * LINE CHART 4
     * ----------
     */
    //LINE randomly generated data

    var line_data1 = {
      data : aj5,
      color: '#3c8dbc'
    }
    $.plot('#line-chart4', [line_data1], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart4-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart4').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(0),
            y = item.datapoint[1].toFixed(0)

        $('#line-chart4-tooltip').html('Heart Rate at ' + x + ' hours = ' + y + ' /min')
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart4-tooltip').hide()
      }

    })
    /* END LINE CHART */
    /*
     * LINE CHART 5
     * ----------
     */
    //LINE randomly generated data
    
    var line_data1 = {
      data : aj6,
      color: '#3c8dbc'
    }
    $.plot('#line-chart5', [line_data1], {
      grid  : {
        hoverable  : true,
        borderColor: '#f3f3f3',
        borderWidth: 1,
        tickColor  : '#f3f3f3'
      },
      series: {
        shadowSize: 0,
        lines     : {
          show: true
        },
        points    : {
          show: true
        }
      },
      lines : {
        fill : false,
        color: ['#3c8dbc', '#f56954']
      },
      yaxis : {
        show: true
      },
      xaxis : {
        show: true
      }
    })
    //Initialize tooltip on hover
    $('<div class="tooltip-inner" id="line-chart5-tooltip"></div>').css({
      position: 'absolute',
      display : 'none',
      opacity : 0.8
    }).appendTo('body')
    $('#line-chart5').bind('plothover', function (event, pos, item) {

      if (item) {
        var x = item.datapoint[0].toFixed(0),
            y = item.datapoint[1].toFixed(0)

        $('#line-chart5-tooltip').html('Respiration at ' + x + ' hours = ' + y + ' /min')
          .css({
            top : item.pageY + 5,
            left: item.pageX + 5
          })
          .fadeIn(200)
      } else {
        $('#line-chart5-tooltip').hide()
      }

    })
    /* END LINE CHART */

    /*
     * DONUT CHART
     * -----------
     */

    var donutData = [
      {
        label: 'Danger',
        data : sugar_not_ok,
        color: '#e60000'
      },
      {
        label: 'Healthy',
        data : sugar_ok,
        color: '#3366cc'
      }
    ]
    $.plot('#donut-chart', donutData, {
      series: {
        pie: {
          show       : true,
          radius     : 1,
          innerRadius: 0.5,
          label      : {
            show     : true,
            radius   : 2 / 3,
            formatter: labelFormatter,
            threshold: 0.1
          }

        }
      },
      legend: {
        show: false
      }
    })
    /*
     * END DONUT CHART
     */
     /*
      * DONUT CHART 2
      * -----------
      */

     var donutData = [
       {
        label: 'Danger',
        data : pressure_not_ok,
        color: '#e60000'
      },
      {
        label: 'Healthy',
        data : pressure_ok,
        color: '#3366cc'
      }
     ]
     $.plot('#donut-chart2', donutData, {
       series: {
         pie: {
           show       : true,
           radius     : 1,
           innerRadius: 0.5,
           label      : {
             show     : true,
             radius   : 2 / 3,
             formatter: labelFormatter,
             threshold: 0.1
           }

         }
       },
       legend: {
         show: false
       }
     })
     /*
      * END DONUT CHART
      */
      /*
       * DONUT CHART 3
       * -----------
       */

      var donutData = [
        {
        label: 'Danger',
        data : oxygen_not_ok,
        color: '#e60000'
      },
      {
        label: 'Healthy',
        data : oxygen_ok,
        color: '#3366cc'
      }
      ]
      $.plot('#donut-chart3', donutData, {
        series: {
          pie: {
            show       : true,
            radius     : 1,
            innerRadius: 0.5,
            label      : {
              show     : true,
              radius   : 2 / 3,
              formatter: labelFormatter,
              threshold: 0.1
            }

          }
        },
        legend: {
          show: false
        }
      })
      /*
       * END DONUT CHART
       */
       /*
        * DONUT CHART 4
        * -----------
        */

       var donutData = [
         {
        label: 'Danger',
        data : heart_rate_not_ok,
        color: '#e60000'
      },
      {
        label: 'Healthy',
        data : heart_rate_ok,
        color: '#3366cc'
      }
       ]
       $.plot('#donut-chart4', donutData, {
         series: {
           pie: {
             show       : true,
             radius     : 1,
             innerRadius: 0.5,
             label      : {
               show     : true,
               radius   : 2 / 3,
               formatter: labelFormatter,
               threshold: 0.1
             }

           }
         },
         legend: {
           show: false
         }
       })
       /*
        * END DONUT CHART
        */
       /*
       * DONUT CHART 5
       * -----------
       */

       var donutData = [
         {
        label: 'Danger',
        data : respiration_not_ok,
        color: '#e60000'
      },
      {
        label: 'Healthy',
        data : respiration_ok,
        color: '#3366cc'
      }
       ]
       $.plot('#donut-chart5', donutData, {
         series: {
           pie: {
             show       : true,
             radius     : 1,
             innerRadius: 0.5,
             label      : {
               show     : true,
               radius   : 2 / 3,
               formatter: labelFormatter,
               threshold: 0.1
             }

           }
         },
         legend: {
           show: false
         }
       })
       /*
       * END DONUT CHART
       */

    });
}
getData();

  /*
   * Custom Label formatter
   * ----------------------
   */
  function labelFormatter(label, series) {
    return '<div style="font-size:13px; text-align:center; padding:2px; color: #fff; font-weight: 600;">'
      + label
      + '<br>'
      + Math.round(series.percent) + '%</div>'
  }
</script>
</body>
</html>
