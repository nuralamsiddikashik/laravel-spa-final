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
					<div class="col-md-6 offset-md-3">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Category List</h6>
							</div>
							<div class="card-body">
								<table class="table table-bordered dataTable">
									<thead>
										<tr>
											<th><input
													type="checkbox"
													:disabled="!categories.length"
													v-model="selectedAll"
													@click="selectCategoryItem"
												></th>
											<th>SL</th>
											<th>Category Name</th>
											<th>Category Slug</th>
											<th>Edit</th>
											<th>Remove</th>
										</tr>
									</thead>
									<tbody>
										<tr
											v-for="(category,index) in categories"
											:key="index"
										>
											<td><input
													type="checkbox"
													:value="category.id"
													v-model="selected"
												></td>
											<td>{{++index}}</td>
											<td>{{category.cat_name}}</td>
											<td>{{category.slug}}</td>

											<td>
												<router-link
													:to="{name: 'category-edit', params: {id: category.id}}"
													class="btn btn-success"
												>Edit</router-link>
											</td>
											<td><a
													@click="deleteCategory(category.id)"
													class="btn btn-danger"
												>Delete</a></td>
										</tr>
										<tr v-if="categories.length">
											<td colspan="6">
												<div class="dropdown">
													<button
														class="btn btn-info dropdown-toggle"
														type="button"
														id="dropdownMenuButton"
														data-toggle="dropdown"
														:disabled="!isSelected"
													>
														Action
													</button>
													<div
														class="dropdown-menu"
														aria-labelledby="dropdownMenuButton"
													>
														<button
															@click="removeCategoryItem(selected)"
															type="button"
															class="dropdown-item"
														>Remove</button>
													</div>
												</div>
											</td>
										</tr>
										<tr v-if="!categories.length">
											<td colspan="6">
												<h5 class="text-center text-danger">Data Not Found</h5>
											</td>
										</tr>
									</tbody>
								</table>
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
	name: "category-list",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {
			selected: [],
			isSelected: false,
			selectedAll: false
		};
	},
	methods: {
		deleteCategory(id) {
			axios.delete("/api/app/category-delete/" + id).then(response => {
				this.$store.dispatch("getCategories");
				this.$toast.success({
					title: "Success",
					message: "Category delete success"
				});
			});
		},
		selectCategoryItem(event) {
			if (event.target.checked === false) {
				this.selected = [];
			} else {
				this.categories.forEach(category => {
					if (this.selected.indexOf(category.id === -1)) {
						this.selected.push(category.id);
					}
				});
			}
		},
		removeCategoryItem(selected) {
			axios
				.post("/api/app/remove-all-category", { data: selected })
				.then(response => {
					(this.selected = []),
						(this.isSelected = false),
						(this.selectedAll = false);
					this.$store.dispatch("getCategories");
					this.$toast.success({
						title: "Success",
						message: "Category delete success"
					});
				})
				.catch(error => {
					console.log(error.message);
				});
		}
	},
	mounted() {
		this.$store.dispatch("getCategories");
	},
	watch: {
		selected(selected) {
			this.isSelected = selected.length > 0;
			this.selectedAll = selected.length === this.categories.length;
		}
	},
	computed: {
		categories() {
			return this.$store.getters.categories;
		}
	}
};
</script>