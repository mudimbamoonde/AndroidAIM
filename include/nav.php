<header class="main-header">
    <nav class="navbar navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a href="home.php" class="navbar-brand"><b>AIMS:</b>MIS</a>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                    <i class="fa fa-bars"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                <ul class="nav navbar-nav">

                    <li><a href="index.php">Home Page <span class="sr-only">(current)</span></a></li>

                    <li><a href="my_course.php">My Course Study</a></li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Results <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Current</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Payments <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Payment History</a></li>
                            <li><a href="semester_registration.php">Make Payments</a></li>

                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">School Registrations <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="exam_registration.php">Exam Registration</a></li>
                            <li><a href="resdential.php">Residential Registration</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Student Details <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="#">My Details</a></li>
                            <li><a href="#">Certificates</a></li>
                            <li><a href="#">Program Outline</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php" >Logout</a></li>
                    <li><a href=#" class="btn btn-danger" ><?php echo $_SESSION["name"] ?></a ></li>

                </ul>
            </div>
            <!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->

            <!-- /.navbar-custom-menu -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</header>