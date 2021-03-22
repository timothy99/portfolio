<?php
	$request = service("request");
	$segments = $request->uri->getSegments();
	isset($segments[0]) ? $segments[0] : "admin";
	isset($segments[1]) ? $segments[1] : "adminList";
	isset($segments[2]) ? $segments[2] : "notice";
?>

	<aside class="main-sidebar sidebar-dark-primary elevation-4"><!-- Main Sidebar Container -->
		<a href="/" class="brand-link"><!-- Brand Logo -->
			<img src="/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
			<span class="brand-text font-weight-light">포트폴리오</span>
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
					<li class="nav-item has-treeview <?php if($segments[0] == "business") echo "menu-open"; ?>">
						<a href="#" class="nav-link <?php if($segments[0] == "business") echo "active"; ?>">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>사업자<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/business/businessSearch" class="nav-link <?php if($segments[0] == "business" && $segments[1] == "businessSearch") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>휴폐업조회</p>
								</a>
							</li>
						</ul>
					</li>
				</ul>
				<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
					<li class="nav-item has-treeview <?php if($segments[0] == "messenger") echo "menu-open"; ?>">
						<a href="#" class="nav-link <?php if($segments[0] == "messenger") echo "active"; ?>">
							<i class="nav-icon fas fa-chart-pie"></i>
							<p>메신저<i class="right fas fa-angle-left"></i></p>
						</a>
						<ul class="nav nav-treeview">
							<li class="nav-item">
								<a href="/messenger/slack" class="nav-link <?php if($segments[0] == "messenger" && $segments[1] == "slack") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>슬랙</p>
								</a>
							</li>
							<li class="nav-item">
								<a href="/messenger/telegram" class="nav-link <?php if($segments[0] == "messenger" && $segments[1] == "telegram") echo "active"; ?>">
									<i class="far fa-circle nav-icon"></i>
									<p>텔레그램</p>
								</a>
							</li>
						</ul>
					</li>
				</ul>
			</nav><!-- /.sidebar-menu -->
		</div><!-- /.sidebar -->
	</aside>
