<template>
	<div>
		<Header />
		<div class="main-content">
			<Banner />
			<Service />
			<HomeAbout />
		</div>
		<Footer />
	</div>

</template>

<script>
import Header from "./fronted/Header.vue";
import Banner from "./fronted/banner/Banner.vue";
import Service from "./fronted/service/Service.vue";
import HomeAbout from "./fronted/about/HomeAbout.vue";
import Footer from "./fronted/footer/Footer.vue";
export default {
	components: {
		Header,
		Banner,
		Service,
		HomeAbout,
		Footer
	}
};
</script>