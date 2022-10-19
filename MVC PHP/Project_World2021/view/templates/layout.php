<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Countries of the world</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<!-- custom -->
	<link href="public/css/templatemo-style.css" rel="stylesheet">
	<link href="public/css/style.css" rel="stylesheet">
	<link href="public/css/search.css" rel="stylesheet">

</head>

<body>
	<style>
		.dropdown {
			position: relative;
			display: inline-block;
		}
		.dropdown-content {
			display: none;
			position: absolute;
			min-width: 160px;
			box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.4);
			padding: 12px 16px;
			z-index: 10;
		}
		.dropdown-content a {
			color: #808080 !important;
			font-size: 14px !important;
		}
		.dropdown-content a:hover {
			color: #000 !important;
		}
		.dropdown:hover .dropdown-content {
			display: block;
		}
		.search {
			padding-bottom: 30px
		}
		.search_btn {
			height: 30px;
			margin-left: 440px;
			right: 0;
			top: 12px;
			border-radius: 1px;
			margin-top: 12px;
			position: relative !important;
		}
		.search input {
			position: absolute;
			width: 230px;
			float: Left;
			top: 17px;
			right: 0px;
			height: 30px;
			line-height: 18px;
			padding: 0 2px 0 2px;
			border-radius: 1px;
		}
	</style>

	<div id="container">
		<div id="header">
			<!-- start navigation -->
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<a href="./" class="navbar-brand"><strong>Сountries of the World</strong></a>
						<br>
						<hr>
					</div>
					<div class="row">
						<div class="search">
							<form action="search" method="GET" class="form-search">
								<input type="text" name="text" class="form-control input-sm" max-length="64"
									placeholder="Введите название или код страны" />
								<button type="submit" class="btn btn primary btn-sm search_btn">Search</button>
							</form>
						</div>
					</div>
					<!--    меню              -->
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right tnav">
							<li><a style="font-size: 16px" href="./">Главная</a></li>
							<li><a style="font-size: 16px" href="states">Государства</a></li>
							<li><a style="font-size: 16px" href="cities">Города</a></li>
							<li><a style="font-size: 16px" href="continent">Континенты</a></li>
							<!-- <li><a style="font-size: 16px" href="countryList">Управлять</a></li> -->
							<li class="dropdown">
								<a style="font-size: 16px">Управлять</a>
								<div class="dropdown-content">
									<a style="font-size: 16px" href="countryList">Государства</a>
									<a style="font-size: 16px" href="cityList">Города</a>
								</div>
							</li>
						</ul>
					</div>
					<!--    end меню              -->
				</div>
			</div>
			<!-- end navigation -->
		</div>
		<div id="body" style="position: relative; top: 30px">
			<!-- start content -->
			<section class="templatemo-section ">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-uppercase text-center" style="margin-top: 0px;">
								<?php
								if (isset($title)) {
									echo $title;
								}
								?>
							</h2>
							<hr>
							<?php
							if (isset($content)) {
								echo $content;
							}
							?>
						</div>
					</div>
				</div>
			</section>
			<!-- end content -->
		</div>
		<!-- start footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<p>Copyright &copy; 2021 Сountries of the world | IVKHK, JPTV20, Dzjubenko</p>
						<hr>

					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->
	</div>

</body>

</html>