<template>
	<div
		class="rs-banner style4"
		:style="{backgroundImage:`url(${Image})`}"
	>
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="banner-content">
						<h2 class="title">Digital<span class="watermark">Marketing<br>Agency</span></h2>
						<div class="description">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing
								elit, sed do eiusmod tempor incididunt</p>
						</div>
						<div class="btn-part">
							<a
								class="readon2 get-new"
								href="contact.html"
							>Get Started now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-5"></div>
			</div>
		</div>
		<div class="animate-part">
			<div class="spiner dot-style">
				<img
					class="rotated-style"
					:src="`${BannerShape}`"
					alt="images"
				>
			</div>
			<div class="spiner horizontal">
				<img
					class="horizontal"
					:src="`${LineShape}`"
					alt="images"
				>
			</div>
			<div class="spiner horizontal2">
				<img
					class="horizontal"
					:src="`${LineShape}`"
					alt="images"
				>
			</div>
			<div class="spiner line-shape">
				<img
					:src="`${RightShape}`"
					alt="images"
				>
			</div>
		</div>
	</div>
</template>
<script>
import Image from "../../../../public/fronted/img/banner-right.png";
import LineShape from "../../../../public/fronted/img/line-shape.png";
import RightShape from "../../../../public/fronted/img/right-shape.png";
import BannerShape from "../../../../public/fronted/img/banner-shape.png";

export default {
	name: "Banner",
	data: () => ({
		Image,
		LineShape,
		RightShape,
		BannerShape
	})
};
</script>

<style scoped>
</style>>
