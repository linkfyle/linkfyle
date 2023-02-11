<?php include 'src/header.php';

		$ques=$db->prepare("SELECT * FROM user where user_username=:user");
        $ques->execute(array(
        	'user' => @$_SESSION['user_username']
        ));
        $say=$ques->rowCount();
        $giveques=$ques->fetch(PDO::FETCH_ASSOC);

        $idques = $db->query("SELECT * FROM user ORDER BY rand()");
        $idgive = $idques->fetch(PDO::FETCH_ASSOC);
?>

	<?php include 'items/nav.php'; ?>

	<section class="home">
		<div class="container">
			<div class="picture">
				<img src="image/hashtag.png">
			</div>
			<div class="text">
				<h1>Tek Yer, Çok İşlev</h1>
				<h3>Sosyal medya hesaplarınızı tek bir yerde toplayın, biyografinize koyun ve herkes hesaplarınızı tek bir yerde bulsun. Rehber videomuza göz atın ve hemen başlayın. Her şeyi sizin için kolaylaştırdık. Aşağıdaki düğmeyi tıklayın ve şimdi başlayın!</h3>
				<a href="register.php"><i class="fal fa-hourglass-start"></i> Hemen başla</a>
			</div>
		</div>
	</section>

	<section class="stebs">
		<div class="container">
			<div class="st-one">
				<div class="st-img">
					<img src="image/support.svg">
				</div>
				<div class="st-text">
					<h1>Hesabını oluştur!</h1>
					<p>Şimdi hesabınızı oluşturmak için kayıt düğmesine tıklayın. Onay için 2 saat beklemeye gerek yok, yuppi!</p>
				</div>
			</div>
			<div class="st-one twost">
				<div class="st-img">
					<img src="image/info.svg">
				</div>
				<div class="st-text">
					<h1>Profil Ayarlarına Git!</h1>
					<p>Profil ayarlarından sosyal medya hesapları ekleyin. Bu süreci sizin için kolaylaştırdık, hey!(Daha fazla içerik çok yakında!)</p>
				</div>
			</div>
			<div class="st-one">
				<div class="st-img">
					<img src="image/share.svg">
				</div>
				<div class="st-text">
					<h1>Profil Bağlantısını Kopyala!</h1>
					<p>Profilime git ve linki kopyala, artık dünyanın tüm sosyal medya hesaplarına tek bir yerden ulaşılacak, vay canına!</p>
				</div>
			</div>
		</div>
	</section>

	<section class="users">
		<div class="container">
			<div class="write">
				<h1>Şanslı kişinin hesabı!</h1>
				<p>Siteye her girdiğinizde, şanslı kişi burada görünecek!</p>
				<a href="<?php echo $idgive['user_username'] ?>"><i class="fas fa-gift"></i> Şanslı kişinin profili</a>
			</div>
			<div class="user">
				<div class="profile">
					<div class="profile-photo">
						<img src="<?php 
						if(!empty($idgive['user_pp'])){
							echo "upload/".$idgive['user_pp']; 
						}else{
							echo "https://www.creativefabrica.com/wp-content/uploads/2020/10/13/Tree-Purple-Nature-Illustration-Vector-Graphics-6037776-1.jpg";
						}
						?>">
					</div>
					<div class="profile-text">
						<h1><?php echo $idgive['user_name']; ?> <?php echo $idgive['user_lastname']; ?></h1>
						<h3><?php echo $idgive['user_username'] ?>#<?php if (strlen($idgive['user_id']) == 1) {
				 			echo '000'. $idgive['user_id']; } else if (strlen($idgive['user_id']) == 2) {
				 			echo '00'. $idgive['user_id'];
				 		}else if (strlen($idgive['user_id']) == 3) {
				 			echo '0' . $idgive['user_id'];
				 		}else if (strlen($idgive['user_id']) == 4) {
				 			echo $idgive['user_id'];
				 		}else {
				 			echo $idgive['user_id'];
				 		} ?></h3>
				 		<div class="social-media">
							<?php if (!empty($idgive['user_facebook'])) { ?>
						<a href="<?php echo $idgive['user_facebook']; ?>" target="_blank" class="facebook"><i class="fab fa-facebook"></i></a>
						<?php } ?>
						<?php if (!empty($idgive['user_youtube'])) { ?>
							<a href="<?php echo $idgive['user_youtube']; ?>" target="_blank" class="youtube"><i class="fab fa-youtube"></i></a>
						<?php } ?>
						<?php if (!empty($idgive['user_instagram'])) { ?>
							<a href="<?php echo $idgive['user_instagram']; ?>" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>			
						<?php } ?>
						<?php if (!empty($idgive['user_twitter'])) { ?>
							<a href="<?php echo $idgive['user_twitter']; ?>" target="_blank" class="twitter"><i class="fab fa-twitter"></i></a>
						<?php } ?>
						<?php if (!empty($idgive['user_telegram'])) { ?>
							<a href="<?php echo $idgive['user_telegram']; ?>" target="_blank" class="telegram"><i class="fab fa-telegram"></i></a>
						<?php } ?>
						<?php if (!empty($idgive['user_spotify'])) { ?>
							<a href="<?php echo $idgive['user_spotify']; ?>" target="_blank" class="spotify"><i class="fab fa-spotify"></i></a>
						<?php } ?>
						<?php if (!empty($idgive['user_tiktok'])) { ?>
							<a href="<?php echo $idgive['user_tiktok']; ?>" target="_blank" class="tiktok"><i class="fab fa-tiktok"></i></a>
						<?php } ?>
						<?php if (!empty($idgive['user_linkedin'])) { ?>
							<a href="<?php echo $idgive['user_linkedin']; ?>" target="_blank" class="linkedin"><i class="fab fa-linkedin"></i></a>
						<?php } ?>
						<?php if (!empty($idgive['user_reddit'])) { ?>
							<a href="<?php echo $idgive['user_reddit']; ?>" target="_blank" class="reddit"><i class="fab fa-reddit"></i></a>
						<?php } ?>
						</div>
					</div>
				</div>
		</div>
	</section>

<?php include 'src/footer.php'; ?>