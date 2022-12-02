<?php include 'src/header.php'; 

        $ugursor=$db->prepare("SELECT * FROM user where user_username=:user");
        $ugursor->execute(array(
            'user' => @$_SESSION['user_username']
        ));
        $say=$ugursor->rowCount();
        $ugurcek=$ugursor->fetch(PDO::FETCH_ASSOC);

        if (!isset($_SESSION['user_username'])) {
            header("Location:login.php");
        }
?>
     
    <form action="src/logreg.php" method="POST" enctype="multipart/form-data">
        <label>Profil Resim</label> 
        <?php if (empty($ugurcek['user_pp'])) { ?>
            <input type="file" name="user_pp" accept="image/jpeg,image/jpg" required="">
        <?php }else{ ?>
            <img style="max-width: 150px; min-width: 150px;" src="upload/<?php echo $ugurcek['user_pp']; ?>">
            <input type="submit" name="pp_delete" value="Profil Fotoğrafını Sil">
            <p>Ek Bilgi*: Profil Fotoğrafınızı Değiştirmek İstiyorsanız önce silmelisiniz.</p>
        <?php } ?>
        <br>
        <label>Username</label> <input type="text" name="user_username" maxlength="15" value="<?php echo $ugurcek['user_username']; ?>" required><br>
        <label>İsmi</label> <input type="text" name="user_name" maxlength="15" value="<?php echo $ugurcek['user_name']; ?>" required><br>
        <label>Soyadı</label> <input type="text" name="user_lastname" maxlength="10" value="<?php echo $ugurcek['user_lastname']; ?>" required><br>
        <h1>Sosyal Medya Hesapları</h1>
        <label>Facebook</label> <input type="text" name="user_facebook" value="<?php echo $ugurcek['user_facebook']; ?>"><br>
        <label>Youtube</label> <input type="text" name="user_youtube" value="<?php echo $ugurcek['user_youtube']; ?>"><br>
        <label>İnstagram</label> <input type="text" name="user_instagram" value="<?php echo $ugurcek['user_instagram']; ?>"><br>
        <label>Twitter</label> <input type="text" name="user_twitter" value="<?php echo $ugurcek['user_twitter']; ?>"><br>
        <label>Telegram</label> <input type="text" name="user_telegram" value="<?php echo $ugurcek['user_telegram']; ?>"><br>
        <label>Spotify</label> <input type="text" name="user_spotify" value="<?php echo $ugurcek['user_spotify']; ?>"><br>
        <label>TikTok</label> <input type="text" name="user_tiktok" value="<?php echo $ugurcek['user_tiktok']; ?>"><br>
        <label>LinkedIN</label> <input type="text" name="user_linkedin" value="<?php echo $ugurcek['user_linkedin']; ?>"><br>
        <label>Reddit</label> <input type="text" name="user_reddit" value="<?php echo $ugurcek['user_reddit']; ?>"><br>
        <input type="submit" name="profilayarkaydet">
        <?php if (@$_GET['user']=='username') { ?>
            <div class="error">
                USERNAME VAR
            </div>
        <?php } ?>
        <?php if (@$_GET['username']=='koyulmaz') { ?>
            <div class="error">
                Bu username ne bro?
            </div>
        <?php } ?>
        <?php if (@$_GET['name']=='koyulmaz') { ?>
            <div class="error">
                Her şeyi anlarımda bu isim ne?
            </div>
        <?php } ?>
        <?php if (@$_GET['lastname']=='koyulmaz') { ?>
            <div class="error">
                Lütfen uyuyun ve sabah kalkıp soy isminizi değiştirmeye çalışın.
            </div>
        <?php } ?>
        <?php if (@$_GET['user']=='ok') { ?>
            <div class="error">
                Tamamdır Ayarladım...
            </div>
        <?php } ?>
    </form>

<?php include 'src/footer.php'; ?>