<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>@yield('title') | Proyectos</title>
		<meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
		<!-- Bootstrap 3.3.2 -->
		<link href="{{ asset("/AdminLTE/bootstrap/css/bootstrap.min.css") }}" rel="stylesheet" type="text/css" />
		<!-- Font Awesome Icons -->
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
		<!-- Ionicons -->
		<link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
		<!-- Datatables -->
		<link rel="stylesheet" href="{{ asset("/AdminLTE/plugins/datatables/dataTables.bootstrap.css")}}">
		<!-- Datepicker -->
		<link rel="stylesheet" href="{{ asset("/AdminLTE/plugins/datepicker/datepicker3.css") }}">
		<!-- Select2 -->
		<link rel="stylesheet" href="{{ asset("/AdminLTE/plugins/select2/select2.min.css") }}">
		<!-- fullCalendar -->
		<link rel="stylesheet" href="{{ asset("/AdminLTE/plugins/fullcalendar/fullcalendar.min.css") }}">
		<!-- Theme style -->
		<link href="{{ asset("/AdminLTE/dist/css/AdminLTE.min.css")}}" rel="stylesheet" type="text/css" />
		<!-- AdminLTE Skins. We have chosen the skin-blue for this starter
				page. However, you can choose any other skin. Make sure you
				apply the skin class to the body tag so the changes take effect.
		-->
		<link href="{{ asset("/AdminLTE/dist/css/skins/skin-green.css")}}" rel="stylesheet" type="text/css" />

		<!-- SCRIPTS -->
		<!-- REQUIRED JS SCRIPTS -->

		<!-- jQuery 2.1.3 -->
		<script src="{{ asset("/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js") }}"></script>
		
		<!-- Bootstrap 3.3.2 JS -->
		<script src="{{ asset("/AdminLTE/bootstrap/js/bootstrap.min.js") }}"></script>
		<!-- Datatables -->
		<script src="{{ asset("/AdminLTE/plugins/datatables/jquery.dataTables.min.js") }}"></script>
		<script src="{{ asset("/AdminLTE/plugins/datatables/dataTables.bootstrap.min.js") }}"></script>
		<!-- Datepicker -->
		<script src="{{ asset("/AdminLTE/plugins/datepicker/bootstrap-datepicker.js") }}"></script>
		<script src="{{ asset("/AdminLTE/plugins/datepicker/locales/bootstrap-datepicker.es.js") }}"></script>
		<!-- Select2 -->
		<script src="{{ asset("/AdminLTE/plugins/select2/select2.min.js") }}"></script>
		<script src="{{ asset("/AdminLTE/plugins/select2/i18n/es.js") }}"></script>
		<!-- AdminLTE App -->
		<script src="{{ asset("/AdminLTE/dist/js/app.min.js") }}"></script>

		<!-- fullCalendar -->
		<script src="{{ asset("/AdminLTE/plugins/fullcalendar/moment.js") }}"></script>
		<script src="{{ asset("/AdminLTE/plugins/fullcalendar/fullcalendar.min.js") }}"></script>
		<script src="{{ asset("/AdminLTE/plugins/fullcalendar/fullcalendar.locales.js") }}"></script>

		<!-- Optionally, you can add Slimscroll and FastClick plugins.
				Both of these plugins are recommended to enhance the
				user experience -->
		<script src="{{ asset("/AdminLTE/plugins/fastclick/fastclick.js") }}"></script>
		<script src="{{ asset("/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js") }}"></script>
		<script src="{{ asset("/js/site.js") }}"></script>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body class="skin-green fixed">
	<div class="wrapper">

		<!-- Main Header -->
		<header class="main-header">

			<!-- Logo -->
			<!-- <a href="/" class="logo"><b>CB</b>UdeC</a> -->
			<a href="/" class="logo"><img src="/cb_udec.png" height="40"></a>

			<!-- Header Navbar -->
			<nav class="navbar navbar-static-top" role="navigation">
				<!-- Sidebar toggle button-->
				<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
					<span class="sr-only">Hab. n</span>
				</a>
				<!-- Navbar Right Menu -->
				<div class="navbar-custom-menu">
					<ul class="nav navbar-nav">
						<!-- Notifications Menu -->
						<li class="dropdown notifications-menu">
							<!-- Menu toggle button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-bell-o"></i>
								<span class="label label-warning"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="header">Notificaciones</li>
								<li class="footer"><a href="#">Ver todo</a></li>
							</ul>
						</li>

						<!-- User Account Menu -->
						<li class="dropdown user user-menu">
							<!-- Menu Toggle Button -->
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<!-- The user image in the navbar-->
								<img src="{{ asset("user.png") }}" class="user-image" alt="User Image"/>
								<!-- hidden-xs hides the username on small devices so only the image appears. -->
								</a>
							<ul class="dropdown-menu">
								<!-- The user image in the menu -->
								<li class="user-header">
									<img src="{{ asset("user.png") }}" class="img-circle" alt="User Image" />
									<p>
										<small>CBUdeC</small>
									</p>
								</li>
								<!-- Menu Footer-->
								<li class="user-footer">
									<div class="pull-left">
										</div>
									<div class="pull-right">
										<form action="{{ url('/logout') }}" method="POST">
											{{ csrf_field() }}
											<button type="submit" class="btn btn-danger btn-flat">Cerrar sesión</button>
										</form>
									</div>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</nav>
		</header>
		<!-- Left side column. contains the logo and sidebar -->
		<aside class="main-sidebar">

			<!-- sidebar: style can be found in sidebar.less -->
			<section class="sidebar">

				<!-- Sidebar user panel (optional) -->
				<div class="user-panel">
					<div class="pull-left image">
						<img src="{{ asset("user.png") }}" class="img-circle" alt="User Image" />
					</div>
					<div class="pull-left info">
						<!-- Status -->
						<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
					</div>
				</div>

				<!-- Sidebar Menu -->
				<ul class="sidebar-menu">
					<li class="header">MÓDULOS</li>
					<!-- Optionally, you can add icons to the links -->
					<li><a href="/cliente"><span><i class="fa fa-user"></i> Clientes</span></a></li>
					<li><a href="/producto"><span><i class="fa fa-users"></i> Productos</span></a></li>
					<li><a href="/proyecto"><span><i class="fa fa-folder-open-o"></i> Proyectos</span></a></li>
					<!--
					<li class="treeview">
						<a href="#"><span>Multilevel</span> <i class="fa fa-angle-left pull-right"></i></a>
						<ul class="treeview-menu">
							<li><a href="#">Link in level 2</a></li>
							<li><a href="#">Link in level 2</a></li>
						</ul>
					</li>
					-->
				</ul><!-- /.sidebar-menu -->
			</section>
			<!-- /.sidebar -->
		</aside>

		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					@yield('title')
				</h1>
 			<!-- <ol class="breadcrumb">
					<li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
					<li class="active">Here</li>
				</ol> -->
			</section>

			<!-- Main content -->
			<section class="content">

				<!-- Errores -->
				@if (count($errors) > 0)
						<div class="alert alert-danger">
								<h4><i class="icon fa fa-ban"></i> ¡Oops! Hubieron errores de validación</h4>
								<ul>
										@foreach ($errors->all() as $error)
												<li>{{ $error }}</li>
										@endforeach
								</ul>
						</div>
				@endif

				<!-- Mensajes de sesión -->
				@if (Session::has('message'))
						<div class="alert alert-{{ Session::get('alert') }}">
							<h4>{{ Session::get('title') }}</h4>
							<p>{{ Session::get('message') }}</p>
						</div>
				@endif

				<!-- Your Page Content Here -->
				@yield('content')

			</section><!-- /.content -->
		</div><!-- /.content-wrapper -->

		<!-- Main Footer -->
		<footer class="main-footer">
			<!-- To the right -->
			<div class="pull-right hidden-xs">
				{{ date('d-m-Y') }}
			</div>
			<!-- Default to the left -->
			<strong>Copyright © 2016-2017 <a href="http://www.centrobiotecnologia.cl">GroupalNet</a>.</strong>
		</footer>

	</div><!-- ./wrapper -->
	</body>
</html>
