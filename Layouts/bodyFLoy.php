<!DOCTYPE html>
<html>
<?php
include "include/head.php";
?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

    <header class="main-header">
        <!-- Logo -->
        <a href="index.php" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>PC</b>IS</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Policing Control </b>IMS</span>
        </a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
            </a>

            <?php
            include "include/profileSection.php";
            ?>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <?php
        include "include/sidemenu.php";
        ?>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-12 connectedSortable">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box">
                                <div class="box-body">
                                    <form method="post" class="form-horizontal">
                                        <div  id="message">
                                            <!---Message field-->
                                        </div>
                                        <p><br></p>
                                        <div class="box-body">
                                            <div class="form-group">
                                                <label for="t_name" class="col-sm-2 control-label" >Full Name:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="t_name" maxlength="20" class="form-control">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="dob" class="col-sm-2 control-label" >Date Of Birth:</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" class="form-control" name="dob" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="gender" class="col-sm-2  control-label">Gender:</label>
                                                <div class="col-sm-10">
                                                    <select name="gender" class="form-control ">
                                                        <option selected="selected" disabled="disabled">Select Gender</option>
                                                        <option>Male</option>
                                                        <option>Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nrc" class="col-sm-2 control-label" >NRC:</label>
                                                <div class="col-sm-2">
                                                    <input type="text" maxlength="6" name="nrc" class="form-control">
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text" maxlength="2"name="nrc1" class="form-control">
                                                </div>
                                                <div class="col-sm-1">
                                                    <input type="text"  value="1" disabled class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="tsno" class="col-sm-2 control-label" >T.S Number:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" maxlength="10" name="tsno" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile" class="col-sm-2 control-label" >Mobile Number:</label>
                                                <div class="col-sm-10">
                                                    <input type="text" maxlength="10"  name="mobile" data-inputmask='"mask": "(999) 999-9999"' data-mask class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="sch" class="col-sm-2 control-label" >School:</label>
                                                <div class="col-sm-10">
                                                    <select name="sch" class="form-control">
                                                        <option selected="selected" disabled="disabled">Select School</option>
                                                        <option>Chilanga Primary</option>
                                                        <option>Rosebank</option>
                                                        <option>Great North Road Academy</option>
                                                        <option>Park Lands</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="qli" class="col-sm-2 control-label" >Qualification:</label>
                                                <div class="col-sm-10">
                                                    <select name="qli" id="qli" class="form-control">
                                                        <option selected="selected" disabled="disabled">Select Qualification</option>
                                                        <option>Diploma</option>
                                                        <option>Bachalor</option>
                                                        <option>Masters</option>
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="email" class="col-sm-2 control-label" >Email Address:</label>
                                                <div class="col-sm-10">
                                                    <div class="input-group">
                                                        <input type="email" name="email" class="form-control">
                                                        <div class="input-group-addon">
                                                            <i>@Example.com</i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="position" class="col-sm-2 control-label" >Position:</label>
                                                <div class="col-sm-10">
                                                    <select name="position" class="form-control">
                                                        <option selected="selected" disabled="disabled">Select Positon</option>
                                                        <option>Class Teacher</option>
                                                        <option>Head Of Department</option>
                                                        <option>Deputy Head Teacher</option>
                                                        <option>Head Teacher</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>


                                        <!-- /.box-body -->
                                        <div class="box-footer">
                                            <p  id="cancel" class="btn btn-default">Cancel</p>
                                            <button id="add_tea" class="btn btn-info pull-right">Send</button>
                                        </div>
                                        <!-- /.box-footer -->
                                    </form>
                                </div>
                                <!-- /.box-body -->

                            </div>
                        </div>
                    </div>


                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->

        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php
    include "include/footer.php";
    ?>
    <!-- Control Sidebar -->
    <?php

    include "include/settings.php";
    ?>
    <!-- /.control-sidebar -->
    <!-- Add the sidebar's background. This div must be placed
         immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<?php
include "include/javaScript.php";
?>
</body>
</html>
