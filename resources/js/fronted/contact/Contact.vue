<template>
	<div>
		<Header />
		<div class="main-content">
			<div
				id="rs-contact"
				class="rs-contact style1 inner"
			>

				<div class="gray-bg pt-100 pb-100 md-pt-80 md-pb-80">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 form-part white-bg">
								<div class="sec-title mb-45">
									<div class="sub-title primary">CONTACT US</div>
									<h2 class="title mb-0">Get In Touch</h2>
								</div>
								<div id="form-messages"></div>
								<form
									id="contact-form"
									class="contact-form"
									method="post"
									action="https://rstheme.com/products/html/reobiz/mailer.php"
								>
									<div class="row">
										<div class="col-md-6 mb-30">
											<div class="common-control form-group mb-0">
												<input
													type="text"
													name="name"
													placeholder="Name"
													required=""
												>
											</div>
										</div>
										<div class="col-md-6 mb-30">
											<div class="common-control form-group mb-0">
												<input
													type="email"
													name="email"
													placeholder="Email"
													required=""
												>
											</div>
										</div>
										<div class="col-md-6 mb-30">
											<div class="common-control form-group mb-0">
												<input
													type="text"
													name="phone"
													placeholder="Phone Number"
													required=""
												>
											</div>
										</div>
										<div class="col-md-6 mb-30">
											<div class="common-control form-group mb-0">
												<input
													type="text"
													name="website"
													placeholder="Your Website"
													required=""
												>
											</div>
										</div>
										<div class="col-md-12 mb-30">
											<div class="common-control form-group mb-0">
												<textarea
													name="message"
													placeholder="Your Message Here"
													required=""
												></textarea>
											</div>
										</div>
										<div class="col-md-12">
											<div class="submit-btn form-group mb-0">
												<button
													type="submit"
													class="readon"
												>Submit Now</button>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-lg-4 pl-0 md-pr-0 md-order-first">
								<div class="contact-info">
									<h3 class="title">Contact Info</h3>
									<div class="info-wrap mb-20">
										<div class="icon-part">
											<i class="flaticon-location"></i>
										</div>
										<div class="content-part">
											<h4>Office Address</h4>
											127 Double Street, Dublin, United Kingdom.
										</div>
									</div>
									<div class="info-wrap mb-20">
										<div class="icon-part">
											<i class="flaticon-call"></i>
										</div>
										<div class="content-part">
											<h4>Telephone</h4>
											<p>P: <a href="tel:+1235558888">(+123) 555 8888</a></p>
											<p>P: <a href="tel:+1235558899">(+123) 555 8899</a></p>
										</div>
									</div>
									<div class="info-wrap mb-20">
										<div class="icon-part">
											<i class="flaticon-email"></i>
										</div>
										<div class="content-part">
											<h4>Mail Us</h4>
											<p>E: <a href="mailto:support@rstheme.com">support@rstheme.com</a></p>
											<p>E: <a href="mailto:info@codesless.com">info@codesless.com</a></p>
										</div>
									</div>
									<div class="info-wrap">
										<div class="icon-part">
											<i class="flaticon-clock"></i>
										</div>
										<div class="content-part">
											<h4>Opening Hours</h4>
											<p>Mon-Fri: 10:00-18:00</p>
											<p>Sat-Sun: 10:00-14:00</p>
										</div>
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
import Footer from "../../fronted/footer/Footer.vue";
export default {
	name: "Contact",
	components: {
		Header,
		Footer
	}
};
</script>