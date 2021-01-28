<!DOCTYPE html>
<html lang="en">
    
<?php
require '../connection.php';
date_default_timezone_set('Asia/Kolkata');
$curr_date = date('Y-m-d H:i:s');
?>
    
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
            <a href="records.php" class="nav-link active">
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
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><font onclick="recordEntry()" id="recordEntryTitle" style="color:#3366cc;">Medical Record Entry</font> | <font onclick="recordDisplay()" id="recordDisplayTitle">View Medical Records</font></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item active">Medical Records</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- general form elements -->
    <section class="content" id="record_entry">
      <div class="container-fluid">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Record Entry Form</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" enctype="multipart/form-data">
              <div class="card-body">
                <div class="form-group">
                  <label for="">Record Name</label>
                  <input type="text" class="form-control" name="rcrd_name" placeholder="Enter Record name" required>
                </div>
                <div class="form-group">
                  <label for="">Date</label>
                  <input type="date" class="form-control" name="rcrd_date" placeholder="Enter Date" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Record File</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="rcrd_file" required>
                      <label class="custom-file-label" for="exampleInputFile">Choose Record File (PDF)</label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary" name="rcrd_submit">Submit Record</button>
              </div>
            </form>
          </div>
      </div>
    </section>

    <!-- Main content -->
    <section class="content" id="record_display" style="display:none;">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <!--<div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>-->
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl No.</th>
                    <th>Record Name</th>
                    <th>Date</th>
                    <th>File</th>
                  </tr>
                  </thead>
                  <tbody>
                      
                <?php
                $conn = database_info(); 
                $sql="SELECT * FROM medical_record WHERE emp_id=:emp_id ORDER BY rcd_date DESC";
        		$stmt = $conn->prepare($sql); 
        		$stmt->bindParam(':emp_id', $_SESSION["emp_id"]);
        		$stmt->execute();
        		$i=1;
        		while($row= $stmt->fetch(PDO::FETCH_BOTH))
                    {
                ?>
                
                  <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $row['rcd_name']; ?></td>
                    <td><?php echo $row['rcd_date']; ?></td>
                    <td><a class="btn btn-primary" href="<?php echo $row['rcd_file']; ?>" target="_blank">View</a></td>
                  </tr>
                  
                <?php
                        $i+=1;
                    }
                database_close($conn);
                ?>
                
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
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
<!-- DataTables  & Plugins -->
<script src="../plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../plugins/jszip/jszip.min.js"></script>
<script src="../plugins/pdfmake/pdfmake.min.js"></script>
<script src="../plugins/pdfmake/vfs_fonts.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["pdf", "excel", "print"]
      //"buttons": ["copy", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

<!-- AJ Script -->

<script>
document.getElementById("record_entry").style.display = "block";
document.getElementById("record_display").style.display = "none";
document.getElementById("recordEntryTitle").style.color = "#3366cc";
document.getElementById("recordDisplayTitle").style.color = "#000";

function recordEntry() {
    document.getElementById("record_entry").style.display = "block";
    document.getElementById("record_display").style.display = "none";
    document.getElementById("recordEntryTitle").style.color = "#3366cc";
    document.getElementById("recordDisplayTitle").style.color = "#000";
}

function recordDisplay() {
    document.getElementById("record_entry").style.display = "none";
    document.getElementById("record_display").style.display = "block";
    document.getElementById("recordEntryTitle").style.color = "#000";
    document.getElementById("recordDisplayTitle").style.color = "#3366cc";
}

</script>

<!-- AJ Script -->

</body>
</html>

<?php
$conn = database_info(); 

if(isset($_POST["rcrd_submit"]))  {
    $name = $_POST["rcrd_name"];
    $date = $_POST["rcrd_date"];
    
    $sql = "SELECT * FROM autogenerate";
	$stmt = $conn->prepare($sql); 
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_BOTH);
	$id = $row["record_id"]+1;
	if($id < 10){ $id2='00000'; }
	else if($id >= 10){ $id2='0000'; }
	else if($id >= 100){ $id2='000'; }
	else if($id >= 1000){ $id2='00'; }
	else if($id >= 10000){ $id2='0'; }
	else { $id2=''; }
	$rcrd = 'RCRD';
	$id3 = $rcrd.$id2.$id;

    $location = '../medical_records/';
    $filename = $id3.'.pdf';
    $res1 = move_uploaded_file($_FILES['rcrd_file']['tmp_name'],$location.$filename);
    $filename = $location.$filename;

    if($res1){
	    $sql = "UPDATE `autogenerate` SET `record_id`=`record_id`+1";
		$stmt = $conn->prepare($sql); 
		$stmt->execute();
	    $sql = "SELECT * FROM autogenerate";
		$stmt = $conn->prepare($sql); 
		$stmt->execute();
		$row = $stmt->fetch(PDO::FETCH_BOTH);
		$id = $row["record_id"];
		if($id < 10){ $id2='00000'; }
		else if($id >= 10){ $id2='0000'; }
		else if($id >= 100){ $id2='000'; }
		else if($id >= 1000){ $id2='00'; }
		else if($id >= 10000){ $id2='0'; }
		else { $id2=''; }
		$rcrd = 'RCRD';
		$id3 = $rcrd.$id2.$id;
		
		$sql = "insert into medical_record(`rcd_id`,`emp_id`,`rcd_name`,`rcd_file`,`rcd_date`,`entry_date`) values(:rcd_id,:emp_id,:rcd_name,:rcd_file,:rcd_date,:entry_date)";
	    $stmt = $conn->prepare($sql);
		$stmt->bindParam(':rcd_id', $id3);
		$stmt->bindParam(':emp_id', $_SESSION["emp_id"]);
		$stmt->bindParam(':rcd_name', $name);
		$stmt->bindParam(':rcd_file', $filename);
		$stmt->bindParam(':rcd_date', $date);
		$stmt->bindParam(':entry_date', $curr_date);
		if($stmt->execute()){  
		    echo "<script>alert('Record Uploaded Successfully');window.location='records.php'</script>"; 
		}
		else{
		    echo "<script>alert('Something Went Wrong !');</script>"; 
		}
    }
    else{
	    echo "<script>alert('Error in Fie Upload !');</script>"; 
	}
}

database_close($conn);
?>