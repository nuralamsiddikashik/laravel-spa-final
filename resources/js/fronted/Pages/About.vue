<template>

	<div>
		<Header />
		<div class="main-content">
			<div class="rs-breadcrumbs bg-1">
				<div class="container">
					<div class="content-part text-center">
						<h1 class="breadcrumbs-title white-color mb-0">About</h1>
					</div>
				</div>
			</div>
		</div>
		<Footer />
	</div>

</template>
<script>
import Header from "../../fronted/Header.vue";
import Footer from "../../fronted/footer/Footer.vue";
export default {
	components: {
		Header,
		Footer
	}
};
</script>
