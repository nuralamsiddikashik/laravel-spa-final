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
										@submit.prevent="createServices()"
									>
										<div class="form-group">
											<label for="services_title">Service Name</label>
											<input
												class="form-control"
												name="services_title"
												v-model="createServiceForm.services_title"
											/>
										</div>

										<div class="form-group">
											<label for="services_description">Service Description</label>
											<input
												class="form-control"
												name="services_description"
												v-model="createServiceForm.services_description"
											/>
										</div>

										<div class="form-group">
											<label for="services_number">Service Number</label>
											<input
												class="form-control"
												name="services_number"
												v-model="createServiceForm.services_number"
											/>
										</div>

										<div class="form-group">
											<label for="services_icon">Service Icon</label>
											<input
												class="form-control"
												name="services_icon"
												v-model="createServiceForm.services_icon"
											/>
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
	name: "create-service",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {
			createServiceForm: {
				services_title: "",
				services_description: "",
				services_number: "",
				services_icon: ""
			}
		};
	},
	methods: {
		createServices() {
			axios
				.post("/api/app/add-service-two", this.createServiceForm)
				.then(response => {
					if (response.status === 200) {
						console.log(response.data);
						this.resetCreateForm();
						this.$toast.success({
							title: "Success",
							message: "Service create success"
						});
					}
				})
				.catch(error => {
					console.log(error.message);
				});
		},
		resetCreateForm() {
			this.createServiceForm = {
				services_title: "",
				services_description: "",
				services_number: "",
				services_icon: ""
			};
		}
	}
};
</script>