<template>

	<div id="wrapper">
		<Sidebar />
		<div
			id="content-wrapper"
			class="d-flex flex-column"
		>
			<div id="content">
				<Header />
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-6 offset-md-3 mb-4">
							<div class="card border-left-primary shadow h-100 py-2">
								<div class="card-body">
									<form
										method="POST"
										@submit.prevent="createService()"
										enctype="multipart/form-data"
									>
										<div class="form-group">
											<label for="service_title">Service Name</label>
											<input
												class="form-control"
												name="service_title"
												v-model="addService.service_title"
											/>
										</div>

										<div class="form-group">
											<label for="service_description">Service Description</label>
											<input
												class="form-control"
												name="service_description"
												v-model="addService.service_description"
											/>
										</div>

										<div class="row">
											<div class="col-8">
												<div class="form-group">
													<label for="service_image">Product Image</label>
													<input
														type="file"
														class="form-control-file"
														@change="onImageChange"
														name="service_image"
													>
												</div>
											</div>
											<div class="col-4">

											</div>
										</div>
										<div class="form-group">
											<button class="btn btn-success">Save</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>

<script>
// Header & Footer Component Load
import Header from "../../components/Header.vue";
import Sidebar from "../../components/Sidebar.vue";
export default {
	name: "AddService",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {
			addService: {
				service_title: "",
				service_description: "",
				service_image: ""
			}
		};
	},
	methods: {
		createService() {
			let formData = new FormData();
			formData.append("service_title", this.addService.service_title);
			formData.append(
				"service_description",
				this.addService.service_description
			);
			formData.append("service_image", this.addService.service_image);

			axios
				.post("/api/app/add-service", formData)
				.then(response => {
					if (response.status === 200) {
						console.log(response.data);
						this.resetService();
						this.$toast.success({
							title: "Success",
							message: "Service create success"
						});
						this.$router.push("/app/service-list");
					}
				})
				.catch(error => {
					console.log(error.message);
				});
		},
		onImageChange(e) {
			const file = e.target.files[0];
			// Do some client side validation...
			this.addService.service_image = file;
		},
		resetService() {
			this.addService = {
				service_title: "",
				service_description: "",
				service_image: ""
			};
		}
	}
};
</script>