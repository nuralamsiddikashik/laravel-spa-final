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
					<div class="col-md-7 offset-md-2">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Service List</h6>
							</div>
							<div class="card-body">
								<table class="table table-bordered dataTable">
									<thead>
										<tr>
											<th>SL</th>
											<th>Service title</th>
											<th>Service Description</th>
											<th>Service Icon</th>
											<th>Service Number</th>
											<th>Edit</th>
											<th>Remove</th>
										</tr>
									</thead>
									<tbody>
										<tr
											v-for="(serviceData,index) in mainservices"
											:key="index"
										>
											<td>{{++index}}</td>
											<td>{{serviceData.services_title}}</td>
											<td>{{serviceData.services_description}}</td>
											<td>{{serviceData.services_icon}}</td>
											<td>{{serviceData.services_number}}</td>
											<td>
												<router-link
													:to="{name: 'edit-services', params: {id: serviceData.id}}"
													class="btn btn-primary btn-sm"
												>Edit</router-link>
											</td>
											<td>Remove</td>
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
	name: "services-list",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {
			mainservices: []
		};
	},
	methods: {
		getServicesList() {
			axios
				.get("/api/app/get-services-list")
				.then(response => {
					this.mainservices = response.data.mainservices;
				})
				.catch(error => {
					console.log(error.message);
				});
		}
	},
	mounted() {
		this.getServicesList();
	}
};
</script>