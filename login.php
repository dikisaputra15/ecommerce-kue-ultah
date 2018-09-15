<?php

	session_start();
	include "koneksi.php";
	
	if(@$_SESSION['level'] == "admin"){
	header("location: halaman_admin.php");
	}else if(@$_SESSION['level'] == "pembeli"){
		header("location: index.php");
	}else{

?>

<div class="col-lg-6" style="margin-left:150px;">
    <div class="card">
        <div class="card-title">
            <h4>Halaman Login</h4>
        </div>
    
    <div class="card-body">
        <div class="basic-form">
            <form action="" method="POST">
                 <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                 </div>
                 <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                 </div>
                 <div>
                    <a href="?page=lupa_pass" style="float:right;">Lupa Password?</a>
                 </div>
                 <input type="submit" class="btn btn-success" name="login" value="Login">
            </form>
			<?php
			
				include_once("koneksi.php");
				
				$user		= $_POST['username'];
				$password	= md5($_POST['password']);
				$login 		= $_POST['login'];
				
				if($login){
					$query=mysql_query("SELECT * FROM user WHERE username='$user' and password='$password' and status='on'");
					$jml = mysql_num_rows($query);

					if($jml == 0){
						echo '<script language="javascript">alert("User tidak ada!"); document.location="index.php";</script>';
					}else{
						$row = mysql_fetch_assoc($query);
						
		
						$_SESSION['user_id'] = $row['user_id'];
						$_SESSION['nama_lengkap'] = $row['nama_lengkap'];
						$_SESSION['level'] = $row['level'];
						$_SESSION['username'] = $row['username'];
						
					if(isset($_SESSION["proses_pesanan"])){
						unset($_SESSION["proses_pesanan"]);
						echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="index.php?page=data_pemesan";</script>';
					}else{
						if($_SESSION['level'] == "admin"){ 
						echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="halaman_admin.php";</script>';
						}else{
							if($_SESSION['level']== "pembeli"){
							echo '<script language="javascript">alert("Anda berhasil Login!"); document.location="index.php";</script>';
							}
						}
					}
				}
			}
			
			?>
        </div>
    </div>
</div>
</div>

<?php
	}
?>