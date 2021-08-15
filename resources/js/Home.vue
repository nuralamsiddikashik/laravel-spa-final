<template>
	<div>
		<Header />
		<div class="main-content">
			<Banner />
			<ShortService />
			<HomeAbout />
			<ServiceTwo />
			<Counter />
		</div>
		<Footer />
	</div>

</template>

<script>
import Header from "./fronted/Header.vue";
import Banner from "./fronted/banner/Banner.vue";
import ShortService from "./fronted/service/short-service.vue";
import Counter from "./fronted/counter/counter.vue";
import ServiceTwo from "./fronted/service/service-two.vue";
import HomeAbout from "./fronted/about/HomeAbout.vue";
import Footer from "./fronted/footer/Footer.vue";
export default {
	components: {
		Header,
		Banner,
		ShortService,
		ServiceTwo,
		Counter,
		HomeAbout,
		Footer
	}
};
</script>