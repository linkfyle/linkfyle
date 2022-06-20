<nav class="nav">
		<div class="container">
			<div class="logo">
				<a href="/"><img src="image/linkfyle-logo-white.png" class="logoimg" alt="Linkfyle_Logo"></a>
			</div>
			<div class="mobiles">
				<span></span>
				<span></span>
				<span class="mobile-right"></span>
			</div>
			<div class="menu">
				<ul>
					<li>
						<a href="/"><i class="fal fa-home"></i> Anasayfa</a>
					</li>
					<li>
						<a href="profiles.php"><i class="fal fa-address-card"></i> Profiller</a>
					</li>
					<li>
						<a href="directory.php"><i class="fal fa-sitemap"></i> Rehber</a>
					</li>
					<?php if (isset($_SESSION['user_username'])) {?>
						<li>
							<button class="profilename"><i class="fas fa-user-circle"></i> <?php echo $giveques['user_name'] ?> <?php echo $giveques['user_lastname'] ?></button>
							<span class="dropdown">
								<a href="<?php echo $giveques['user_username'] ?>"><i class="fas fa-user"></i> Profilim</a>
								<a href="profile-setting.php"><i class="fas fa-cogs"></i> Profil Ayarları</a>
								<a href="logout.php"><i class="fas fa-sign-out-alt"></i> Güvenli Çıkış</a>
							</span>
						</li>
					<?php }else{?>
					<li>
						<a href="login.php" class="login"><i class="fas fa-sign-in-alt"></i> Giriş Yap</a>
					</li>
					<li>
						<a href="register.php" class="register"><i class="fas fa-user-plus"></i> Kayıt Ol</a>
					</li>
					<?php } ?>
				</ul>
			</div>
	</div>
	</nav>