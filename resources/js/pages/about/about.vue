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
										method=""
										@submit.prevent="updateAbout()"
										enctype="multipart/form-data"
									>
										<div class="form-group">
											<label for="cat_name">About title</label>
											<input
												class="form-control"
												name="about_title"
												v-model="addToAbout.about_title"
											/>
										</div>

										<div class="form-group">
											<label for="cat_name">About subtitle</label>
											<input
												class="form-control"
												name="about_subtitle"
												v-model="addToAbout.about_subtitle"
											/>
										</div>

										<div class="form-group">
											<label for="cat_name">About Description</label>
											<input
												class="form-control"
												name="about_description"
												v-model="addToAbout.about_description"
											/>
										</div>
										<div class="row">
											<div class="row">
												<div class="col-8">
													<div class="form-group">
														<label for="about_image">Product Image</label>
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
															:src="about_image"
															alt=""
															class="img-fluid"
														>
													</div>
												</div>
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
import axios from "axios";
import Header from "../../components/Header.vue";
import Sidebar from "../../components/Sidebar.vue";
export default {
	name: "about",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {
			addToAbout: {
				about_title: "",
				about_subtitle: "",
				about_description: "",
				about_image: ""
			},
			about_image: ""
		};
	},
	methods: {
		aboutItemListShow() {
			axios.get("/api/app/about-list").then(response => {
				let aboutShow = response.data;
				this.addToAbout.about_title = aboutShow.about_title;
				this.addToAbout.about_subtitle = aboutShow.about_subtitle;
				this.addToAbout.about_description = aboutShow.about_description;
				this.about_image = aboutShow.about_image;
			});
		},
		updateAbout() {
			let formData = new FormData();
			formData.append("about_title", this.addToAbout.about_title);
			formData.append("about_subtitle", this.addToAbout.about_subtitle);
			formData.append("about_description", this.addToAbout.about_description);
			if (this.addToAbout.about_image != "") {
				formData.append("about_image", this.addToAbout.about_image);
			}
			axios
				.post("/api/app/update-about", formData, {
					header: {
						"Content-Type": "multipart-formdata"
					}
				})
				.then(({ data }) => {
					this.about_image = data.about_image;
					this.$toast.success({
						title: "Success",
						message: "Service update Success"
					});
					console.log(data);
				});
		},
		onImageChange(e) {
			const file = e.target.files[0];
			// Do some client side validation...
			this.addToAbout.about_image = file;
		}
	},
	mounted() {
		this.aboutItemListShow();
	}
};
</script>