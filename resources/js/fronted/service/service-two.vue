<template>
	<div
		id="rs-services"
		class="rs-services style16 bg29"
		:style="{backgroundImage:`url(${ServiceBG})`}"
	>
		<div class="container">
			<div class="sec-title3 text-center mb-45 md-mb-30">
				<span class="sub-title">~ <span class="title-upper">Our Services</span> ~</span>
				<h2 class="title title3">Introduce Best SEO Services For Your Business</h2>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-6 mb-25">
					<div class="services-wrap">
						<div class="icon-part">
							<i class="fa fa-bar-chart"></i>
						</div>
						<div class="services-txt">
							<h4 class="services-title"><a href="services-single.html">Product Design</a></h4>
							<p class="services-txt">Podcasting operational change manaent inside of Workflows.</p>
							<div class="serial-number"> ~~~ 01</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-25">
					<div class="services-wrap">
						<div class="icon-part">
							<i class="fa fa-puzzle-piece"></i>
						</div>
						<div class="services-txt">
							<h4 class="services-title"><a href="services-single.html">Digital Product</a></h4>
							<p class="services-txt">Podcasting operational change manaent inside of Workflows.</p>
							<div class="serial-number"> ~~~ 02</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-25">
					<div class="services-wrap">
						<div class="icon-part">
							<i class="fa fa-envelope-o"></i>
						</div>
						<div class="services-txt">
							<h4 class="services-title"><a href="services-single.html">Email Marketing</a></h4>
							<p class="services-txt">Podcasting operational change manaent inside of Workflows.</p>
							<div class="serial-number"> ~~~ 03</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 md-mb-25">
					<div class="services-wrap">
						<div class="icon-part">
							<i class="fa fa-sitemap"></i>
						</div>
						<div class="services-txt">
							<h4 class="services-title"><a href="services-single.html">Social Media Marketing</a></h4>
							<p class="services-txt">Podcasting operational change manaent inside of Workflows.</p>
							<div class="serial-number"> ~~~ 04</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 sm-mb-25">
					<div class="services-wrap">
						<div class="icon-part">
							<i class="fa fa-codepen"></i>
						</div>
						<div class="services-txt">
							<h4 class="services-title"><a href="services-single.html">Search Engine Optimize</a></h4>
							<p class="services-txt">Podcasting operational change manaent inside of Workflows.</p>
							<div class="serial-number"> ~~~ 05</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="services-wrap">
						<div class="icon-part">
							<i class="fa fa-yelp"></i>
						</div>
						<div class="services-txt">
							<h4 class="services-title"><a href="services-single.html">Local Search Strategy</a></h4>
							<p class="services-txt">Podcasting operational change manaent inside of Workflows.</p>
							<div class="serial-number"> ~~~ 06</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import axios from "axios";
import ServiceBG from "../../../.././public/fronted/img/services-bg13.png";
export default {
	name: "ServiceTwo",
	data: () => ({
		ServiceBG
	})
};
</script>