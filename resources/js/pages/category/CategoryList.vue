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
											<th>SL</th>
											<th>Category Name</th>
											<th>Category Slug</th>
											<th>Edit</th>
											<th>Remove</th>
										</tr>
									</thead>
									<tbody>
										<tr
											v-for="category in categoriesList"
											:key='category.id'
										>
											<td>{{category.id}}</td>
											<td>{{category.cat_name}}</td>
											<td>{{category.slug}}</td>
											<td>Ashik</td>
											<td>Ashik</td>
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
			categoriesList: []
		};
	},
	methods: {
		loadCategories() {
			axios.get("/api/category-list").then(response => {
				this.categoriesList = response.data;
			});
		}
	},
	mounted() {
		this.loadCategories();
	}
};
</script>