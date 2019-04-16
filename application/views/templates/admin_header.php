<!DOCTYPE html>
<html>
<head>
	<script>
            var ScrollMsg= "Ci Online Shop"
            var CharacterPosition=0;
            function StartScrolling() {
            document.title=ScrollMsg.substring(CharacterPosition,ScrollMsg.length)+
            ScrollMsg.substring(0, CharacterPosition);
            CharacterPosition++;
            if(CharacterPosition > ScrollMsg.length) CharacterPosition=0;
            window.setTimeout("StartScrolling()",150); }
            StartScrolling();
        </script>
        <link rel="icon" type="image" href="<?php echo base_url().'assets/logo/ci.png'?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/navbar.css';?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'css/carousel.css';?>">
	<script src="<?php echo base_url().'js/carousel.js';?>"></script>
	<script src="<?php echo base_url().'js/jquery.js';?>"></script>
</head>
<body>
	<header>
		<img class="img" src="<?php echo base_url().'assets/logo/ci.png';?>" alt="no image">
		<h1 class="title">Ci ONLINE SHOP</h1>
	</header>
	<nav>
			<ul>
				<a href="<?php echo base_url().'pages/view'?>"><li><i class="fa fa-home"></i> Home</li></a>
				<a href="<?php echo base_url().'pages/admin_dashboard'?>"><li><i class="fa fa-plus"></i> Add Product</li></a>
				<a href="#"><li><i class="fa fa-edit"></i> Edit Product</li></a>
				<a href="<?php echo base_url().'pages/login';?>"><li><i class="fa fa-sign-out "></i> Logout</li></a>
			</ul>
			<div class="handle">
				<p class="menu">Menu</p>
				<div class="menu_icon">
			      <div></div>
			      <div></div>
			      <div></div>
		      </div>
			</div>
		</nav>
		<div class="container">
			<br>
