<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="76x76" href="assets/img/logo-Web Panel.gif" />
    <link rel="icon" type="image/png" href="assets/img/logo-Web Panel.gif" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>SPAC | Web Panel</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet">
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet">
    <!--     Fonts and icons     -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/google-roboto-300-700.css" rel="stylesheet">

<body>
    <nav class="navbar navbar-primary navbar-transparent navbar-absolute">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">

                </ul>
            </div>
        </div>
    </nav>
    <div class="limiter">

        <div class="full-page login-page" filter-color="white" data-image="assets/img/register.jpg">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                            <form method="POST" action="includes/data_model.php">
                                <div class="card card-login card-hidden">
                                    <div class="card-header text-center" data-background-color="orange">
                                        <h4 class="card-title">SPAC | Login</h4>
                                        <div class="social-line">

                                        </div>
                                    </div>
                                    <p class="category text-center">
                                    </p>
                                    <div class="card-content">
                                        <div class="input-group" type="text">
                                            <span class="input-group-addon">
                                                <i class="material-icons"><br><br>person</i>
                                            </span>
                                            <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                                                <label class="control-label">Username</label>
                                                <input type="text" class="form-control"  name="username" id="username">
                                            </div>
                                        </div>
                                    </div>
									<div class="card-content">
                                        <div class="input-group" data-validate = "Password is required">
                                            <span class="input-group-addon">
                                                <i class="material-icons"><br><br>lock_outline</i>
                                            </span>
                                            <div class="wrap-input100 validate-input m-b-10" data-validate = "password is required">
                                                <label class="control-label">Password</label>
                                                <input type="password" class="form-control" type="password" name="password"  id="password">
                                            </div>
                                        </div>
										 </div>

                                    <div class="footer text-center">
                                        <button type="submit" name="signin" class="btn btn-success btn-simple btn-wd btn-lg">Login</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

<!--===============================================================================================-->
	<script src=") ?>assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src=") ?>assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src=") ?>assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src=") ?>assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src=") ?>assets/login/js/main.js"></script>

        </div>
    </div>
</body>
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">

        <ul class="dropdown-menu">
            <li class="header-title">Background Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <div class="togglebutton switch-sidebar-image">
                        <label>
                            <input type="checkbox" checked="">
                        </label>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger active-color">
                    <p>Filters</p>
                    <div class="badge-colors pull-right">
                        <span class="badge filter active" data-color="black"></span>
                        <span class="badge filter badge-blue" data-color="blue"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                        <span class="badge filter badge-rose" data-color="rose"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
           <li class="header-title">Background Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-1.jpg"data-src="assets/img/login.jpeg"alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-2.jpg"data-src="assets/img/lock.jpeg"alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-3.jpg"data-src="assets/img/header-doc.jpeg"alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="assets/img/sidebar-4.jpg" data-src="assets/img/bg-pricing.jpeg"alt="" />
                </a>
            </li>
        </ul>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="assets/js/jquery-3.1.1.min.js"type="text/javascript"></script>
<script src="assets/js/jquery-ui.min.js"type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js"type="text/javascript"></script>
<script src="assets/js/material.min.js"type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js"type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets/js/moment.min.js"></script>
<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>
<!--  Plugin for the Wizard -->
<script src="/assets/js/jquery.bootstrap-wizard.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>
<!--   Sharrre Library    -->
<script src="assets/js/jquery.sharrre.js"></script>
<!-- DateTimePicker Plugin -->
<script src="assets/js/bootstrap-datetimepicker.js"></script>
<!-- Vector Map plugin -->
<script src="assets/js/jquery-jvectormap.js"></script>
<!-- Sliders Plugin -->
<script src="assets/js/nouislider.min.js"></script>
<!--  Google Maps Plugin    -->
<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
<!-- Select Plugin -->
<script src="assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="assets/js/sweetalert2.js"></script>
<script src="assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>
<script src="assets/js/demo.js"></script>
<script type="text/javascript">
    $().ready(function() {
        demo.checkFullPageBackgroundImage();

        setTimeout(function() {
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>
</html>
