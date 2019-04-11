<header class="business-header">
	<div class="container">
    	<div class="row">
    		<div class="col-lg-12" style="margin-top: 70px;">
    			<?php
                if (isset($_SESSION['level'])) {
                    if($_SESSION['level']=='user'){
                        ?>
                        <h1 class="display-4 text-center mt-4">Selamat Datang di Maulina's Store Book</h1>
                        <p class="lead text-center">Cuma di sini yang menyediakan buku berkualitas bos harga anak kos</p>
                        <?php
                    }
                    else{
                        ?>
                        <h1 class="display-4 text-center mt-4">Selamat Datang di Management Maulina's Store Book</h1>
                        <p class="lead text-center">Silahkan akses menu yang berada di bagian atas</p>
                        <?php
                    }
                }
                else{
                    ?>
                    <h1 class="display-4 text-center mt-4">Selamat Datang di Maulina's Store Book</h1>
                    <p class="lead text-center">Cuma di sini yang menyediakan buku berkualitas bos harga anak kos</p>
                    <?php
                }

    			?>
        	</div>
        </div>
    </div>
</header>