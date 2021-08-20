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
										@submit.prevent="createCategory()"
									>
										<div class="form-group">
											<label for="cat_name">Category Name</label>
											<input
												class="form-control"
												name="cat_name"
												v-model="formData.cat_name"
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
import Header from "../../components/Header.vue";
import Sidebar from "../../components/Sidebar.vue";
export default {
	name: "CreateCategory",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {
			formData: {
				cat_name: ""
			}
		};
	},
	methods: {
		createCategory() {
			axios.post("/api/app/add-category", this.formData).then(response => {
				this.$router.push("/app/category-list");
				this.$toast.success({
					title: "Success",
					message: "Category create success"
				});
			});
		}
	}
};
</script>