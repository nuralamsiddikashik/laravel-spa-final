<template>
	<div class="rs-services style15 pt-100 md-pt-70">
		<div class="container">

			<div class="row">
				<div
					class="col-lg-4 col-md-4 sm-mb-20"
					v-for="service in showServiceList"
					v-bind:key="service.id"
				>
					<div
						class="addon-services"
						:style="{backgroundImage:`url(${ServiceShape})`}"
					>
						<div class="services-icon">
							<img
								:src="service.service_image"
								alt="images"
							>
						</div>
						<div class="services-text">
							<h2 class="title"> <a href="#">{{service.service_title}}</a></h2>
							<p class="services-txt"> {{service.service_description}}</p>
						</div>
					</div>
				</div>

			</div>

		</div>
	</div>
</template>
<script>
import axios from "axios";
import ServiceImage from "../../../../public/fronted/img/1.png";
import ServiceShape from "../../../../public/fronted/img/service-shape.png";
import Contact from "../contact/Contact.vue";
export default {
	components: { Contact },
	name: "ShortService",
	data: () => ({
		ServiceImage,
		ServiceShape,
		showServiceList: []
	}),
	methods: {
		getServiceList() {
			axios.get("/api/service-list").then(response => {
				this.showServiceList = response.data.services;
			});
		}
	},
	mounted() {
		this.getServiceList();
	}
};
</script>
