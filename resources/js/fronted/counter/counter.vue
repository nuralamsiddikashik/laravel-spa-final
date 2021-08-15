<template>
	<div class="rs-counter style3">
		<div class="container">
			<div
				class="bg-overlay bg30"
				:style="{backgroundImage:`url(${CounterBG})`}"
			>
				<div class="row">
					<div class="col-lg-3 col-md-6 md-mb-50">
						<div class="counter-part">
							<div class="rs-count">250</div>
							<h5 class="title">Active Clients</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 md-mb-50">
						<div class="counter-part">
							<div class="rs-count">789</div>
							<h5 class="title">Projects Done</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 sm-mb-50">
						<div class="counter-part">
							<div class="rs-count">346</div>
							<h5 class="title">Team Advisors</h5>
						</div>
					</div>
					<div class="col-lg-3 col-md-6">
						<div class="counter-part">
							<div class="rs-count">475</div>
							<h5 class="title">Years Experience</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
import CounterBG from "../../../../public/fronted/img/counter-bg13.jpg";
export default {
	name: "Counter",
	data: () => ({
		CounterBG
	})
};
</script>