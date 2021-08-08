<template>
	<div>
		<Header />
		<div class="main-content">
			<div
				class="rs-breadcrumbs bg-6"
				:style="{backgroundImage:`url(${BreadcrumbImage})`}"
			>
				<div class="container">
					<div class="content-part text-center pt-160 pb-160">
						<h1 class="breadcrumbs-title white-color mb-0">Portfolios Six</h1>
					</div>
				</div>
			</div>
			<!-- end of breadcrumb area -->

			<div
				id="rs-portfolio"
				class="rs-portfolio inner3 pt-100 pb-70 md-pt-80 md-pb-50"
			>
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-6 mb-30">
							<div class="portfolio-item">
								<div class="portfolio-img">
									<img
										:src="`${PortfolioImage}`"
										alt=""
									>
								</div>
								<div class="portfolio-content">
									<div class="portfolio-inner">
										<h4 class="title"><a href="#">Stock Market Analysis</a></h4>
										<a
											class="category"
											href="#"
										>Marketing</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-30">
							<div class="portfolio-item">
								<div class="portfolio-img">
									<img
										:src="`${PortfolioImage}`"
										alt=""
									>
								</div>
								<div class="portfolio-content">
									<div class="portfolio-inner">
										<h4 class="title"><a href="#">Support Technology</a></h4>
										<a
											class="category"
											href="#"
										>Consulting</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-30">
							<div class="portfolio-item">
								<div class="portfolio-img">
									<img
										:src="`${PortfolioImage}`"
										alt=""
									>
								</div>
								<div class="portfolio-content">
									<div class="portfolio-inner">
										<h4 class="title"><a href="#">Sales Analysis</a></h4>
										<a
											class="category"
											href="#"
										>Marketing</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-30">
							<div class="portfolio-item">
								<div class="portfolio-img">
									<img
										:src="`${PortfolioImage}`"
										alt=""
									>
								</div>
								<div class="portfolio-content">
									<div class="portfolio-inner">
										<h4 class="title"><a href="#">Stock Investments</a></h4>
										<a
											class="category"
											href="#"
										>Marketing</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-30">
							<div class="portfolio-item">
								<div class="portfolio-img">
									<img
										:src="`${PortfolioImage}`"
										alt=""
									>
								</div>
								<div class="portfolio-content">
									<div class="portfolio-inner">
										<h4 class="title"><a href="#">Big Data Services</a></h4>
										<a
											class="category"
											href="#"
										>Business</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-30">
							<div class="portfolio-item">
								<div class="portfolio-img">
									<img
										:src="`${PortfolioImage}`"
										alt=""
									>
								</div>
								<div class="portfolio-content">
									<div class="portfolio-inner">
										<h4 class="title"><a href="#">HR Recruiting</a></h4>
										<a
											class="category"
											href="#"
										>Consulting</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-30">
							<div class="portfolio-item">
								<div class="portfolio-img">
									<img
										:src="`${PortfolioImage}`"
										alt=""
									>
								</div>
								<div class="portfolio-content">
									<div class="portfolio-inner">
										<h4 class="title"><a href="#">Security Services</a></h4>
										<a
											class="category"
											href="#"
										>Strategy</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-30">
							<div class="portfolio-item">
								<div class="portfolio-img">
									<img
										:src="`${PortfolioImage}`"
										alt=""
									>
								</div>
								<div class="portfolio-content">
									<div class="portfolio-inner">
										<h4 class="title"><a href="#">Sales Enablement</a></h4>
										<a
											class="category"
											href="#"
										>Finance</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 mb-30">
							<div class="portfolio-item">
								<div class="portfolio-img">
									<img
										:src="`${PortfolioImage}`"
										alt=""
									>
								</div>
								<div class="portfolio-content">
									<div class="portfolio-inner">
										<h4 class="title"><a href="#">Advertising Technology</a></h4>
										<a
											class="category"
											href="#"
										>Business</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<Footer />
	</div>
</template>
<script>
import Header from "../Header.vue";
import Footer from "../footer/Footer.vue";
import PortfolioImage from "../../../../public/fronted/img/2.jpg";
import BreadcrumbImage from "../../../../public/fronted/img/6.jpg";
export default {
	name: "Portfolio",
	components: {
		Header,
		Footer
	},
	data: () => ({
		PortfolioImage,
		BreadcrumbImage
	})
};
</script>