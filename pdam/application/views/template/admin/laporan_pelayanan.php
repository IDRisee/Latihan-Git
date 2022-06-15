

	<div class="container-fluid" id="container">
		<div class="row">
			<div class="col-lg-10">
				<div class="card-mb-12">
					<div class="card-header">
						<h1 class="h3">Laporan Pelayanan Masyarakat</h1>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-lg-12">
								<div class="card shadow mb-4">
									<div class="panel panel-default">
										<div class="panel-heading">
											<h3 class="panel-title">Kotak Masuk <?php echo $name ?></h3>
										</div>
										<div class="panel-body">
											<ul id="isi_chat"></ul>
										</div>
										<div class="panel footer">

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="card-mb-12">
					<div class="card-body">
						<form class="chat_boy" id="form_penilaian" method="POST">
							<div class="col-md-2">
								<input value="<?php echo $session['name'] ?>" type="text" id="user" class="form-control" disabled>
								<input type="hidden" name="userid" id="userid" value="<?php echo $session['id_user'] ?>" class="form-control">
								<input type="hidden" name="user_target" id="user_target" value="<?php echo $userid ?>" class="form-control">
							</div>
							<div class="col-sm-8">
								<input placeholder="pesan" type="text" id="pesan" class="form-control">
							</div>
							<div class="col-sm-2">
								<input type="button" value="kirim" id="kirim" class="btn btn-md btn-warning">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<div class="container">
		<h1 class="h3 mb-2 text-gray-800">Laporan Pelayanan</h1>
		<div class="row">

			<div class="col-md-9 m-0 chat-main">
				<div class="card-mb-12">
					<div class="row">
						<div class="col-md-12 chat-header bg-white rounded-top p-2">
							<div class="row">
								<div class="col-md-3 image">
									<img src="<?= base_url('assets/img/profile/default.jpg') ?>" class="rounded">
								</div>
								<div class="col-md-5 user-detail pt-2">
									<h6 class="pt-1"><?php echo $name ?></h6>
									<i class="fa fa-circle active ml-1" aria-hidden="true"></i>
								</div>
							</div>
						</div>
						<div class="col-md-12  chat-content p-0 bg-white border border-top-0">
							<ul class="pl-3 pr-3 pt-1 mb-1">
								<li class="p-2 mb-1 rounded" id="isi_chat"></li>
							</ul>
							<h6 class="text-center mb-2 sender font-italic"><?php echo $session['name'] ?></h6>
							<div class="msg-box p-2">
								<div class="row">
									<form class="col-lg-12" id="form_penilaian" method="POST">
										<div class="col-sm-9">
											<input type="hidden" name="user" id="user" value="<?php echo $session['no_kontrol'] ?>" class="form-control">

											<input type="hidden" name="target" id="target" value="<?php echo $userid ?>" class="form-control">

											<input type="text" class="form-control" placeholder="message ..." id="pesan" name="pesan">

										</div>
										<div class="col-sm-3 ">
											<input type="button" value="kirim" id="kirim" class="btn btn-md btn-primary">
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
	</div>
