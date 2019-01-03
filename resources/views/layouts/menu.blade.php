<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
	<!-- begin container-fluid -->
	<div class="header_main_properties container-fluid">
		<!-- begin mobile sidebar expand / collapse button -->
		<div class="navbar-header">
			<!-- <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a> -->
			<a href="{{ url('/') }}" class="navbar-brand">
					<img src="{{ asset('imagenes/logoPlataformaCompleto.png') }}" class="center-block img-responsive" alt="" width="130px" height="46px">
			</a>
			<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- begin navbar-collapse -->
						<div class="collapse navbar-collapse pull-left" id="top-navbar">
								<ul class="nav navbar-nav">
										<li>
												<a href="/">
														Inicio
												</a>
										</li>
										<li class="dropdown">
												<a href="#" >
														Conoce más
												</a>
												
										</li>
										<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														Explorar Proyectos<b class="caret"></b>
												</a>
												<ul class="dropdown-menu" role="menu">
														
														<li><a href="#">Proyectos de Donaciones de Bienes</a></li>
														<li><a href="#">Proyectos Voluntariado</a></li>
												</ul>
										</li>
										<li class="dropdown">
												<a href="#">
														Crear Proyecto
												</a>
												
										</li>
										
								</ul>
						</div>

		<div class="collapse navbar-collapse pull-right" id="top-navbar">
				<ul class="nav navbar-nav">
					<li>
							<a href="{{ route('login') }}">
									<i class="fa fa-user fa-fw"></i> Ingresar
							</a>
					</li>
				</ul>
		</div>
	</div>
</div>
<!-- end #header -->

<!-- ////// -->
<!-- SIDEBAR -->
<!-- ////// -->

<div id="sidebar" class="sidebar toggled">
	<!-- begin sidebar scrollbar -->
	<div data-scrollbar="true" data-height="100%">
		<!-- begin sidebar user -->
		<ul class="nav">
			<li class="nav-profile">
				<div class="info">
					Contenido
				</div>
			</li>
		</ul>
		<!-- end sidebar user -->
		<!-- begin sidebar nav -->
		<ul class="nav">
			<li><a href="/">Inicio</a></li>
			<li class="has-sub">
				<a href="#">
						
						<span>Conoce más</span>
					</a>
				
			</li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<span>Explorar Proyectos</span>
					</a>
				<ul class="sub-menu">					
					<li><a href="#">Proyectos de Donaciones de Bienes</a></li>
					<li><a href="#">Proyectos Voluntariado</a></li>
					
				</ul>
			</li>
			<li class="has-sub">
				<a href="#">
						
						<span>Crear Proyecto</span>
					</a>
				
			</li>
			

		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->
