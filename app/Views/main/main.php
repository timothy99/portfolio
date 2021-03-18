<?php	include_once APPPATH."Views/include/head.php"; // html처음 문장 부분 ?>

<body class="hold-transition sidebar-mini layout-fixed text-sm">

<div class="wrapper">

<?php	include_once APPPATH."Views/include/header.php"; // 페이지 상단 ?>
<?php	include_once APPPATH."Views/include/left.php"; // 좌측 메뉴 ?>

	<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
		<div class="content-header"><!-- Content Header (Page header) -->
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0 text-dark">Dashboard</h1>
					</div><!-- /.col -->
					<div class="col-sm-6">
						<ol class="breadcrumb float-sm-right">
							<li class="breadcrumb-item"><a href="#">Home</a></li>
							<li class="breadcrumb-item active">Dashboard v1</li>
						</ol>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</div>
		<!-- /.content-header -->

		<!-- Main content -->
		<section class="content">
			<div class="container-fluid">
				<div class="row"><!-- Small boxes (Stat box) -->

					<div class="col-lg-3 col-6">
						<div class="small-box bg-info"><!-- small box -->
							<div class="inner">
								<h3>150</h3>
								<p>New Orders</p>
							</div>
							<div class="icon">
								<i class="ion ion-bag"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-3 col-6">
						<div class="small-box bg-success">
							<div class="inner">
								<h3>53%</h3>
								<p>Bounce Rate</p>
							</div>
							<div class="icon">
								<i class="ion ion-stats-bars"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-3 col-6">
						<div class="small-box bg-warning">
							<div class="inner">
								<h3>44</h3>
								<p>User Registrations</p>
							</div>
							<div class="icon">
								<i class="ion ion-person-add"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div>

					<div class="col-lg-3 col-6">
						<div class="small-box bg-danger">
							<div class="inner">
								<h3>65</h3>
								<p>Unique Visitors</p>
							</div>
							<div class="icon">
								<i class="ion ion-pie-graph"></i>
							</div>
							<a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
						</div>
					</div><!-- ./col -->
				</div><!-- /.row -->
			</div><!-- /.container-fluid -->
		</section><!-- /.content -->
	</div><!-- /.content-wrapper -->

<?php	include_once APPPATH."Views/include/footer.php"; // 푸터 ?>
</body>
</html>

<?php	include_once APPPATH."Views/include/script.php"; // 스크립트 모음 ?>