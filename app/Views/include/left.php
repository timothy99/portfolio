	<aside class="main-sidebar sidebar-dark-primary elevation-4"><!-- Main Sidebar Container -->
		<a href="/" class="brand-link"><!-- Brand Logo -->
			<img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<span class="brand-text font-weight-light">관리자</span>
		</a>

		<div class="sidebar"><!-- Sidebar -->
			<div class="user-panel mt-3 pb-3 mb-3 d-flex"><!-- Sidebar user panel (optional) -->
				<div class="image">
					<img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
				</div>
				<div class="info">
					<a href="/user/logout" class="d-block">6미리</a>
				</div>
			</div>

			<nav class="mt-2"> <!-- Sidebar Menu -->
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
					<li class="nav-item has-treeview <?php if($segments[0] == "dashboard") echo "menu-open"; ?>">
						<a href="#" class="nav-link <?php if($segments[0] == "dashboard") echo "active"; ?>">
							<i class="nav-icon fas fa-tachometer-alt"></i>
							<p>대시보드<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/dashboard/dashboardList" class="nav-link <?php if($segments[0] == "dashboard" && $segments[1] == "dashboardList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>대시보드</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item has-treeview <?php if($segments[0] == "company") echo "menu-open"; ?>">
						<a href="/company/demandList" class="nav-link <?php if($segments[0] == "company") echo "active"; ?>">
							<i class="nav-icon fas fa-th"></i>
							<p>기업정보<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/company/demandList" class="nav-link <?php if($segments[0] == "company" && ($segments[1] == "demandList" || $segments[1] == "demandView")) echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>수요기업회원</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/company/supplyList" class="nav-link <?php if($segments[0] == "company" && ($segments[1] == "supplyList" || $segments[1] == "supplyView")) echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>공급기업회원</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/company/businessSearch" class="nav-link <?php if($segments[0] == "company" && $segments[1] == "businessSearch") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>휴폐업조회</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/company/smsList" class="nav-link <?php if($segments[0] == "company" && $segments[1] == "smsList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>SMS내역</p>
								</a>
							</li>

						</ul>
					</li>

					<li class="nav-item has-treeview <?php if($segments[0] == "service") echo "menu-open"; ?>">
						<a href="#" class="nav-link <?php if($segments[0] == "service") echo "active"; ?>">
							<i class="nav-icon fas fa-th"></i>
							<p>서비스정보<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/service/serviceList" class="nav-link <?php if($segments[0] == "service" && $segments[1] == "serviceList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>서비스목록</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/service/requestList" class="nav-link <?php if($segments[0] == "service" && $segments[1] == "requestList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>서비스 요청목록</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/service/payList/all" class="nav-link <?php if($segments[0] == "service" && $segments[1] == "payList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>서비스 결제목록(oder_pay)</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/service/orderList" class="nav-link <?php if($segments[0] == "service" && $segments[1] == "orderList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>서비스 결제목록(oder)</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item has-treeview <?php if($segments[0] == "board") echo "menu-open"; ?>">
						<a href="#" class="nav-link <?php if($segments[0] == "board") echo "active"; ?>">
							<i class="nav-icon fas fa-th"></i>
							<p>게시판<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/board/boardList/notice" class="nav-link <?php if($segments[0] == "board" && $segments[2] == "notice") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>공지사항</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/board/boardList/qna" class="nav-link <?php if($segments[0] == "board" && $segments[2] == "qna") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>1:1문의사항</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/board/boardList/faq" class="nav-link <?php if($segments[0] == "board" && $segments[2] == "faq") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>자주하는 질문</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/board/boardList/material" class="nav-link <?php if($segments[0] == "board" && $segments[2] == "material") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>자료실</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/board/boardList/service_qna" class="nav-link <?php if($segments[0] == "board" && $segments[2] == "service_qna") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>시스템개선요청</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/board/boardList/bed_report" class="nav-link <?php if($segments[0] == "board" && $segments[2] == "bed_report") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>부정행위신고</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/board/boardList/plan" class="nav-link <?php if($segments[0] == "board" && $segments[2] == "plan") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>공고게시판</p>
								</a>
							</li>
						</ul>
					</li>
<?php	if($level >= 9) { ?>
					<li class="nav-item has-treeview <?php if($segments[0] == "manager") echo "menu-open"; ?>">
						<a href="/manager/smsList" class="nav-link <?php if($segments[0] == "manager") echo "active"; ?>">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>관리자<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/manager/codeList" class="nav-link <?php if($segments[0] == "manager" && ($segments[1] == "codeList" || $segments[1] == "codeWrite")) echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>코드 관리</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/manager/managerList" class="nav-link <?php if($segments[0] == "manager" && ($segments[1] == "managerList" || $segments[1] == "managerWrite")) echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>관리자 관리</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/manager/ipList" class="nav-link <?php if($segments[0] == "manager" && ($segments[1] == "ipList" || $segments[1] == "ipWrite")) echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>IP 관리</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/manager/urlList" class="nav-link <?php if($segments[0] == "manager" && ($segments[1] == "urlList" || $segments[1] == "urlwrite")) echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>URL 관리</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/manager/tehtList" class="nav-link <?php if($segments[0] == "manager" && $segments[1] == "tehtList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>휴폐업 추가조회</p>
								</a>
							</li>
						</ul>
					</li>
<?php	} ?>
					<li class="nav-item has-treeview <?php if($segments[0] == "member") echo "menu-open"; ?>">
						<a href="/member/specialtyList" class="nav-link <?php if($segments[0] == "member") echo "active"; ?>">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>회원관리<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/member/specialtyList" class="nav-link <?php if($segments[0] == "member" && ($segments[1] == "specialtyList" || $segments[1] == "specialtyWrite")) echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>운영기관회원</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/member/operationList" class="nav-link <?php if($segments[0] == "member" && ($segments[1] == "operationList" || $segments[1] == "operationWrite")) echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>전문기관회원</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item has-treeview <?php if($segments[0] == "edi") echo "menu-open"; ?>">
						<a href="/edi/infoList" class="nav-link <?php if($segments[0] == "edi") echo "active"; ?>">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>신한EDI<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/edi/prjList" class="nav-link <?php if($segments[0] == "edi" && $segments[1] == "prjList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>예산정보</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/edi/infoList" class="nav-link <?php if($segments[0] == "edi" && $segments[1] == "infoList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>발급정보</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/edi/recList" class="nav-link <?php if($segments[0] == "edi" && $segments[1] == "recList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>승인정보</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/edi/orgnList" class="nav-link <?php if($segments[0] == "edi" && $segments[1] == "orgnList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>매입정보</p>
								</a>
							</li>
						</ul>
					</li>

					<li class="nav-item has-treeview <?php if($segments[0] == "zero") echo "menu-open"; ?>">
						<a href="/zero/infoList" class="nav-link <?php if($segments[0] == "zero") echo "active"; ?>">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>제로페이 EDI<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/zero/infoList" class="nav-link <?php if($segments[0] == "zero" && $segments[1] == "infoList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>정산정보</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/zero/voucherList" class="nav-link <?php if($segments[0] == "zero" && $segments[1] == "voucherList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>예산정보</p>
								</a>
							</li>
						</ul>
					</li>
					<li class="nav-item has-treeview <?php if($segments[0] == "ocr") echo "menu-open"; ?>">
						<a href="/ocr/ocrList" class="nav-link <?php if($segments[0] == "ocr") echo "active"; ?>">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>OCR<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/ocr/ocrList" class="nav-link <?php if($segments[0] == "ocr" && $segments[1] == "ocrList") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>OCR 연동 조회 리포트</p>
								</a>
							</li>
							
						</ul>
					</li>

				</ul>
			</nav><!-- /.sidebar-menu -->
		</div><!-- /.sidebar -->
	</aside>
