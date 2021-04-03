<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?= $this->include('sidebar') ?>
<!-- PAGE CONTAINER-->
<div class="page-container">
	<?= $this->include('header') ?>

	<!-- MAIN CONTENT-->
	<div class="main-content">
		<div class="section__content section__content--p30">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-4">
						<h2 class="title-1 m-b-25">Promotions code</h2>
					</div>
				</div>
				<div class="row">
					<div class="col-md-8">
						<form class="form-header" action="/promotion" method="POST" style="margin-bottom: 25px;">
							<input class="au-input au-input--xl" type="text" name="phone" placeholder="Phone number" />
							<button class="au-btn--submit" type="submit">
								<i class="zmdi zmdi-search"></i>
							</button>
						</form>
					</div>
					<div class="col-md-4" style="margin-bottom: 10px;">
						<a href="/promotion/add" class="au-btn au-btn-icon au-btn--blue" style="float: right;">
							<i class="zmdi zmdi-plus"></i>add item</a>
					</div>
				</div>
				<div class="row">
					<div class="col-lg">
						<div class="table-responsive table--no-card m-b-40">
							<table class="table table-borderless table-striped table-earning">
								<thead>
									<tr>
										<th>date</th>
										<th>Promotion ID</th>
										<th>Phone</th>
										<th>Promotion code</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($list as $item) : ?>
										<tr>
											<td><?php echo $item['created_at'] ?></td>
											<td><?php echo $item['promotion_id'] ?></td>
											<td><?php echo $item['phone'] ?></td>
											<td><?php echo $item['promotion_code'] ?></td>
										</tr>

									<?php endforeach ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END MAIN CONTENT-->
	<!-- END PAGE CONTAINER-->
</div>



<?= $this->endSection() ?>