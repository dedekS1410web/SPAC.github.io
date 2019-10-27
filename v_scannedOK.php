<?php
    include 'includes/user_token.php';

    include 'includes/myfirebase.php';

    // data admin
    $reference = 'Admin/'.$_SESSION['username'];
    $checkdata = $database->getReference($reference)->getValue();

    // cetak data admin
    $nama_admin_f = $checkdata['nama_admin'];

    // data parts
    $parts = 'parts';
    $checkdata_parts = $database->getReference($parts)->getValue();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>SPAC | Web Panel</title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <!--  Material Dashboard CSS    -->
    <link href="assets/css/material-dashboard.css" rel="stylesheet" />
    <!--     Fonts and icons     -->
    <link href="assets/css/demo.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/google-roboto-300-700.css" rel="stylesheet" />
    <!-- Select2 -->
    <link rel="stylesheet" href="assets/components/select2/dist/css/select2.min.css">

    <!-- Pace -->
    <link rel="stylesheet" href="assets/components/pace2/themes/blue/pace-theme-flash.css" />
    <!-- sweetalert -->
    <link rel="stylesheet" href="assets/components/sweetalert2/dist/sweetalert2.min.css"/>
    <link rel="stylesheet" href="assets/orgchart/css/jquery.orgchart.css">
    <link rel="stylesheet" href="assets/orgchart/css/style.css">
  <style type="text/css">
  table.dataTable tbody td {
  vertical-align: center;
}

  .row{
    margin-top:10px;
    margin-bottom:10px;
    padding: 0 10px;

  }
  .secondpanel {
      margin-left: 45px
  }
  .clickable{
    cursor: pointer;
  }

  .panel-heading span {
    margin-top: -20px;
    font-size: 15px;
  }
  hr.style13 {
    height: 10px;
    border: 0;
    box-shadow: 0 10px 10px -10px #8c8b8b inset;
}
  .contentHolder {
    position:relative;
    margin:0px auto;
    padding:0px;
    height: 555px;
    overflow: hidden;
    border: 0px solid #CCC;
    }
  .has-error .select2-selection {
    border: 1px solid #a94442;
    border-radius: 4px;
}
  .text-wrap{
    white-space:normal;
  }
  .width-200{
    width:220px;
  }
  tr.group {
   background-color: #B2B2B3 !important;
   color: white;
   },
   tr.group:hover {
    background-color: #B2B2B3 !important;
  }
  #chart-container { height: 600px; border: 2px solid #aaa; }
    .orgchart { background: #fff; }
    .orgchart { background: #fff; }
    .orgchart td.left, .orgchart td.right, .orgchart td.top { border-color: #aaa; }
    .orgchart td>.down { background-color: #aaa; }
    .orgchart .middle-level .title { background-color: #006699; }
    .orgchart .middle-level .content { border-color: #006699; }
    .orgchart .product-dept .title { background-color: #009933; }
    .orgchart .product-dept .content { border-color: #009933; }
    .orgchart .rd-dept .title { background-color: #993366; }
    .orgchart .rd-dept .content { border-color: #993366; }
    .orgchart .pipeline1 .title { background-color: #996633; }
    .orgchart .pipeline1 .content { border-color: #996633; }
    .orgchart .frontend1 .title { background-color: #cc0066; }
    .orgchart .frontend1 .content { border-color: #cc0066; }


</style>
<script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-active-color="blue" data-background-color="black" data-image="assets/img/sidebar-1.jpg">
    <div class="logo">
        <a href="#" class="simple-text">
            SPAC | Web Panel
        </a>
    </div>
    <div class="logo logo-mini">
        <a href="#" class="simple-text">
            SPAC
        </a>
    </div>
            <div class="sidebar-wrapper">
                <div class="user">
                    <div class="photo">
                        <img src="assets/img/default-avatar.png" />
                    </div>
                    <div class="info">
                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                            <?= $nama_admin_f; ?>
                            <b class="caret"></b>
                        </a>
                        <div class="collapse" id="collapseExample">
                            <ul class="nav">

                                <li>
                                    <a href="#">Edit Profile</a>
                                </li>
                                <li>
                                    <a href="#">Settings</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav">
                    <li class="active">
                        <a href="dashboard-admin.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li>
                        <a href="scanned.php">
                            <i class="material-icons">camera</i>
                            <p>Scanned</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-minimize">
                        <button id="minimizeSidebar" class="btn btn-round btn-white btn-fill btn-just-icon">
                            <i class="material-icons visible-on-sidebar-regular">more_vert</i>
                            <i class="material-icons visible-on-sidebar-mini">view_list</i>
                        </button>
                    </div>
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#"> SPAC | Web Panel </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">

                            <li>
                                <a href="#pablo" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="includes/user_destroy.php">Logout</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>

                    </div>
                </div>
            </nav>
            <!-- konten  -->
            <div class="content">
                <div class="container-fluid">

            <div class="col-md-3 col-sm-6 col-xs-12">
            <a class="btn btn-round btn-info" id="btn-kembali">
                <i class="fa fa-arrow-left"></i> Kembali
            </a>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
            </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="blue">
                        <i class="material-icons right">list</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title"> View Quality OK</h4>
                     </div>
                        <div id="colouredBarsChart" class="ct-chart"></div>
                            <div class="card-footer">
                                <table id="parts" name="parts" class="table table-hover">
                                  <thead class="text-info">
                                    <tr>
                                      <th>Scan Kanban Part No</th>
                                      <th>Scan Label Part No</th>
                                      <th>Result Label Vs Kanban</th>
                                      <th>Supplier</th>
                                      <th>Quantity</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                        // extract data parts
                                        foreach($checkdata_parts as $checkdata_parts_final => $checkdata_parts_value) {
                                    ?>
                                    <tr>
                                      <td><?php echo $checkdata_parts_value['kanban_no']; ?></td>
                                      <td><?php echo $checkdata_parts_value['part_no']; ?></td>
                                      <td>OK</td>
                                      <td><?php echo $checkdata_parts_value['supplier']; ?></td>
                                      <td><?php echo $checkdata_parts_value['qty']; ?></td>
                                    </tr>
                                    <?php } ?>
                                  </tbody>
                                </table>
                              </div>
                          </div>
                        </div>
            </div>
            <!-- batas konten -->
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">

                    </nav>
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Dedek Setiawan</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>

</body>

<!-- <script>
    var tabel = null;
    $(document).ready(function() {
        tabel = $('#parts').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax":
            {
                "url": "https://us-central1-spacq-baa58.cloudfunctions.net/apiSPACQ/parts", // URL file untuk proses select datanya
                "type": "GET"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
            "columns": [
                { "data": "kanban_no" }, // Tampilkan nis
                { "data": "part_name" },  // Tampilkan nama
                { "data": "part_no" }, // Tampilkan telepon
                { "data": "qty" }, // Tampilkan alamat
                { "data": "supplier" }, // Tampilkan alamat
                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
                        // var html  = "<a href=''>EDIT</a> | "
                        // html += "<a href=''>DELETE</a>"
                        return html
                    }
                },
            ],
        });
    });
    </script> -->
<!--   Core JS Files   -->

<script src="assets/js/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/js/material.min.js" type="text/javascript"></script>
<script src="assets/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
<!-- Forms Validations Plugin -->
<script src="assets/js/jquery.validate.min.js"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="assets/js/moment.min.js"></script>

<!--  Plugin for the Wizard -->
<script src="assets/js/jquery.bootstrap-wizard.js"></script>
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
<script src="assets/js/jquery.select-bootstrap.js"></script>
<!-- Select Plugin -->
<script src="assets/js/jquery.select-bootstrap.js"></script>
<!--  DataTables.net Plugin    -->
<script src="assets/js/jquery.datatables.js"></script>
<!-- Sweet Alert 2 plugin -->
<script src="assets/js/sweetalert2.js"></script>
<!--	Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="assets/js/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin    -->
<script src="assets/js/fullcalendar.min.js"></script>
<!-- TagsInput Plugin -->
<script src="assets/js/jquery.tagsinput.js"></script>
<!-- Material Dashboard javascript methods -->
<script src="assets/js/material-dashboard.js"></script>
<script src="assets/js/demo.js"></script>
<!-- Select2 -->
<script src="assets/components/select2/dist/js/select2.full.min.js"></script>
<!-- Pace -->
<script src="assets/components/pace2/pace.min.js"></script>

<!-- Cpanel js -->
<script src="assets/js/cpanel.js"></script>
 <script type="text/javascript" src="assets/orgchart/js/jquery.mockjax.min.js"></script>
  <script type="text/javascript" src="assets/orgchart/js/jquery.orgchart.js"></script>

  <script src="assets/js/demo.js"></script>
  <script src="assets/js/chartist.min.js"></script>
  <script src="assets/js/chartist-plugin-pointlabels.js"></script>
  <script src="assets/js/chartist-plugin-pointlabels.min.js"></script>
</html>
