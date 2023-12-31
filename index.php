<?php
    ob_start();
    session_start();

    require_once('config/iniSis.php');
    require_once('config/autoload.php');

	$sis = new Sistema;

    $sis->debug(TRUE);
    $sis->log(TRUE);
?>
<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="EnzoVilasBoas" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&display=swap" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="<?= BASE ?>/css/bootstrap.css" type="text/css" />
	<link rel="stylesheet" href="<?= BASE ?>/style.css" type="text/css" />
	<link rel="stylesheet" href="<?= BASE ?>/css/dark.css" type="text/css" />
	<link rel="stylesheet" href="<?= BASE ?>/css/font-icons.css" type="text/css" />
	<link rel="stylesheet" href="<?= BASE ?>/css/animate.css" type="text/css" />
	<link rel="stylesheet" href="<?= BASE ?>/css/magnific-popup.css" type="text/css" />
	<link rel="stylesheet" href="<?= BASE ?>/css/custom.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Document Title
	============================================= -->
	<title>Saldão</title>

	<style>

		.revo-slider-emphasis-text {
			font-size: 58px;
			font-weight: 700;
			letter-spacing: 1px;
			font-family: 'Poppins', sans-serif;
			padding: 15px 20px;
			border-top: 2px solid #FFF;
			border-bottom: 2px solid #FFF;
		}

		.revo-slider-desc-text {
			font-size: 20px;
			font-family: 'Lato', sans-serif;
			width: 650px;
			text-align: center;
			line-height: 1.5;
		}

		.revo-slider-caps-text {
			font-size: 16px;
			font-weight: 400;
			letter-spacing: 3px;
			font-family: 'Poppins', sans-serif;
		}

		.tp-video-play-button { display: none !important; }

		.tp-caption { white-space: nowrap; }

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="<?= BASE ?>" class="standard-logo"><img src="<?= BASE ?>/img/saldao.png" alt="Saldão logo"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

							<!-- Top Cart
							============================================= -->
							<div id="top-cart" class="header-misc-icon d-none d-sm-block">
								<a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span class="top-cart-number">2</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Carrrinho</h4>
									</div>
									<div class="top-cart-items">
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												<a href="#"><img src="<?= BASE ?>/img/produtos/ventilador1.jpg" alt="Blue Round-Neck Tshirt" /></a>
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">Ventilador Mondial 40CM</a>
													<span class="top-cart-item-price d-block">$160</span>
												</div>
												<div class="top-cart-item-quantity">x 2</div>
											</div>
										</div>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price">$320</span>
										<a href="#" class="button button-3d button-small m-0">Comprar</a>
									</div>
								</div>
							</div><!-- #top-cart end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item">
									<a class="menu-link" href="#">
										<div>Home</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#">
										<div>utensílios</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#">
										<div>eletrônicos</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#">
										<div>Móveis</div>
									</a>
								</li>
								<li class="menu-item">
									<a class="menu-link" href="#">
										<div>Contato</div>
									</a>
								</li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Pesquisar.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<section id="slider" class="slider-element boxed-slider">
			<div class="container">
				<a href="#" class="d-block">
					<img class="w-100 rounded" src="img/banner.png" alt="Image">
				</a>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="shop row gutter-30">
						<div class="fancy-title title-border title-center topmargin-sm">
							<h4>Ultimos adicionados</h4>
						</div>

						<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="grid-inner">
								<div class="product-image">
									<a href="#"><img src="<?= BASE ?>/img/produtos/ventilador2.jpg" alt="Ventilador Mondial 40CM"></a>
									<a href="#"><img src="<?= BASE ?>/img/produtos/ventilador1.jpg" alt="Ventilador Mondial 40CM"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
											<a href="#" class="btn btn-dark"><i class="icon-line-expand"></i></a>
										</div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Ventilador Mondial 40CM</a></h3></div>
									<div class="product-price">$160</div>
								</div>
							</div>
						</div>

						<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="grid-inner">
								<div class="product-image">
									<a href="#"><img src="<?= BASE ?>/img/produtos/fritadeira2.jpg" alt="Airfryer 11 litros Philco"></a>
									<a href="#"><img src="<?= BASE ?>/img/produtos/fritadeira1.jpg" alt="Airfryer 11 litros Philco"></a>
									<div class="sale-flash badge bg-danger p-2">OFERTA</div>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
											<a href="#" class="btn btn-dark"><i class="icon-line-expand"></i></a>
										</div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Airfryer 11 litros Philco</a></h3></div>
									<div class="product-price"><del>$600</del> <ins>$550</ins></div>
								</div>
							</div>
						</div>

						<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="grid-inner">
								<div class="product-image">
									<a href="#"><img src="<?= BASE ?>/img/produtos/fogao1.jpg" alt="Fogão elétrico elgin"></a>
									<a href="#"><img src="<?= BASE ?>/img/produtos/fogao2.jpg" alt="Fogão elétrico elgin"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
											<a href="#" class="btn btn-dark"><i class="icon-line-expand"></i></a>
										</div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Fogão elétrico elgin</a></h3></div>
									<div class="product-price">$120</div>
								</div>
							</div>
						</div>

						<div class="product col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="grid-inner">
								<div class="product-image">
									<a href="#"><img src="<?= BASE ?>/img/produtos/panela1.jpg" alt="Panela de arroz mondial"></a>
									<a href="#"><img src="<?= BASE ?>/img/produtos/panela2.jpg" alt="Panela de arroz mondial"></a>
									<div class="bg-overlay">
										<div class="bg-overlay-content align-items-end justify-content-between" data-hover-animate="fadeIn" data-hover-speed="400">
											<a href="#" class="btn btn-dark me-2"><i class="icon-shopping-basket"></i></a>
											<a href="#" class="btn btn-dark"><i class="icon-line-expand"></i></a>
										</div>
									</div>
								</div>
								<div class="product-desc">
									<div class="product-title"><h3><a href="#">Panela de arroz mondial 10x</a></h3></div>
									<div class="product-price">$130</div>
								</div>
							</div>
						</div>

					</div>

					<div class="section mb-0">
						<div class="container">
	
							<div class="row col-mb-50">
								<div class="col-sm-6 col-lg-3">
									<div class="feature-box fbox-plain fbox-dark fbox-sm">
										<div class="fbox-icon">
											<i class="icon-thumbs-up2"></i>
										</div>
										<div class="fbox-content">
											<h3>100% Original</h3>
											<p class="mt-0">Trabalhamos apenas com produtos de excelete qualidade e originais.</p>
										</div>
									</div>
								</div>
	
								<div class="col-sm-6 col-lg-3">
									<div class="feature-box fbox-plain fbox-dark fbox-sm">
										<div class="fbox-icon">
											<i class="icon-credit-cards"></i>
										</div>
										<div class="fbox-content">
											<h3>Formas de pagamento</h3>
											<p class="mt-0">Aceitamos todas as formas de pagamento possiveis, Cartão de dabito & crédito, Pix e Dinheiro.</p>
										</div>
									</div>
								</div>
	
								<div class="col-sm-6 col-lg-3">
									<div class="feature-box fbox-plain fbox-dark fbox-sm">
										<div class="fbox-icon">
											<i class="icon-truck2"></i>
										</div>
										<div class="fbox-content">
											<h3>Entregamos</h3>
											<p class="mt-0">Aproveite para comprar, com o pagamento de uma pequena taxa entregamos na porta da sua casa</p>
										</div>
									</div>
								</div>
	
								<div class="col-sm-6 col-lg-3">
									<div class="feature-box fbox-plain fbox-dark fbox-sm">
										<div class="fbox-icon">
											<i class="icon-undo"></i>
										</div>
										<div class="fbox-content">
											<h3>3 Meses de garantia</h3>
											<p class="mt-0">Confiamos na qualidade de nossos produtos e por isso oferecemos 3 meses de garantia.</p>
										</div>
									</div>
								</div>
							</div>
	
						</div>
					</div>

					<div class="fancy-title title-border title-center topmargin-sm">
						<h4>Nossas marcas</h4>
					</div>

					<ul class="clients-grid grid-2 grid-sm-3 grid-md-6 mb-0" style="align-items: center;">
						<li class="grid-item"><a href="#"><img src="<?= BASE ?>/img/britania.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="<?= BASE ?>/img/dell.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="<?= BASE ?>/img/elgin.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="<?= BASE ?>/img/mondial.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="<?= BASE ?>/img/philco.png" alt="Clients"></a></li>
						<li class="grid-item"><a href="#"><img src="<?= BASE ?>/img/philips.png" alt="Clients"></a></li>
					</ul>




					<div class="clear bottommargin-sm"></div>

					<div class="row justify-content-center col-mb-50 mb-0">
						<div class="col-sm-6 col-lg-4">
							<div class="fancy-title title-border">
								<h4>Sobre nós</h4>
							</div>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas esse placeat soluta repellat excepturi neque delectus saepe numquam recusandae? Officia voluptas ea earum reprehenderit totam necessitatibus ipsa quidem error est.</p>
						</div>

						<div class="col-sm-6 col-lg-4 subscribe-widget">
							<div class="fancy-title title-border">
								<h4>Inscreva-se</h4>
							</div>
							<p>Inscreva-se para ser notificado sempre que tivermos novos produtos &amp; ofertas:</p>
							<div class="widget-subscribe-form-result"></div>
							<form id="widget-subscribe-form2" action="" method="post" class="mb-0">
								<div class="input-group mx-auto">
									<div class="input-group-text"><i class="icon-email2"></i></div>
									<input type="email" name="widget-subscribe-form-email" class="form-control required email" placeholder="Seu email">
									<button class="btn btn-secondary" type="submit">Inscreva-se</button>
								</div>
							</form>
						</div>

						<div class="col-sm-6 col-lg-4">
							<div class="fancy-title title-border">
								<h4>Nossas midias</h4>
							</div>

							<a href="https://www.facebook.com/profile.php?id=100017383685208" class="social-icon si-facebook" data-bs-toggle="tooltip" data-bs-placement="top" title="Facebook" target="_blank">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>

							<a href="https://api.whatsapp.com/send?phone=5512991217718&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20fazer%20uma%20compra" class="social-icon si-whatsapp" data-bs-toggle="tooltip" data-bs-placement="top" title="Whatsapp" target="_blank">
								<i class="icon-whatsapp"></i>
								<i class="icon-whatsapp"></i>
							</a>

							<a href="#" class="social-icon si-instagram" data-bs-toggle="tooltip" data-bs-placement="top" title="Instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>

						</div>
					</div>

					<div class="clear"></div>

					
				
				
			</div>
		</section><!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">
				<div class="container">

					<div class="row col-mb-30">

						<div class="col-md-6 text-center text-md-start">
							Copyrights &copy; 2023 Todos os direitos reservados <a href="https://www.facebook.com/enzovilasboas.dev/" target="_blank">Enzo Vilas Boas</a>.<br>
							<div class="copyright-links"><a href="#">Termos de compra</a> / <a href="#">Politica de privacidade</a></div>
						</div>

						<div class="col-md-6 text-center text-md-end">
							<div class="d-flex justify-content-center justify-content-md-end">
								<a href="https://www.facebook.com/profile.php?id=100017383685208" class="social-icon si-small si-borderless si-facebook" target="_blank">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="https://api.whatsapp.com/send?phone=5512991217718&text=Ol%C3%A1,%20vim%20do%20site%20e%20gostaria%20de%20fazer%20uma%20compra" class="social-icon si-small si-borderless si-whatsapp" target="_blank">
									<i class="icon-whatsapp"></i>
									<i class="icon-whatsapp"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-instagram">
									<i class="icon-instagram"></i>
									<i class="icon-instagram"></i>
								</a>

							</div>

							<div class="clear"></div>

							<i class="icon-envelope2"></i> info@saldao.com.br <span class="middot">&middot;</span> <i class="icon-headphones"></i> +12 99121-7718
						</div>

					</div>

				</div>
			</div><!-- #copyrights end -->
		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="<?= BASE ?>/js/jquery.js"></script>
	<script src="<?= BASE ?>/js/plugins.min.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="<?= BASE ?>/js/functions.js"></script>

</body>
</html>
<?php
ob_end_flush();
?>