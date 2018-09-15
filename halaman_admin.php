<?php
	
	session_start();
	include "koneksi.php";
	include "function.php";
	$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : false;
	$level = isset($_SESSION['level']) ? $_SESSION['level'] : false;
	
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <title>halaman admin</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="datatables/datatables.min.css" rel="stylesheet">
	<script src="vendor/jquery/jquery-3.1.1.min.js" rel="stylesheet"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
			<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <!-- Logo -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="halaman_admin.php">
                        <!-- Logo icon -->
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
                    </a>
                </div>
                <!-- End Logo -->
                <div class="navbar-collapse">
                    <!-- toggle and nav items -->
                    <ul class="navbar-nav mr-auto mt-md-0">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
                        <li class="nav-item m-l-10"> <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                     
                    </ul>
                    <!-- User profile and search -->
                    <ul class="navbar-nav my-lg-0">
                        
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fa fa-envelope"></i>
								<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
							</a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                                <div class="message-center">
								
									<?php
										include "chat_admin.php";
									?>
									
                                </div>    
                            </div>
                        </li>
                        <!-- End Messages -->
                        <!-- Profile -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/users/5.jpg" alt="user" class="profile-pic" /></a>
                            <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                                <ul class="dropdown-user">
                                    <li><a href="logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- End header header -->
        <!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        
                        <li class="nav-label">Data</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Master<span class="label label-rouded label-warning pull-right">6</span></span></a>
                            <ul aria-expanded="false" class="collapse">
								<li><a href="?page=karyawan">Karyawan</a></li>
								<li><a href="?page=user">user</a></li>
                                <li><a href="?page=banner">Banner</a></li>
								<li><a href="?page=kota">Kota</a></li>
                                <li><a href="?page=kategori">Kategori</a></li>	
                                <li><a href="?page=kue">Kue</a></li>	
                            </ul>
                        </li>
						<li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-suitcase"></i><span class="hide-menu">Transaksi<span class="label label-rouded label-danger pull-right">1</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?page=pesanan">Pesanan</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-table"></i><span class="hide-menu">Laporan</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="?page=laporan_bayar">Laporan Pembayaran</a></li>
                                <li><a href="?page=laporan_pesan">Laporan Pemesanan</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->
        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Dashboard</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->
            <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body"> 
								
								<?php
				
									$page=@$_GET['page'];
									$action=@$_GET['action'];
									if($_SESSION['level'] == "admin"){
										if($page == "banner"){
											if ($action==""){
												include "module/banner/list_banner.php";
											}
											else if($action == "tambah_banner"){
												include "module/banner/tambah_banner.php";
											}
											else if($action == "edit"){
												include "module/banner/edit_banner.php";
											}
											else if($action=="hapus"){
												$banner_id = @$_GET[banner_id];
												mysql_query("delete from banner where banner_id = '$banner_id'") or die(mysql_error());
												echo '<script type="text/javascript">window.location.href="../gawekue/halaman_admin.php?page=banner";</script>';
											}
										}
										else if($page == "user"){
											if ($action==""){
												include "module/user/list_user.php";
											}
											else if($action == "tambah_user"){
												include "module/user/tambah_user.php";
											}
											else if($action == "edit"){
												include "module/user/edit_user.php";
											}
											else if($action=="hapus"){
												$user_id = @$_GET[user_id];
												mysql_query("delete from user where user_id = '$user_id'") or die(mysql_error());
												echo '<script type="text/javascript">window.location.href="../gawekue/halaman_admin.php?page=user";</script>';
											}
										}
										else if($page == "kota"){
											if ($action==""){
												include "module/kota/list_kota.php";
											}
											else if($action == "tambah_kota"){
												include "module/kota/tambah_kota.php";
											}
											else if($action == "edit"){
												include "module/kota/edit_kota.php";
											}
											else if($action=="hapus"){
												$id_kota = @$_GET[id_kota];
												mysql_query("delete from kota where id_kota = '$id_kota'") or die(mysql_error());
												echo '<script type="text/javascript">window.location.href="../gawekue/halaman_admin.php?page=kota";</script>';
											}
										}
										else if($page == "kategori"){
											if ($action==""){
												include "module/kategori/list_kategori.php";
											}
											else if($action == "tambah_kategori"){
												include "module/kategori/tambah_kategori.php";
											}
											else if($action == "edit"){
												include "module/kategori/edit_kategori.php";
											}
											else if($action=="hapus"){
												$id_kategori = @$_GET[id_kategori];
												mysql_query("delete from kategori where id_kategori = '$id_kategori'") or die(mysql_error());
												echo '<script type="text/javascript">window.location.href="../gawekue/halaman_admin.php?page=kategori";</script>';
											}
										}
										else if($page == "karyawan"){
											if ($action==""){
												include "module/karyawan/list_karyawan.php";
											}
											else if($action == "tambah_karyawan"){
												include "module/karyawan/tambah_karyawan.php";
											}
											else if($action == "edit"){
												include "module/karyawan/edit_karyawan.php";
											}
											else if($action=="hapus"){
												$id_karyawan = @$_GET[id_karyawan];
												mysql_query("delete from karyawan where id_karyawan = '$id_karyawan'") or die(mysql_error());
												echo '<script type="text/javascript">window.location.href="../gawekue/halaman_admin.php?page=karyawan";</script>';
											}
										}
										else if($page == "kue"){
											if ($action==""){
												include "module/kue/list_kue.php";
											}
											else if($action == "tambah_kue"){
												include "module/kue/tambah_kue.php";
											}
											else if($action == "edit"){
												include "module/kue/edit_kue.php";
											}
											else if($action=="hapus"){
												$id_kue = @$_GET[id_kue];
												mysql_query("delete from kue where id_kue = '$id_kue'") or die(mysql_error());
												echo '<script type="text/javascript">window.location.href="../gawekue/halaman_admin.php?page=kue";</script>';
											}
										}
										else if($page == "pesanan"){
											if ($action==""){
												include "module/pesanan/list_pesanan.php";
										}
											else if ($action=="status"){
												include "module/pesanan/status.php";
										}
										else if ($action=="konfirmasi"){
												include "module/pesanan/konfirmasi.php";
										}
										else if ($action=="kirim"){
												include "module/pesanan/kirim.php";
										}
									}
									else if($page == "laporan_pesan"){
										include "module/pesanan/laporan_pesan.php";
									}
									else if($page == "laporan_bayar"){
										include "module/pesanan/laporan_bayar.php";
									}
									else if($page == "pesanan_masuk"){
										include "pesanan_masuk.php";
									}
										else{
											include "home_admin.php";
										}
									}else{
										 echo '<script language="javascript">alert("maaf anda tidak punya akses!"); document.location="error-404.html";</script>';
									}
						
								?>
						
							</div>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 copyright. Template designed by <a href="https://colorlib.com">Colorlib</a> modified by dikdik</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="js/lib/bootstrap/js/popper.min.js"></script>
    <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->
    <script src="js/custom.min.js"></script>
	<script src="datatables/datatables.min.js"></script>
	
	<script type="text/javascript">
		$(document).ready( function () {
		$('#datatables').DataTable();
		} );
	</script>

</body>

</html>
