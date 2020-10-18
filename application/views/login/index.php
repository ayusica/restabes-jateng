<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card px-1 py-1 m-0">
			<div class="card-header">
				<div class="card-title text-center">
					<img src="<?= filter_var(base_url('assets/img/polda.png'), FILTER_DEFAULT); ?>" alt="Polrestabes" style="width: 75px;">
					<h3>POLRESTABES SEMARANG</h3>
				</div>
			</div>
			<div class="card-body">
				<marquee onmouseover="this.stop();" onmouseout="this.start();" behavior="scroll" direction="left" style="color: white;">Selamat Datang di Sistem Informasi Data Personel Polrestabes Semarang! Ganti Password Anda Setelah Login Untuk Pertama Kali!</marquee>
				<form class="form-signin mt-3" action="<?= filter_var(base_url(), FILTER_DEFAULT); ?>login/index" method="post">
					<?= filter_var($this->session->flashdata('msg'), FILTER_DEFAULT); ?>
					<?= filter_var(form_error('nrp', '<small class="text text-warning pl-10">', '</small>'), FILTER_DEFAULT); ?>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-user"></i></span>
						</div>
						<input type="" class="form-control" id="nrp" placeholder="nrp" name="nrp" minlength="8" maxlength="18" onkeypress="return wajibAngka(event)">
					</div>
					<?= filter_var(form_error('password', '<small class="text text-warning" pl-10>', '</small>'), FILTER_DEFAULT); ?>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" placeholder="password" name="password" id="password">
						<button type="button" onclick="lihat()"><i class="fas fa-eye"></i></button>
					</div>
					<!-- <div class="row align-items-center remember">
							<input type="checkbox">Ingat saya
						</div> -->
					<div class="form-group mt-2">
						<input type="submit" value="masuk" class="btn float-right login_btn">
					</div>
				</form>
			</div>
			<!-- <div class="card-footer">
					<div class="d-flex justify-content-center">
						<a href="#">Lupa Password?</a>
					</div>
				</div> -->
		</div>
	</div>
</div>

<!-- akhir container -->
<!-- jQuery-->
<script src="<?= filter_var(base_url(), FILTER_DEFAULT); ?>assets/js/jquery.js'?>"></script>
<!-- Bootsrap -->
<!-- <script src="<?= filter_var(base_url(), FILTER_DEFAULT) . 'assets/js/bootstrap.min.js' ?>"></script> -->
<script type="text/javascript">
	function wajibAngka(evt) {
		var charCode = (evt.which) ? evt.which : event.keyCode
		if (charCode > 31 && (charCode < 48 || charCode > 57))
			return false;
	}
</script>