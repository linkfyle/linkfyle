<?php include 'src/header.php'; @session_start() ?>
	<?php 
		$ugursor=$db->prepare("SELECT * FROM user where user_username=:user");
        $ugursor->execute(array(
          'user' => @$_GET['user_username']
        ));
        $say=$ugursor->rowCount();
        $ugurcek=$ugursor->fetch(PDO::FETCH_ASSOC);
 	?>
 	<?php if (@$_GET['user_username'] == @$ugurcek['user_username']) {?>
		<div class="profile-photo">
						<img src="<?php 
						if(!empty($idgive['user_pp'])){
							echo "upload/".$idgive['user_pp']; 
						}else{
							echo "https://www.creativefabrica.com/wp-content/uploads/2020/10/13/Tree-Purple-Nature-Illustration-Vector-Graphics-6037776-1.jpg";
						}
						?>">
					</div>1
	 			<h1><?php echo $ugurcek['user_name'] ?> <?php echo $ugurcek['user_lastname'] ?></h1><br>
		 		<h3><?php echo $ugurcek['user_username'] ?>#<?php if (strlen($ugurcek['user_id']) == 1) {
		 			echo '000'. $ugurcek['user_id']; } else if (strlen($ugurcek['user_id']) == 2) {
		 			echo '00'. $ugurcek['user_id'];
		 		}else if (strlen($ugurcek['user_id']) == 3) {
		 			echo '0' . $ugurcek['user_id'];
		 		}else if (strlen($ugurcek['user_id']) == 4) {
		 			echo $ugurcek['user_id'];
		 		}else {
		 			echo $ugurcek['user_id'];
		 		} ?></h3>
	 		</div>		
 		</div>

 		<?php if (!empty($ugurcek['user_facebook'])) { ?>
			<a href="<?php echo $ugurcek['user_facebook']; ?>" target="_blank"><i class="fab fa-facebook"></i></a>
		<?php } ?>
		<?php if (!empty($ugurcek['user_youtube'])) { ?>
			<a href="<?php echo $ugurcek['user_youtube']; ?>" target="_blank"><i class="fab fa-youtube"></i></a>
		<?php } ?>
		<?php if (!empty($ugurcek['user_instagram'])) { ?>
			<a href="<?php echo $ugurcek['user_instagram']; ?>" target="_blank"><i class="fab fa-instagram"></i></a>			
		<?php } ?>
		<?php if (!empty($ugurcek['user_twitter'])) { ?>
			<a href="<?php echo $ugurcek['user_twitter']; ?>" target="_blank"><i class="fab fa-twitter"></i></a>
		<?php } ?>
		<?php if (!empty($ugurcek['user_telagram'])) { ?>
			<a href="<?php echo $ugurcek['user_telegram']; ?>" target="_blank"><i class="fab fa-telegram"></i></a>
		<?php } ?>
		<?php if (!empty($ugurcek['user_spotify'])) { ?>
			<a href="<?php echo $ugurcek['user_spotify']; ?>" target="_blank"><i class="fab fa-spotify"></i></a>
		<?php } ?>
		<?php if (!empty($ugurcek['user_tiktok'])) { ?>
			<a href="<?php echo $ugurcek['user_tiktok']; ?>" target="_blank"><i class="fab fa-tiktok"></i></a>
		<?php } ?>
		<?php if (!empty($ugurcek['user_linkedin'])) { ?>
			<a href="<?php echo $ugurcek['user_linkedin']; ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
		<?php } ?>
		<?php if (!empty($ugurcek['user_reddit'])) { ?>
			<a href="<?php echo $ugurcek['user_reddit']; ?>" target="_blank"><i class="fab fa-reddit"></i></a>
		<?php } ?>
 	<?php }else{?>
 		<h1>Aradığın Sayfayı Veya Kullanıcıyı Bulamadım.</h1>
 	<?php } ?>

<?php include 'src/footer.php'; ?>