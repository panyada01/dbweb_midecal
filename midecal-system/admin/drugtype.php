<!DOCTYPE html>
<html lang="en">
<?php $menu = "drugtype"; ?>
<?php include("head_ad.php"); ?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include("navbar_ad.php"); ?>
        <!-- /.navbar -->
        <?php include("menu_ad.php"); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">

                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <!-- ./col -->
                    <div class="col-md-12">
                        <?php
                        $menu = (isset($_GET['dt_id ']) ? $_GET['dt_id '] : '');
                        if ($act == 'add') {
                            include('');
                        } elseif ($worker == 'edit') {
                            include('');
                        } else {
                            include('drugtypelist.php');
                        }
                        ?>
                    </div>
                </div>
                <!-- /.row -->

        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include("footer_ad.php"); ?>
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include("script_ad.php"); ?>
</body>

</html>