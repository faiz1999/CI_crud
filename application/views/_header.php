<!DOCTYPE html>
<html>
<head>
	<title><?=$header;?></title>
	<style type="text/css">
	body {
		margin: 0 auto;
		padding: 0;
		font-family: sans-serif, arial;
	}
	.container{border: 1px solid #d2d2d2;}
	.wrapper{padding: 20px;}
	.menu {background-color: #eee;font-size: 16px;font-weight: bold;}
	.menu ul{list-style: none;margin: 0;padding: 0 0 0 4px;}
	.menu ul li{display: inline-table;margin-left: -4px;}
	.menu ul li.active { background-color: #fff; }
	.menu ul li a {
		display: block;
		text-decoration: none;
		line-height: 50px;
		padding: 0 10px;}
	.menu ul li a:hover {
		background-color: #fff;
		color: cyan;
	}
	.footer { background-color: #eee; padding: 10px; color: #000; }
	table.cg{
		border-collapse: collapse;
	}
	table.cg th, table.cg td{
		padding: 5px;
	}
	.btn:hover { cursor: pointer; }
	</style>
</head>
<body>

	<div class="container">
		<div class="menu">
		 	<ul>
		 		<li class="<?=$this->uri->segment(1) == 'home' ? 'active' : null; ?>">
		 			<a href="<?=site_url('home');?>">Home</a>
		 		</li>
		 		<li class="<?=$this->uri->segment(1) == 'buku' ? 'active' : null; ?>">
		 			<a href="<?=site_url('buku');?>">Daftar Buku</a>
		 		</li>
		 	</ul>
		</div>

		<div class="wrapper">