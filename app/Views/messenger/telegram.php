<?php	include_once APPPATH."Views/include/head.php"; // html처음 문장 부분 ?>

<body class="hold-transition sidebar-mini layout-fixed text-sm">

<form id="frm" name="frm" class="form-horizontal">
<input type="hidden" id="page" name="page">

<div class="wrapper">

<?php	include_once APPPATH."Views/include/header.php"; // 페이지 상단 ?>
<?php	include_once APPPATH."Views/include/left.php"; // 좌측 메뉴 ?>

	<div class="content-wrapper"><!-- Content Wrapper. Contains page content -->
		<section class="content"><!-- Main content -->
			<div class="container-fluid">
				<div class="iro_row">
					<div class="col-12">
						<div class="card card-info">
							<div class="card-header">
								<h3 class="card-title">텔레그램 보내기</h3>
							</div><!-- /.card-header -->

							<div class="card-body">
								<div class="form-group row">
									<label for="chat_id" class="col-sm-2 col-form-label">chat_id</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="chat_id" name="chat_id">
									</div>
								</div>
								<div class="form-group row">
									<label for="message" class="col-sm-2 col-form-label">내용</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="message" name="message">
									</div>
								</div>
							</div><!-- /.card-body -->

							<div class="card-footer">
								<button type="button" class="btn btn-info float-right" onclick="send_slack()">보내기</button> 
								<a href="/company/businessSearch">
									<button type="button" class="btn btn-default float-right">초기화</button>
								</a>
							</div><!-- /.card-footer -->

						</div><!-- /.card -->
					</div>
				</div>

			</div><!-- /.container-fluid -->
		</section><!-- /.content -->


	</div><!-- /.content-wrapper -->

<?php	include_once APPPATH."Views/include/footer.php"; // 푸터 ?>

</form>
</body>
</html>

<?php	include_once APPPATH."Views/include/script.php"; // 스크립트 모음 ?>

<script>
	// 휴폐업조회
	function send_slack() {
		jQuery.ajax({
			url: "/messenger/telegramSend",
			type: "POST",
			dataType: "json",
			async: true,
			data: jQuery("#frm").serialize(),
			success: function(proc_result) {
				var message = proc_result.message;
				var result = proc_result.result;
			}
		});
	}
</script>