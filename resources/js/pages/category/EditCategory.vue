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
										@submit.prevent="updateCategory()"
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
export default {
	name: "category-edit",
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
		updateCategory() {
			let id = this.$route.params.id;
			axios
				.patch(`/api/app/category-update/${id}`, this.formData)
				.then(() => {
					console.log("update");
					this.$router.push("/app/category-list");
				})
				.catch(error => {
					console.log(error);
				});
		},
		loadCategory() {
			let id = this.$route.params.id;
			axios.get(`/api/app/category-edit/${id}`).then(response => {
				this.formData.cat_name = response.data.cat_name;
				console.log(response);
			});
		}
	},
	mounted() {
		this.loadCategory();
	}
};
</script>