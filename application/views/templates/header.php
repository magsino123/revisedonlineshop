<!DOCTYPE html>
<html>
<head>
	<script>
		var ScrollMsg = 'Ci Online Shop';
		var CharacterPosition = 0;
		function StartScrolling(){
			document.title = ScrollMsg.substring(CharacterPosition, ScrollMsg.length)+
			ScrollMsg.substring(0, CharacterPosition);
			CharacterPosition++;
			if (CharacterPosition > ScrollMsg.length) CharacterPosition = 0; 
			window.setTimeout("StartScrolling()", 150); 
		}
		StartScrolling();
	</script>
	<!--css-->
	<link rel="icon" type="image" href="<?php echo base_url().'assets/logo/ci.png';?>">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/navbar.css';?>">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--css-->
	<!--javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<!--javascript-->
</head>
<body>
	<header>
		<img class="img" src="<?php echo base_url().'assets/logo/ci.png';?>" alt = "No Image">
		<h1 class="title">Ci ONLINE SHOP</h1>
	</header>
	<nav>
		<ul>
			<a href="<?php echo base_url().'pages/view'?>"><li><i class="fa fa-home"></i> Home</li></a>
			<a href="<?php echo base_url().'pages/product'?>"><li><i class="fa fa-shopping-cart"></i> Shop</li></a>
			<a href="#"><li><i class="fa fa-envelope"></i> Contact</li></a>
			<a href="<?php echo base_url().'pages/login';?>"><li><i class="fa fa-sign-in "></i> Login</li></a>
		</ul>
	</nav>
	<div class="container">
		<br>
