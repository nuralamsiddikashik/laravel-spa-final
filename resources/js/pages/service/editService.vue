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
										method="PUT"
										enctype="multipart/form-data"
									>
										<div class="form-group">
											<label for="service_title">Service Name</label>
											<input
												class="form-control"
												name="service_title"
												v-model="editService.service_title"
											/>
										</div>

										<div class="form-group">
											<label for="service_description">Service Description</label>
											<input
												class="form-control"
												name="service_description"
												v-model="editService.service_description"
											/>
										</div>

										<div class="row">
											<div class="row">
												<div class="col-8">
													<div class="form-group">
														<label for="">Product Image</label>
														<input
															type="file"
															class="form-control-file"
															@change="onImageChange"
														>

													</div>
												</div>
												<div class="col-4">
													<div style="width: 100%; max-height: 150px; overflow:hidden">
														<img
															:src="service_image"
															alt=""
															class="img-fluid"
														>
													</div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<button class="btn btn-success">Update</button>
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
import Header from "../../components/Header.vue";
import Sidebar from "../../components/Sidebar.vue";
import { Form } from "vform";
import { objectToFormData } from "object-to-formdata";
export default {
	name: "category-list",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {
			editService: new Form({
				service_title: "",
				service_description: "",
				service_image: "",
				_method: "put"
			}),
			service_image: ""
		};
	},
	methods: {
		editServiceItemList() {
			let id = this.$route.params.id;
			axios.get(`/api/app/edit-service/${id}`).then(response => {
				let product = response.data;
				this.editService.service_title = product.service_title;
				this.editService.service_description = product.service_description;
				this.service_image = product.service_image;
			});
		},
		onImageChange(e) {
			const file = e.target.files[0];
			// Do some client side validation...
			this.editService.service_image = file;
		}
	},
	mounted() {
		this.editServiceItemList();
	}
};
</script>