<template>
	<div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<div class="card">
						<div class="card-header">
							<h6>Admin Login</h6>
						</div>
						<div class="card-body">
							<form
								action=""
								@submit.prevent="login"
							>
								<div class="form-group">
									<label for="email">Name</label>
									<input
										type="text"
										name="email"
										placeholder="email"
										class="form-control"
										v-model="formData.email"
									>
								</div>
								<div class="form-group">
									<label for="password">Password</label>
									<input
										class="form-control"
										type="password"
										name="password"
										v-model="formData.password"
									>
								</div>
								<div class="form-group">
									<button
										class="btn btn-primary"
										type="submit"
									>Login</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</template>
<script>
export default {
	data() {
		return {
			formData: {
				email: "",
				password: "",
				device_name: "browser"
			},
			errors: {}
		};
	},
	methods: {
		login() {
			axios
				.post("/api/app/login", this.formData)
				.then(response => {
					localStorage.setItem("token", response.data);
					this.$router.push("/app");
				})
				.catch(errors => {
					this.errors = errors.response.data.errors;
				});
		}
	}
};
</script>
