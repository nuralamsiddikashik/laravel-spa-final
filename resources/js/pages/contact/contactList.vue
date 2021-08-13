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
					<div class="col-md-8 offset-md-2">
						<div class="card shadow mb-4">
							<div class="card-header py-3">
								<h6 class="m-0 font-weight-bold text-primary">Category List</h6>
							</div>
							<div class="card-body">
								<table class="table table-bordered dataTable">
									<thead>
										<tr>
											<th>SL</th>
											<th>Contact Name</th>
											<th>Contact Email</th>
											<th>Contact Phone</th>
											<th>Website</th>
											<th>Message</th>
											<th>Edit</th>
											<th>Remove</th>
										</tr>
									</thead>
									<tbody>
										<tr
											v-for="(contact,index) in contactListShow"
											:key="index"
										>
											<td>{{++index}}</td>
											<td>{{contact.name}}</td>
											<td>{{contact.email}}</td>
											<td>{{contact.phone}}</td>
											<td>{{contact.website}}</td>
											<td>{{contact.message}}</td>
											<td>
												Edit
											</td>
											<td>Delete</td>
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
	name: "contact-list",
	components: {
		Header,
		Sidebar
	},
	data() {
		return {
			contactListShow: []
		};
	},
	methods: {
		getContactList() {
			axios.get("/api/app/contact-list").then(response => {
				this.contactListShow = response.data;
			});
		}
	},
	mounted() {
		this.getContactList();
	}
};
</script>