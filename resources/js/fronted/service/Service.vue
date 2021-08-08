<template>
	<div class="rs-services style15 pt-100 md-pt-70">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 sm-mb-20">
					<div
						class="addon-services"
						:style="{backgroundImage:`url(${ServiceShape})`}"
					>
						<div class="services-icon">
							<img
								:src="`${ServiceImage}`"
								alt="images"
							>
						</div>
						<div class="services-text">
							<h2 class="title"> <a href="services-single.html">Online Management</a></h2>
							<p class="services-txt"> Find out what's working and what's not dig into your data Organically</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 sm-mb-20">
					<div
						class="addon-services"
						:style="{backgroundImage:`url(${ServiceShape})`}"
					>
						<div class="services-icon">
							<img
								:src="`${ServiceImage}`"
								alt="images"
							>
						</div>
						<div class="services-text">
							<h2 class="title"> <a href="services-single.html">Rank Optimization</a></h2>
							<p class="services-txt"> Find out what's working and what's not dig into your data Organically</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div
						class="addon-services"
						:style="{backgroundImage:`url(${ServiceShape})`}"
					>
						<div class="services-icon">
							<img
								:src="`${ServiceImage}`"
								alt="images"
							>
						</div>
						<div class="services-text">
							<h2 class="title"> <a href="services-single.html">Fast Process</a></h2>
							<p class="services-txt"> Find out what's working and what's not dig into your data Organically</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import ServiceImage from "../../../../public/fronted/img/1.png";
import ServiceShape from "../../../../public/fronted/img/service-shape.png";
export default {
	name: "Service",
	data: () => ({
		ServiceImage,
		ServiceShape
	})
};
</script>
</script>