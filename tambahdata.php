<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Simple Sidebar - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
        <style>
            #map{
                height: 80vh;

            }
            </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">Pelalawan Sehat</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="tambahdata.php">Data</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">User</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="https://wa.me/+6282284041347">HelpDesk</a>
                    
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                <li class="nav-item active"><a class="nav-link" href="#!">Home</a></li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sosmed</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="https://www.facebook.com/">Facebook</a>
                                        <a class="dropdown-item" href="https://wa.me/+6282284041347">WhatsApp</a>
                                        <a class="dropdown-item" href="https://www.instagram.com/">Instagram</a>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#!">Login</a>
                                        <a class="dropdown-item" href="#!">Registrasi</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#!">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                    <h1 class="mt-4">Input Data</h1>
                    <div id="map">
                    <h3 style ="color : red"> Form User</h3>
<form action="" method="post">
    <table>
        <tr>
            <td style ="color : blue" width="130"> ID_User </td>
            <td> <Input Type = "text" name="id_user"></td>
        </tr>
        <tr>
            <td style ="color : blue" width="130"> Nama</td>
            <td> <Input Type = "text" name="nama"></td>
        </tr>
            <td style ="color : blue" width="130"> Email</td>
            <td> <Input Type = "text" name="email"></td>
        </tr>
        </tr>
            <td style ="color : blue" width="130"> No_Telp</td>
            <td> <Input Type = "text" name="no_telp"></td>
        </tr>
        </tr>
            <td style ="color : blue" width="130"> Password</td>
            <td> <Input Type = "password" name="password"></td>
        </tr>
        <tr><td></td></tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" value="simpan" name="proses">
            <a href="index.php"><button>Home</a></button>
            <a href="tampiluser.php"><button>Tampilan Data</a></button>
        </td>
    </tr>

    </table>
</form>

<?php
include "koneksi1.php";

if(isset($_POST['proses'])){
    mysqli_query($koneksi, "insert into user set
    ID = '$_POST[ID]',
    nama = '$_POST[nama]',
    alamat = '$_POST[alamat]',
    website = '$_POST[website]',
    latitude = '$_POST[latitude]',
    longitude = $_POST[password]");

    echo "Data user baru telah tersimpan";
}
?>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
                    
    </body>
</html>
