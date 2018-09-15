<?php
include "koneksi.php";

$masuk=mysql_query("select * from pesanan where status=1");
$hitung=mysql_num_rows($masuk);

?> 
<div class="main">
    <div class="container">
        <div class="row margin-bottom-35 ">
            <!-- BEGIN TWO PRODUCTS -->
            <div class="col-md-6 two-items-bottom-items">
                <h1>Halaman Utama Admin</h1>
                <br><br><br><br>
                <h1>
                    <strong>
                        <center>
                            <p>Selamat Datang</p>
                        </center>
                    </strong>
                </h1>
            </div>
            <!-- END TWO PRODUCTS -->
            <!-- BEGIN PROMO -->
            <div class="col-md-6 shop-index-carousel">
				<?php 
							
					echo "<h1 style='color:red; position:absolute; margin-left:30px;'>$hitung pesanan Menunggu</h1>"
							
				?>
                <a href="?page=pesanan_masuk"><img src="images/pesanan.jpg" class="img-responsive" width="500px"></a>
            </div>
            <!-- END PROMO -->
        </div>        

    </div>
</div>