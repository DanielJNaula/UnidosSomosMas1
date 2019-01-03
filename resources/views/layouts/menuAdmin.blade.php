<!-- begin #header -->
<div id="header" class="header navbar navbar-default navbar-fixed-top">
	<!-- begin container-fluid -->
	<div class="header_main_properties container-fluid">
		<!-- begin mobile sidebar expand / collapse button -->
		<div class="navbar-header">
			<!-- <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> Color Admin</a> -->
			<a href="{{ url('/admin/home') }}" class="navbar-brand">
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
												<a href="/admin/home">
														Inicio
												</a>
										</li>
										
										<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														Campañas<b class="caret"></b>
												</a>
												<ul class="dropdown-menu" role="menu">
														
														<li><a href="/admin/campañas-publicadas">Campañas publicadas</a></li>
														<li><a href="/admin/campañas-por-publicar">Campañas por publicar</a></li>
												</ul>
										</li>
										<li class="dropdown">
												<a href="/admin/usuarios-unidos-somos-mas">
														Usuarios
												</a>
												
										</li>
										
										
								</ul>
						</div>

		<div class="collapse navbar-collapse pull-right" id="top-navbar">
				<ul class="nav navbar-nav">
					
					<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown">
														<i class="fa fa-user fa-fw"></i>@auth {{ Auth::user()->nombres }} @endauth<b class="caret"></b>
												</a>
												<ul class="dropdown-menu" role="menu">
														
														
														<li>
															<a class="dropdown-item" href="{{ route('logout') }}"
						                                       onclick="event.preventDefault();
						                                                     document.getElementById('logout-form').submit();">
						                                        {{ __('Cerrar Sesión') }}
						                                    </a>

						                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						                                        @csrf
						                                    </form>
														</li>
												</ul>
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
				<a href="/visualizar-mis-campañas">Mis Campañas</a>
			</li>

			<li class="has-sub">
				<a href="/visualizar-mis-comentarios">Mis Comentarios</a>
			</li>
			<li class="has-sub">
				<a href="/visualizar-mis-donaciones">Mis Donaciones</a>
			</li>
			<li class="has-sub">
				<a href="javascript:;">
						<b class="caret pull-right"></b>
						<span>Daniel Naula</span>
					</a>
				<ul class="sub-menu">					
					<li><a href="/mi-perfil">Mi perfil</a></li>
					<li><a href="/editar-mi-perfil">Editar perfil</a></li>
					<li><a href="/">Cerrar sesión</a></li>
					
				</ul>
			</li>
			

		</ul>
		<!-- end sidebar nav -->
	</div>
	<!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->
