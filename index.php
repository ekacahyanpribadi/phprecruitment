<?php
require_once "lib/lib.start.php";
$job_kode = isset($_GET['id']) ? $_GET['id'] : '';

$sql = "
SELECT
  *
FROM
  `recruitment`.`job`
WHERE 1=1
AND job_kode='$job_kode'
";
//echo $sql; die();

$rs = DB::queryFirstRow($sql);
if (count($rs) < 1) {
    header("Location: ?id=0");
    die();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Recruitment App</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="lib/mdb/css/bootstrap.min.css">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="lib/mdb/css/mdb.min.css">

    <!-- Your custom styles (optional) -->
    <style>

    </style>
</head>

<body class="fixed-sn white-skin">

    <!-- Main Navigation -->
    <header>

        <!-- Sidebar navigation -->
        <div id="slide-out" class="side-nav sn-bg-4">
            
        </div>
        <!-- Sidebar navigation -->

        <!-- Navbar -->
        <nav class="navbar fixed-top navbar-expand-lg scrolling-navbar double-nav">

            <!-- SideNav slide-out button -->
            <div class="float-left">
                <!--<a href="#" data-activates="slide-out" class="button-collapse"><i class="fas fa-bars"></i></a>-->
                &nbsp;
            </div>

            <!-- Breadcrumb -->
            <div class="breadcrumb-dn mr-auto">
                <p>Formulir Aplikasi Pelamar</p>

            </div>

            <!-- Navbar links -->
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <form id="formcaridata" action="#" method="post">
                        Cari data:
                        <input type="text" id="caridata" name="caridata" size="40"
                            placeholder="Masukan email yang pernah diisi sebelumnya">
                        <input type="submit" id="bt_caridata" name="bt_caridata" value="Cari">
                    </form>
                </li>
            </ul>
            <!-- Navbar links -->

        </nav>
        <!-- Navbar -->

    </header>
    <!-- Main Navigation -->

    <!-- Main layout -->
    <?php include "inc/main.php"; ?>
    <!-- Main layout -->

    <!-- Footer -->
    <footer class="page-footer pt-0 mt-5">

        <!-- Copyright -->
        <div class="footer-copyright py-3 text-center">
            <div class="container-fluid">
                © <?php echo date("Y"); ?> Copyright: <a href="https://www.instagram.com/ekkacp" target="_blank"> Ekacp
                </a>

            </div>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->



    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script src="lib/mdb/js/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="lib/mdb/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="lib/mdb/js/bootstrap.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="lib/mdb/js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <!--<script type="text/javascript" src="lib/skripjs.js"></script>-->
    <!--<script type="text/javascript" src="lib/js.js"></script>-->
    <script>
        // SideNav Initialization
       // $(".button-collapse").sideNav();
        

        // Data Picker Initialization
        //$(".datepicker").pickadate();
        $(".datepicker").pickadate({
            format: 'yyyy-mm-dd'
        })

        // Material Select Initialization
        $(document).ready(function () {
            $(".mdb-select").materialSelect();
        });

        function previewPhoto() {
            previewFilePhoto.src = URL.createObjectURL(event.target.files[0]);
            filePhotoName.value = URL.createObjectURL(event.target.files[0]);
        }

    </script>


</body>

</html>