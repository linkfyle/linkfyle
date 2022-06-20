<?php include 'src/header.php'; 

	if (@$_SESSION['oturum']) {
		header("Location:/");
	}

?>
	<form action="src/logreg.php" align="center" method="POST">
		<label>Kullanıcı Adı</label>
		<input type="username" name="user_username" maxlength="15" required>
		<br>
		<label>Ad</label>
		<input type="text" name="user_name" maxlength="15" required>
		<br>
		<label>Soyad</label>
		<input type="text" name="user_lastname" maxlength="10" required>
		<br>
		<label>Şifre</label>
		<input type="password" name="user_password" required>
		<br>
		<input type="submit" name="suble">
		<?php if (@$_GET['stat']=='username') { ?>
			<div class="error">
				Bu username'den var zaten
			</div>
		<?php } ?>
		<?php if (@$_GET['username']=='koyulmaz') { ?>
			<div class="error">
				Bu nasıl username
			</div>
		<?php } ?>
		<?php if (@$_GET['password']=='koyulmaz') { ?>
			<div class="error">
				Şifre en az 8 karakter uzunluğunda olmalı ve en az bir büyük harf ve bir rakam içermelidir.
			</div>
		<?php } ?>
		<?php if (@$_GET['name']=='koyulmaz') { ?>
			<div class="error">
				İsmin bu mu cidden?
			</div>
		<?php } ?>
		<?php if (@$_GET['lastname']=='koyulmaz') { ?>
			<div class="error">
				Lütfen sisteme kafanız güzel değilken kaydolun.
			</div>
		<?php } ?>
	</form>
<?php include 'src/footer.php'; ?>