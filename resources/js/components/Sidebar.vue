<template>

	<ul
		class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion"
		id="accordionSidebar"
	>

		<!-- Sidebar - Brand -->
		<a
			class="sidebar-brand d-flex align-items-center justify-content-center"
			href="index.html"
		>
			<div class="sidebar-brand-icon rotate-n-15">
				<i class="fas fa-laugh-wink"></i>
			</div>
			<div class="sidebar-brand-text mx-3">SB Admin
				<sup>2</sup>
			</div>
		</a>

		<!-- Divider -->
		<hr class="sidebar-divider my-0">

		<!-- Nav Item - Dashboard -->
		<li class="nav-item active">
			<a
				class="nav-link"
				href="index.html"
			>
				<i class="fas fa-fw fa-tachometer-alt"></i>
				<span>Dashboard</span>
			</a>
		</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Interface
		</div>

		<!-- Nav Item - Pages Collapse Menu -->
		<li class="nav-item">
			<a
				class="nav-link collapsed"
				href="#"
				data-toggle="collapse"
				data-target="#collapseTwo"
				aria-expanded="true"
				aria-controls="collapseTwo"
			>
				<i class="fas fa-fw fa-cog"></i>
				<span>Components</span>
			</a>
			<div
				id="collapseTwo"
				class="collapse"
				aria-labelledby="headingTwo"
				data-parent="#accordionSidebar"
			>
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Custom Components:</h6>
					<router-link
						class="collapse-item"
						to="/app/create"
					>Create</router-link>
					<router-link
						class="collapse-item"
						to="/app/category-list"
					>Category List</router-link>
				</div>
			</div>
		</li>

		<li class="nav-item">
			<a
				class="nav-link collapsed"
				href="#"
				data-toggle="collapse"
				data-target="#collapseTwo"
				aria-expanded="true"
				aria-controls="collapseTwo"
			>
				<i class="fas fa-fw fa-cog"></i>
				<span>Short Service</span>
			</a>
			<div
				id="collapseTwo"
				class="collapse"
				aria-labelledby="headingTwo"
				data-parent="#accordionSidebar"
			>
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Short Service Components:</h6>
					<router-link
						class="collapse-item"
						to="/app/add-service"
					>Create Service</router-link>
					<router-link
						class="collapse-item"
						to="/app/service-list"
					>Service List</router-link>

				</div>
			</div>
		</li>

		<li class="nav-item">
			<a
				class="nav-link collapsed"
				href="#"
				data-toggle="collapse"
				data-target="#collapseTwo"
				aria-expanded="true"
				aria-controls="collapseTwo"
			>
				<i class="fas fa-fw fa-cog"></i>
				<span>Service</span>
			</a>
			<div
				id="collapseTwo"
				class="collapse"
				aria-labelledby="headingTwo"
				data-parent="#accordionSidebar"
			>
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Service Components:</h6>
					<router-link
						class="collapse-item"
						to="/app/add-service-two"
					>Create Service</router-link>

				</div>
			</div>
		</li>

		<li class="nav-item">
			<a
				class="nav-link collapsed"
				href="#"
				data-toggle="collapse"
				data-target="#collapseTwo"
				aria-expanded="true"
				aria-controls="collapseTwo"
			>
				<i class="fas fa-fw fa-cog"></i>
				<span>Contact List</span>
			</a>
			<div
				id="collapseTwo"
				class="collapse"
				aria-labelledby="headingTwo"
				data-parent="#accordionSidebar"
			>
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">Contact Components:</h6>
					<router-link
						class="collapse-item"
						to="/app/contact-list"
					>Contact List</router-link>

				</div>
			</div>
		</li>

		<li class="nav-item">
			<a
				class="nav-link collapsed"
				href="#"
				data-toggle="collapse"
				data-target="#collapseTwo"
				aria-expanded="true"
				aria-controls="collapseTwo"
			>
				<i class="fas fa-fw fa-cog"></i>
				<span>About</span>
			</a>
			<div
				id="collapseTwo"
				class="collapse"
				aria-labelledby="headingTwo"
				data-parent="#accordionSidebar"
			>
				<div class="bg-white py-2 collapse-inner rounded">
					<h6 class="collapse-header">About Components:</h6>
					<router-link
						class="collapse-item"
						to="/app/about-list"
					>About List</router-link>

				</div>
			</div>
		</li>
	</ul>

</template>

<script>
export default {
	name: "Sidebar"
};
</script>
