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
				<div
					class="col-lg-4 col-md-6 mb-25"
					v-for="(serviceList,index) in getListOfService"
					:key="index"
				>
					<div class="services-wrap">
						<div class="icon-part">
							<i :class="serviceList.services_icon"></i>
						</div>
						<div class="services-txt">
							<h4 class="services-title"><a href="#">{{serviceList.services_title}}</a></h4>
							<p class="services-txt">Podcasting operational change manaent inside of Workflows.</p>
							<div class="serial-number"> ~~~ 01</div>
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
		ServiceBG,
		getListOfService: []
	}),
	methods: {
		getServicesListShow() {
			axios
				.get("/api/service-list")
				.then(response => {
					this.getListOfService = response.data.getservices;
				})
				.catch(error => {
					console.log(error.message);
				});
		}
	},
	mounted() {
		this.getServicesListShow();
	}
};
</script>