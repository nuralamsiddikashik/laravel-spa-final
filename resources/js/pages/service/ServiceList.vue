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
								<h6 class="m-0 font-weight-bold text-primary">Service List</h6>
							</div>
							<div class="card-body">
								<table class="table table-bordered dataTable">
									<thead>
										<tr>
											<th>SL</th>
											<th>Service title</th>
											<th>Service Description</th>
											<th>Edit</th>
											<th>Remove</th>
										</tr>
									</thead>
									<tbody>
										<tr
											v-for="(service,index) in showServiceList"
											:key="index"
										>
											<td>{{++index}}</td>
											<td>{{service.service_title}}</td>
											<td>{{service.service_description}}</td>
											<td>
												<router-link
													:to="{name: 'edit-service', params: {id: service.id}}"
													class="btn btn-primary btn-sm"
												>Edit</router-link>
											</td>
											<td><a
													@click="deleteService(service.id)"
													class="btn btn-danger"
												>Delete</a></td>
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
import axios from "axios";
import Header from "../../components/Header.vue";
import Sidebar from "../../components/Sidebar.vue";
export default {
	name: "service-list",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {
			showServiceList: []
		};
	},
	methods: {
		deleteService(id) {
			axios.delete("/api/app/service-delete/" + id).then(response => {
				this.getServiceList();
				console.log(response);
			});
		},
		getServiceList() {
			axios.get("/api/app/service-list").then(response => {
				this.showServiceList = response.data;
			});
		}
	},
	mounted() {
		this.getServiceList();
	}
};
</script>