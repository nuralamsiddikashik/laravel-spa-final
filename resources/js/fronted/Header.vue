<template>

	<div class="full-width-header header-style2 modify3 md-mod">
		<!--Header Start-->
		<header
			id="rs-header"
			class="rs-header"
		>
			<!-- Menu Start -->
			<div class="menu-area menu-sticky">
				<div class="container-fluid">
					<div class="row custom-row">
						<div class="col-cell">
							<div class="logo-area">
								<a
									class="dark"
									href="index.html"
								><img
										:src="`${HeaderLogo}`"
										alt="logo"
									></a>
								<a
									class="light"
									href="index.html"
								><img
										:src="`${HeaderLogo}`"
										alt="logo"
									></a>
							</div>
						</div>
						<div class="col-cell">
							<div class="rs-menu-area">
								<div class="main-menu">
									<div class="mobile-menu">
										<a class="rs-menu-toggle">
											<i class="fa fa-bars"></i>
										</a>
									</div>
									<nav class="rs-menu rs-menu-close">
										<ul class="nav-menu">
											<li class="rs-mega-menu mega-rs menu-item-has-children current-menu-item">
												<router-link to="/">Home</router-link>
											</li>

											<li class="menu-item-has-children">
												<router-link to="/about">About</router-link>
											</li>

											<li class="menu-item-has-children">
												<router-link to="/portfolio">Portfolio</router-link>
											</li>

											<li class="menu-item-has-children">
												<router-link to="/contact">Contact</router-link>
											</li>
										</ul> <!-- //.nav-menu -->
									</nav>
								</div> <!-- //.main-menu -->
							</div>
						</div>
						<div class="col-cell hidden-lg">
							<div class="expand-btn-inner">
								<ul>
									<li class="search-parent">
										<a
											class="hidden-xs rs-search"
											data-target=".search-modal"
											data-toggle="modal"
											href="#"
										>
											<i class="flaticon-search"></i>
										</a>
									</li>
									<li class="quote-btn pl-20"><a href="#">Get A Quote</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Menu End -->

			<!-- Canvas Menu start -->
			<nav class="right_menu_togle hidden-md">
				<div class="close-btn">
					<span
						id="nav-close"
						class="humburger"
					>
						<span class="dot1"></span>
						<span class="dot2"></span>
						<span class="dot3"></span>
						<span class="dot4"></span>
						<span class="dot5"></span>
						<span class="dot6"></span>
						<span class="dot7"></span>
						<span class="dot8"></span>
						<span class="dot9"></span>
					</span>
				</div>
				<div class="canvas-logo">
					<a href="index.html"><img
							src="assets/images/logo-dark.png"
							alt="logo"
						></a>
				</div>
				<div class="offcanvas-text">
					<p>Consectetur adipiscing elit. Duis at dictum risus, non suscip it arcu. Quisque aliquam posuere tortor aliquam posuere tortor develop database.</p>
				</div>
				<div class="canvas-contact">
					<ul class="contact">
						<li><i class="flaticon-location"></i> 374 William S Canning Blvd, Fall River MA 2721, USA</li>
						<li><i class="flaticon-call"></i><a href="tel:+880155-69569">(+880)155-69569</a></li>
						<li><i class="flaticon-email"></i><a href="mailto:support@rstheme.com">support@rstheme.com</a></li>
						<li><i class="flaticon-clock"></i>10:00 - 17:00</li>
					</ul>
					<ul class="social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</nav>
			<!-- Canvas Menu end -->
		</header>
		<!--Header End-->
	</div>

</template>

<script>
import HeaderLogo from "../../../public/fronted/img/logo-dark.png";
export default {
	name: "Header",
	data: () => ({
		HeaderLogo
	})
};
</script>