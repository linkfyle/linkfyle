	<?php 
	@ob_start();
	@session_start();
	include 'connect.php';

	$tableques=$db->prepare("SELECT * FROM user where user_username=:tableques");
	$tableques->execute(array(
		'tableques' => @$_POST['user_username']
	));
	$dbc=$tableques->rowCount();

	$sessionques=$db->prepare("SELECT * FROM user where user_username=:user");
   	$sessionques->execute(array(
        'user' => @$_SESSION['user_username']
    ));
    $sessiongive=$sessionques->fetch(PDO::FETCH_ASSOC);

	if (isset($_POST['suble'])) {
		$username = htmlspecialchars(trim(strtolower($_POST['user_username'])));
		$name = htmlspecialchars(trim($_POST['user_name']));
		$lastname = htmlspecialchars(trim($_POST['user_lastname']));
		$password = htmlspecialchars(md5(trim($_POST['user_password'])));

		if (!$username || !$name || !$lastname || !$password) {
			header("Location:../register.php?stat=null");
		} else {

			$caps = preg_match('@[A-Z]@', $_POST['user_password']);
		$small = preg_match('@[a-z]@', $_POST['user_password']);
		$number = preg_match('@[0-9]@', $_POST['user_password']);
			$pattern ='/^[-a-zA-Z_\x{ÖÇŞİĞÜöçşğüı}\s]*$/u';
		$usernamechars = preg_match('@[^\w]@', $_POST['user_username']);

		$namenumber = preg_match('@[0-9]@', $_POST['user_name']);
		$namechars = preg_match($pattern, $_POST['user_name']);

		$lastnamenumber = preg_match('@[0-9]@', $_POST['user_lastname']);
		$lastnamechars = preg_match($pattern, $_POST['user_lastname']);

		if ($dbc == 1) {
				header("Location:../register.php?stat=username");
			}else if($dbc ==0){
			if ($usernamechars) {
			header("Location:../register.php?username=no");
		}else if (!$caps || !$small || !$number || strlen($_POST['user_password']) < 8) {
			header("Location:../register.php?password=no");
		}else if ($namenumber) {
			header("Location:../register.php?name=no");
		}else if ($lastnamenumber) {
			header("Location:../register.php?lastname=no");
		}else if ($namechars || $lastnamechars) {
		$saves = $db->prepare("INSERT into user set
			user_username = :user_username,
			user_name = :user_name,
			user_lastname = :user_lastname,
			user_password = :user_password
		");

		$insert = $saves->execute(array(
			'user_username' => $username,
			'user_name' => $name,
			'user_lastname' => $lastname,
			'user_password' => $password
		));

		if ($insert)
		{
			header("Location:../login.php");
		} else {
			header("Location:../register.php?stat=no");
		}
	}
	}
	}
	}

		if (isset($_POST['giriskaydet'])) {

		$userques=$db->prepare("SELECT * FROM user where user_username=:username and user_password=:password");
			$userques->execute(array(
			'username' => strtolower(strtolower($_POST['user_username'])),
			'password' => md5($_POST['user_password'])
			));
			$say=$userques->rowCount();
				if ($say == 1) {
					$_SESSION['oturum']= true;
					$_SESSION['user_username']=$_POST['user_username'];
		 		header("Location:../login.php?stat=yes");
		 		exit;
		 	}else if($say == 0){
		 		header("Location:../login.php?stat=no");
		 		exit;
		 	}
		 	}

$uploadfile = "../upload/";
$tmp_name = $_FILES['user_pp']['tmp_name'];
$name = $_FILES['user_pp']['name'];
$size = $_FILES['user_pp']['size'];
$type = $_FILES['user_pp']['type'];
$domain = substr($name, -4,4);
$blavalueo = rand(1,50000000);
$blavaluet = rand(1,80000000);
$photoname = $blavalueo.$blavaluet.".".$domain;

if (isset($_POST['pp_delete'])) {
	unlink("$uploadfile/".$sessiongive['user_pp']);
	if (empty($sessiongive['user_pp'])) {
		$_SESSION['user_username']=$_POST['user_username'];
		header("Location:../profile-setting.php?photo=delete");
	}else{
		$_SESSION['user_username']=$_POST['user_username'];
		header("Location:../profile-setting.php?photo=nodelete");
	}
   	$delete=$db->prepare("UPDATE user SET user_pp=:user_pp WHERE user_username=:user");
	$deletea=$delete->execute(array(
		'user' => @$_SESSION['user_username'],
		'user_pp' => ""
	));
}

if (isset($_POST['profilayarkaydet'])) {

		if (strlen($name) == 0) {
			header("Location:../profile-setting.php?photo=null");
		}

		if ($size > (1024*1024*3)) {
			header("Location:../profile-setting.php?photo=size");
		}

		if ($type != 'image/jpeg' && $type != '.jpg'){
			header("Location:../profile-setting.php?photo=type");
		}
		move_uploaded_file($tmp_name, "$uploadfile/$photoname");

		$tablosortwo=$db->prepare("SELECT * FROM user where user_username=:twouser");
  		$tablosortwo->execute(array(
    		'twouser' => $_POST['user_username']
 		));
 		$dbd=$tablosortwo->rowCount();

 		$usernamechars = preg_match('@[^\w]@', $_POST['user_username']);
		$namenumber = preg_match('@[0-9]@', $_POST['user_name']);
		$lastnamenumber = preg_match('@[0-9]@', $_POST['user_lastname']);
		
		if ($usernamechars) {
			header("Location:../profile-setting.php?username=koyulmaz");
		}else if ($namenumber) {
			header("Location:../profile-setting.php?name=koyulmaz");
		}else if ($lastnamenumber) {
			header("Location:../profile-setting.php?lastname=koyulmaz");
		}else{/*
		if (!$_POST['user_username'] == $_SESSION['user_username'] && $dbd) {
				
		}*/
		if ($_POST['user_username'] == $_SESSION['user_username'] || $dbc == 0 ){
			$kullanicisor=$db->prepare("UPDATE user SET
				user_pp=:user_pp,
				user_username=:user_username,
				user_name=:user_name,
				user_lastname=:user_lastname,
				user_facebook=:user_facebook,
				user_youtube=:user_youtube,
				user_instagram=:user_instagram,
				user_twitter=:user_twitter,
				user_telegram=:user_telegram,
				user_spotify=:user_spotify,
				user_tiktok=:user_tiktok,
				user_linkedin=:user_linkedin,
				user_reddit=:user_reddit
				WHERE user_username=:user");

			$say=$kullanicisor->execute(array(
				'user' => @$_SESSION['user_username'],
				'user_pp' => $photoname,
				'user_username' => htmlspecialchars(trim(strtolower($_POST['user_username']))),
				'user_name' => htmlspecialchars(trim($_POST['user_name'])),
				'user_lastname' => htmlspecialchars(trim($_POST['user_lastname'])),
				'user_facebook' => htmlspecialchars(trim($_POST['user_facebook'])),
				'user_youtube' => htmlspecialchars(trim($_POST['user_youtube'])),
				'user_instagram' => htmlspecialchars(trim($_POST['user_instagram'])),
				'user_twitter' => htmlspecialchars(trim($_POST['user_twitter'])),
				'user_telegram' => htmlspecialchars(trim($_POST['user_telegram'])),
				'user_spotify' => htmlspecialchars(trim($_POST['user_spotify'])),
				'user_tiktok' => htmlspecialchars(trim($_POST['user_tiktok'])),
				'user_linkedin' => htmlspecialchars(trim($_POST['user_linkedin'])),
				'user_reddit' => htmlspecialchars(trim($_POST['user_reddit']))
			));
			if ($say) {
				$_SESSION['user_username']=$_POST['user_username'];
				header("Location:../profile-setting.php?user=ok");
			}else{
				header("Location:../profile-setting.php?user=no");
			}
		}else if (!$dbc == 0) {
				header("Location:../profile-setting.php?user=username");
		}
	}
	}
?>