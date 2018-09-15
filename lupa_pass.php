<div class="col-lg-8" style="margin-left:85px;">
    <div class="card">
        <div class="card-title">
            <h4>Halaman Lupa Password</h4>
        </div>
    <div class="card-body">
        <div class="basic-form">
				<form action="" method="post">
					<div class="form-group">
						<label>Masukkan email anda</label>
						<input type="email" name="email" class="form-control" placeholder="Email" required>
					</div> 
					
						<input type="submit" class="btn btn-default" name="act_reset" value="Reset">
				</form>
			</div>
		</div>
    </div>
</div>

<?php

include "koneksi.php";
if (isset($_POST['act_reset'])){
date_default_timezone_set("Asia/Jakarta");
$pass="1A2B4HTjsk5kwhadbwlff"; $panjang='8'; $len=strlen($pass); 
$start=$len-$panjang; $xx=rand('0',$start); 
$yy=str_shuffle($pass); 
$passwordbaru=substr($yy, $xx, $panjang);
 
$email = trim(strip_tags($_POST['email']));
$password = mysql_real_escape_string(htmlentities((md5($passwordbaru))));
 
// mencari alamat email si user
$query = "SELECT * FROM user WHERE email ='$email'";
$hasil = mysql_query($query);
$data = mysql_fetch_array($hasil);
$cek = mysql_num_rows($hasil);
$user_id = strip_tags($data['user_id']);
$alamatEmail = strip_tags($data['email']);
$nama = strip_tags($data['nama_lengkap']);
$username =trim(strip_tags($data['username']));
if ($cek == 1) {
 
// title atau subject email
$title = "Permintaan Password Baru";
// isi pesan email disertai password
$pesan = "Kami telah meresset Ulang Kata sandi ".$nama." Dan anda dapat login kembali ke web kami \n\n 
DETAIL AKUN ANDA :\n Username : ".$username." \n 
Kata sandi Anda yang baru adalah: ".$passwordbaru." untuk merubah sesuai dengan yang anda inginkan 
silahkan login dan update di menu profil";
// header email berisi alamat pengirim
$header = "From: nama-website<no-reply@domain.com>";
// mengirim email
$kirimEmail = mail($alamatEmail, $title, $pesan, $header);
// cek status pengiriman email
if ($kirimEmail) { 
 
// update password baru ke database (jika pengiriman email sukses)
$query = "UPDATE user SET password='$password' WHERE user_id = '$user_id'";
$hasil = mysql_query($query);
 
if ($hasil) 
echo'<div class="warning">Kata sandi baru telah direset </div><br><br>
'.$pesan.'<hr>';
}
else {
echo'<div class="warning">Pengiriman Kata sandi baru gagal</div>';
}
}
else{
 
echo'<div class="warning">Alamat Email tidak ditemukan</div>';
}}

?>