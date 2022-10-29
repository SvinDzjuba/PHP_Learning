<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Сountries of the world</title>
	<!-- bootstrap -->
	<link rel="stylesheet" href="public/css/bootstrap.min.css">
	<!-- custom -->
	<link href="public/css/templatemo-style.css" rel="stylesheet">
	<link href="public/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="public/css/search.css">
	<link rel="stylesheet" href="public/css/login.css">
</head>

<body>
	<style>
		#header {
			padding: 10px;
			top: 0;
			position: relative;
		}

		#body {
			position: relative;
			padding: 10px;
			padding-bottom: 60px;
			/* Height of the footer */
			margin-top: 80px;
		}

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
			background-color: #fff;
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
								<input type="text" name="text" class="form-control input-sm" maxlength="64"
									placeholder="Введите название или код страны">
								<button type="submit" class="btn btn-primary btn-sm">Search</button>
							</form>
						</div>
					</div>
					<!-- menu -->
					<ul class="nav navbar-nav navbar-right" id="login">
						<?php
                        if (!isset($_SESSION['sessionId'])) {
	                        echo '<li><a href="login">Log in</a></li>';
                        } else {
	                        echo '<li><a href="logout">' . $_SESSION['name'] . ' - Log out</a></li>';
	                        echo '<li><a href="profile">- Profile</a></li>';
                        }
                        ?>
					</ul>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right tnav">
							<!-- php code menu -->
							<?php
                            echo '<li><a href="./">Главная</a></li>';
                            echo '<li><a href="states">Государства</a></li>';
                            echo '<li><a href="cities">Города</a></li>';
                            echo '<li><a href="continent">Континенты</a></li>';
                            if (isset($_SESSION['sessionId']) && $_SESSION['role'] == 'admin') {
	                            echo '<li>';
	                            echo '
									<li class="dropdown">
										<a style="font-size: 16px">Управлять</a>
										<div class="dropdown-content">
											<a style="font-size: 16px" href="countrylist">Государства</a>
											<a style="font-size: 16px" href="citylist">Города</a>
										</div>
									</li>';
	                            echo '</li>';
                            }
                            ?>
						</ul>
					</div>
					<!-- end menu -->
				</div>
			</div>
			<!-- end navigation -->
		</div>
		<div id="body">
			<!-- start content -->
			<section class="templatemo-section">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h2 class="text-uppercase text-center">
								<?php
                                if (isset($title))
	                                echo $title;
                                ?>
								<!-- php code title -->
							</h2>
							<hr>
							<?php
                            if (isset($content)) {
	                            echo $content;
                            }
                            ?>
							<!-- php code content -->
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
						<p>Copyright &copy; 2022 Сountries of the world IVKHK JPTV20 Maksim Dzjubenko</p>
						<hr>
					</div>
				</div>
			</div>
		</footer>
		<!-- end footer -->
	</div>
</body>

</html>