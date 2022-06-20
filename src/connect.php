<?php 
	try{
		$db=new PDO("mysql:host=localhost;dbname=profile;charset=utf8", 'root', '');
		//echo 'helal';
	}
	catch (PDOExpception $e){
		echo $e->getMessage();
	}
?>
