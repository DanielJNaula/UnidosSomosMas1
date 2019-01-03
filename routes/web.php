<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/ 

/*Route::get('/', function () {
    return view('welcome');
});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/','PaginasController@inicio');

Route::get('/resutados-busqueda','PaginasController@resultadosBusqueda');

Route::get('/detalle-campaña-bienes','PaginasController@detalleCampañaBienes');

Route::get('/detalle-campaña-voluntariado','PaginasController@detalleCampañaVoluntariado');

Route::get('/detalle-campaña-bienes/donar','PaginasController@visualizarFomularioDonarCampañaBienes');

Route::get('/detalle-campaña-voluntariado/donar','PaginasController@visualizarFomularioVoluntariadoCampaña');

Route::get('/recomendaciones-campañas-bienes-voluntariado','PaginasController@recomendacionesCampañas');

Route::get('/visualizar-mis-donaciones','PaginasController@visualizarMisDonaciones');

Route::get('/visualizar-mis-comentarios','PaginasController@visualizarMisComentarios');

Route::get('/visualizar-mis-campañas','PaginasController@visualizarMisCampañas');

Route::get('/visualizar-mis-donaciones/detalle-donacion','PaginasController@visualizarDetalleDonacion');

Route::get('/visualizar-mis-donaciones/calificar-campaña','PaginasController@calificarCampaña');

Route::get('/mis-campañas/visualizar-donaciones','PaginasController@vizualizarDonadoresCampaña');

Route::get('/mis-campañas/visualizar-voluntarios','PaginasController@vizualizarVoluntariosCampaña');

Route::get('/mis-campañas/visualizar-campaña','PaginasController@vizualizarCampañaBeneficiario');

Route::get('/mis-campañas/visualizar-campaña-voluntariado','PaginasController@vizualizarCampañaVoluntariadoBeneficiario');

Route::get('/mis-campañas/crear-campaña-donacion-bienes','PaginasController@crearCampañaBienes');

Route::get('/mis-campañas/crear-campaña-voluntariado','PaginasController@crearCampañaVoluntariado');

Route::get('/mis-campañas/editar-campaña-donacion-bienes','PaginasController@editarCampañabienes');

Route::get('/mis-campañas/editar-campaña-voluntariado','PaginasController@editarCampañaVoluntariado');

Route::get('/mis-campañas/visualizar-donaciones/calificar-donador','PaginasController@calificarDonador');

Route::get('/mis-campañas/visualizar-voluntarios/calificar-voluntario','PaginasController@calificarVoluntario');

Route::get('/mis-campañas/visualizar-donaciones/visualizar-detalle-donacion','PaginasController@visualizarDetalleDonacionBeneficiario');

Route::get('/mis-campañas/visualizar-voluntarios/visualizar-detalle-voluntariado','PaginasController@visualizarDetalleVoluntariadoBeneficiario');

Route::get('/mis-campañas/visualizar-donaciones/editar-estado-donacion','PaginasController@editarEstadoDonacion');

Route::get('/mis-campañas/visualizar-voluntarios/editar-estado-voluntariado','PaginasController@editarEstadoVoluntariado');


Route::group(['prefix' => 'admin','middleware'=>['auth','admin'] ], function(){

     Route::get('/home','PaginasController@homeAdministrador');

     Route::get('/campañas-publicadas','PaginasController@campañasPublicadas');

     Route::get('/campañas-por-publicar','PaginasController@campañasPorPublicar');

     Route::get('/usuarios-unidos-somos-mas','PaginasController@usuariosUnidosSomosMas');

     Route::get('/email-usuario','PaginasController@emailUsuariosUnidosSomosMas');

     Route::get('/visualizar-perfil-usuario','PaginasController@visualizarPerfilUsuario');

     Route::get('/email-usuario-creador-campaña-por-publicar','PaginasController@emailUsuarioCampañaPorPublicar');

     Route::get('/visualizar-detalle-campaña-bienes-por-publicar','PaginasController@visualizarDetalleCampañaBienesPorPublicar');

     Route::get('/visualizar-detalle-campaña-voluntariado-por-publicar','PaginasController@visualizarDetalleCampañaVoluntariadoPorPublicar');

     Route::get('/actualizar-estado-campaña','PaginasController@actualizarEstadoCampaña');
});

Route::group(['prefix' => 'donador-beneficiario','middleware'=>['auth','donador-beneficiario'] ], function(){

     Route::get('/home','PaginasController@homeDonadorBeneficiario');
});



/*OPCIONES USUARIOS*/
Route::get('/mi-perfil','PaginasController@visualizarMiPerfil');

Route::get('/editar-mi-perfil','PaginasController@editarMiPerfil');
//Route::get('/detalleCampaña','PaginasController@detalleCampaña');

Route::get('/2', function () {
	return view('cn-pages.form-wysiwyg');
	//return redirect('pages.dashboard-v2');
});

Route::get('/1', function () {
	return view('cn-pages.form-summernote');
	//return redirect('pages.dashboard-v2');
});




