<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://vladparole.info
 * @since      1.0.0
 *
 * @package    Elementor_Vpelements_Core
 * @subpackage Elementor_Vpelements_Core/admin/partials
 */
?>
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="https://vladparole.digitalnomadph.com/wp-content/uploads/elementor/thumbs/VP-logo-pm1b2ecka9nn07j3vg7zse70eiaw41mnk6wyqnbh6c.png"  alt="" width="60" height="40" class="d-inline-block align-text-top">
      VPElements Plugin <small> v1.0.0 </small>
    </a>
	<ul class="nav nav-tabs">
		<li class="nav-item">
			<a class="nav-link active" aria-current="page" href="#">Active</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item">
			<a class="nav-link" href="#">Link</a>
		</li>
		<li class="nav-item">
			<a class="nav-link disabled">Disabled</a>
		</li>
	</ul>
  </div>
</nav>


<div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Well done!</h4>
  <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
  <hr>
  <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
</div>
<div class="d-flex align-items-start">
  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">General</button>
    <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Widgets</button>
    <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Global</button>
    <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Integration</button>
  </div>
  <div class="tab-content px-5" id="v-pills-tabContent">
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
		<div class="container">
			<div class="row ">
				<div class="col col-4">
				<div class="card" style="width: 24rem;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					</div>
				</div>
				<div class="col col-4">
				<div class="card" style="width: 24rem;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					</div>
				</div>
				<div class="col col-4">
				<div class="card" style="width: 24rem;">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row ">
				<div class="col col-8">
				<div class="card">
					<div class="card-header">
						Featured
					</div>
					<div class="card-body">
						<h5 class="card-title">Special title treatment</h5>
						<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					</div>
				</div>
				<div class="col col-4">
				<div class="card">
					<img src="..." class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
						<a href="#" class="btn btn-primary">Go somewhere</a>
					</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
		<div class="container"><h3 class="pb-5"> Available Widgets</h3></div>
		<div class="container">
			<div class="row gx-5 mb-3">
				<div class="col-3">
					<div class="bg-light p-3 position-relative badge text-dark">VPElements Multi Header
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">New</span>
					</div>
				</div>
				<div class="col-3">
					<div class="bg-light p-3 position-relative badge text-dark">VPElements Icon List
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">Dev</span>
					</div>
				</div>
				<div class="col-3">
					<div class="bg-light p-3 position-relative badge text-dark">VPElements Accordion
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">Dev</span>
					</div>
				</div>
				<div class="col-3">
					<div class="bg-light p-3 position-relative badge text-dark">VPElements Image
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning">Dev</span>
					</div>
				</div>
			</div>

			<div class="row gx-4 mb-3">
			<div class="col-3">
					<div class="bg-light p-3 position-relative badge text-dark">VPElements Post
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">No</span>
					</div>
				</div>
				<div class="col-3">
					<div class="bg-light p-3 position-relative badge text-dark">VPElements Post Category
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">No</span>
					</div>
				</div>
				<div class="col-3">
					<div class="bg-light p-3 position-relative badge text-dark">VPElements XXX
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary"></span>
					</div>
				</div>
				<div class="col-3">
					<div class="bg-light p-3 position-relative badge text-dark">VPElements YYY
						<span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary"></span>
					</div>
				</div>
			</div>
		</div>

		
		
	</div>
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">Global</div>
    <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">Inegration</div>
  </div>
</div>
 <!-- This file should primarily consist of HTML with a little bit of PHP. -->
	