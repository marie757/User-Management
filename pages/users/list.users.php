<?php
require '../../includes/conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <?php require '../../includes/links.php' ?>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
    </div>

    <?php require '../../includes/navbar.php' ?>


    <?php require '../../includes/sidebar.php' ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">List users</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
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
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="card card-primary">
                <div class="card-header">
                  <h5 class="header-title">List users</h5>
                </div>
                
                  <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                           <th>Firstname</th> 
                           <th>Middlename</th> 
                           <th>Lastname</th> 
                           <th>Email</th> 
                           <th>Username</th> 
                           <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $select_user = mysqli_query($conn, "SELECT * FROM tbl_users");
                        while ($row = mysqli_fetch_array($select_user)) {
                        ?>
                        <tr>
                            <td><?php echo $row['firstname']?></td>
                            <td><?php echo $row['middlename']?></td>
                            <td><?php echo $row['lastname']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['username']?></td>
                            <td>
                              <a href="update.users.php?user_id=<?php echo $row['user_id']?>" class="btn btn-primary">Update</a>
                              <a href="userData/ctrl.delete.user.php?user_id=<?php echo $row['user_id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    </table>
                    </div>
                  <div class="card-footer">
                    
                  </div>
                
            </div>
          </div>
        </div>

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->



            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->

            <!-- solid sales graph -->

            <!-- Calendar -->

          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php require '../../includes/footer.php' ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->

  <?php require '../../includes/scripts.php' ?>

</body>

</html>