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
									<form method="">
										<div class="form-group">
											<label for="service_title">Service Name</label>
											<input
												class="form-control"
												name="service_title"
											/>
										</div>

										<div class="form-group">
											<label for="service_description">Service Description</label>
											<input
												class="form-control"
												name="service_description"
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
												<div style="width: 100%; max-height: 150px; overflow:hidden">
													<img
														:src="image"
														alt=""
														class="img-fluid"
													>
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
import Header from "../../components/Header.vue";
import Sidebar from "../../components/Sidebar.vue";
export default {
	name: "CreateCategory",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {};
	},
	methods: {}
};
</script>