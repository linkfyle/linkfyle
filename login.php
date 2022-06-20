<?php include 'src/header.php';

	if (@$_SESSION['oturum']) {
		header("Location:");
	}
/*<?php if (@$_GET['stat'] == 'no' ) {?>
								<div style="height: 25px; width: 250px; background-color: darkred;">
									selamın aleykümma
								</div>	
				<?php } ?>*/
?>

	<section id="giris">
		<div class="container">
			<div class="row">
				<?php if (@$_GET['stat'] == 'no') { ?>
					<div class="col-4 giris-sol redan" style="background-color: darkred;">
						<div class="giris-sol-icon">
							<i class="fas fa-times-circle"></i>
						</div>
						<div class="giris-sol-title">
							<h3>Girdiğiniz Hesap Bilgileri Yanlış</h3>
						</div>
						<div class="giris-sol-desc">
							<p>
								Böyle bir hesap bulunamadı veya şifre ve kullanıcı adı yanlış.
							</p>
							<p>
								Hesabın yok mu?
							</p>
						</div>
						<div class="giris-sol-btn">
							<a href="register.php">Kayıt Ol</a>
						</div>
					</div>
					<?php }else if(@$_GET['stat'] == 'yes') {?> 
						<div class="col-4 giris-sol redan" style="background-color: darkgreen;">
						<div class="giris-sol-icon">
							<i class="fas fa-check-circle"></i>
						</div>
						<div class="giris-sol-title">
							<h3>Hesabınıza Yönlendiriliyorsunuz</h3>
						</div>
						<div class="giris-sol-desc">
							<p>
								Sizin için ayarları hazırlıyoruz...
							</p>
							<p>
								Yönlendirilmediyseniz
							</p>
							<?php header("Refresh: 3; url=/") ?>
						</div>
						<div class="giris-sol-btn">
							<a href="/">Tıklayın</a>
						</div>
					</div>
					<?php }else{ ?> 
					<div class="col-4 giris-sol">
						<div class="giris-sol-icon">
							<i class="fas fa-sign-in-alt"></i>
						</div>
						<div class="giris-sol-title">
							<h3>Giriş Yap</h3>
						</div>
						<div class="giris-sol-desc">
							<p>
								Giriş yapmak için lütfen hesap bilgilerinizi giriniz.
							</p>
							<p>
								Hesabın yok mu?
							</p>
						</div>
						<div class="giris-sol-btn">
							<a href="register.php">Kayıt Ol</a>
						</div>
					</div>
				<?php } ?>
				<div class="col-8 giris-sag">
						<div class="giris-sag-title">
							<a href="">Giriş Yap</a>
							<span class="text-white">|</span>
							<a href="">Kayıt Ol</a>
							<span class="text-white">|</span>
							<a href="index.html">Anasayfa</a>
						</div>
						<div class="giris-sag-input">
							<form action="src/logreg.php" method="POST">
								<input type="username" id="username" name="user_username" placeholder="Kullanıcı Adı" required>
								<input type="password" id="pw" name="user_password" placeholder="Şifre" required >
							</div>
							<div class="giris-sag-btn">
								<button type="reset">Temizle</button>
								<input type="submit" name="giriskaydet" value="Giriş Yap">
							</div>
						</form>
						<div class="giris-sag-container">
					</div>
				</div>
			</div>
		</div>
	</section>


	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	
	<script type="text/javascript">
		function kontrol(e){
			var patt   = /[^0-9a-z]/i;
			e.value=e.value.toLowerCase();
			if(patt.test(e.value)){
				e.value=e.value.substring(0,e.value.length-1);}
				var patt1=new RegExp("/^[a-zA-Z]+$/");
				if(patt1.match(e.value)){alert('das');}
			}

		</script>

<!--
	<form action="src/logreg.php" align="center" method="POST">
		<label>Kullanıcı Adı</label>
		<input type="username" name="user_username" required>
		<br>
		<label>Şifre</label>
		<input type="password" name="user_password" required>
		<br>
		<input type="submit" align="right" name="giriskaydet" value="Gönder">
	</form>-->

<?php include 'src/footer.php'; ?>