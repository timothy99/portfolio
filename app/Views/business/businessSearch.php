<?php	include_once APPPATH."Views/include/head.php"; // html처음 문장 부분 ?>

<body class="hold-transition sidebar-mini layout-fixed text-sm" onkeypress="page_search(event)">

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
								<h3 class="card-title">휴폐업 조회 - 하단 사업자번호는 테스트를 위한 기본값입니다</h3>
							</div><!-- /.card-header -->

							<div class="card-body">
								<div class="form-group row">
									<label for="license_num" class="col-sm-2 col-form-label">사업자번호</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" id="license_num" name="license_num" value="479-86-00423">
									</div>
								</div>
							</div><!-- /.card-body -->

							<div class="card-footer">
								<button type="button" class="btn btn-info float-right" onclick="searchBusinessNumber()">검색</button> 
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
	function searchBusinessNumber() {
		var license_num = document.getElementById("license_num").value;
		jQuery.ajax({
			url: "/business/businessInfo",
			type: "POST",
			dataType: "json",
			async: true,
			data: {license_num : license_num},
			success: function(proc_result) {
				var message = proc_result.message;
				var memo_text = proc_result.memo_text;
				Swal.fire({
					title: message,
					html : memo_text
				})
			}
		});
	}
</script>