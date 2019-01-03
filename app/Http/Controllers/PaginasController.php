<?php 

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use DB;
use Illuminate\Support\Collection as Collection;
use App\CnCifrasNacionales;
use App\CnTipoCifraNacional;
use FarhanWazir\GoogleMaps\GMaps;

class PaginasController extends Controller
{
    
    /*administrador*/
    public function homeAdministrador(){
        
      return view('admin.home');

    }

    public function campañasPublicadas(){
        
      return view('admin.visualizarCampañasPublicadas');

    }

    public function campañasPorPublicar(){
        
      return view('admin.visualizarCampañasPorPublicar');

    }

    public function usuariosUnidosSomosMas(){
        
      return view('admin.visualizarUsuarios');

    }

    public function emailUsuariosUnidosSomosMas(){
        
      return view('admin.emailUsuario');

    }

    public function visualizarPerfilUsuario(){
        
      return view('admin.visualizarPerfilUsuario');

    }

    public function emailUsuarioCampañaPorPublicar(){
        
      return view('admin.emailUsuarioCampañaPorPublicar');

    }

    public function visualizarDetalleCampañaBienesPorPublicar(){
        
      return view('admin.visualizarDetalleCampañaBienesPorPublicar');

    }

    public function visualizarDetalleCampañaVoluntariadoPorPublicar(){
        
      return view('admin.visualizarDetalleCampañaVoluntariadoPorPublicar');

    }

    public function actualizarEstadoCampaña(){
        
      return view('admin.editarEstadoCampaña');

    }
    /*fin administrador*/

    /*administrador*/
    public function homeDonadorBeneficiario(){
        
      return view('opciones-usuario.home');

    }
    /*fin administrador*/
    public function editarMiPerfil(){
        
      return view('opciones-usuario.editarPerfil');

    }
    
    public function visualizarMiPerfil(){
        
      return view('opciones-usuario.visualizarPerfil');

    }

    public function editarEstadoVoluntariado(){
        
      return view('beneficiario.editarEstadoVoluntariado');

    }

    public function calificarVoluntario(){
        
      return view('beneficiario.calificarVoluntario');

    }

    public function visualizarDetalleVoluntariadoBeneficiario(){
        
      return view('beneficiario.visualizarDetalleVoluntariado');

    }

    public function vizualizarVoluntariosCampaña(){
        
      return view('beneficiario.visualizarVoluntariosCampaña');

    }

    public function editarEstadoDonacion(){
        
      return view('beneficiario.editarEstadoDonacion');

    }

    public function visualizarDetalleDonacionBeneficiario(){
        $config['center'] = '-0.269088, -78.566107';
        $config['zoom'] = 'auto';
        $config['map_height'] = '400px';
        $config['directions'] = TRUE;
        $config['directionsStart'] = '-0.269088, -78.566107';
        $config['directionsEnd'] = '-0.273648, -78.564358';
        $config['directionsDivID'] = 'directionsDiv';

        $gmap = new GMaps();
        $gmap->initialize($config);
        $map = $gmap->create_map();
        
      return view('beneficiario.visualizarDetalleDonacion')->with(['map'=>$map]);

    }

    public function calificarDonador(){
        
      return view('beneficiario.calificarDonador');

    }

    public function editarCampañaVoluntariado(){
        
      return view('beneficiario.editarCampañaVoluntariado');

    }

    public function editarCampañabienes(){
        
      return view('beneficiario.editarCampañaDonacionBienes');

    }

    public function crearCampañaVoluntariado(){
        
      return view('beneficiario.crearCampañaVoluntariado');

    }

    public function crearCampañaBienes(){
        
      return view('beneficiario.crearCampañaDonacionBienes');

    }
    

    public function vizualizarCampañaVoluntariadoBeneficiario(){
        
      return view('beneficiario.detalleCampañaVoluntariado');

    }
    
    public function vizualizarCampañaBeneficiario(){
        
      return view('beneficiario.detalleCampañaBienes');

    }

    public function vizualizarDonadoresCampaña(){
        
      return view('beneficiario.visualizarDonadoresCampaña');

    }

    public function calificarCampaña(){
        
      return view('donador.calificarCampaña');

    }

    public function visualizarDetalleDonacion(){

        $config['center'] = '-0.269088, -78.566107';
        $config['zoom'] = 'auto';
        $config['map_height'] = '400px';

        $gmap = new GMaps();
        $gmap->initialize($config);
     
        $marker['position'] = '-0.276823, -78.583350';
        $marker['infowindow_content'] = 'Buenaventura calle L14 lote 15';



        $gmap->add_marker($marker);
        $map = $gmap->create_map();
        
      return view('donador.visualizarDetalleDonacion')->with(['map'=>$map]);

    }

    public function visualizarMisCampañas(){
        
      return view('beneficiario.visualizarMisCampañas');

    }

    public function visualizarMisComentarios(){
        
      return view('donador.visualizarMisComentarios');

    }

    public function visualizarMisDonaciones(){
        
      return view('donador.visualizarMisDonaciones');

    }
    public function recomendacionesCampañas(){
        
      return view('donador.recomendacionesCampañas');

    }
    public function visualizarFomularioVoluntariadoCampaña(){
        
      return view('donador.donarCampañaVoluntariado');

    }
    public function visualizarFomularioDonarCampañaBienes(){
        
        $config['center'] = '-0.269088, -78.566107';
        $config['zoom'] = 'auto';
        $config['map_height'] = '400px';
        $config['directions'] = TRUE;
        $config['directionsStart'] = '-0.269088, -78.566107';
        $config['directionsEnd'] = '-0.273648, -78.564358';
        $config['directionsDivID'] = 'directionsDiv';

        $gmap = new GMaps();
        $gmap->initialize($config);
     
        /*$marker['position'] = '-0.269088, -78.566107';
        $marker['infowindow_content'] = 'PROFETA AGEO';


        $gmap->add_marker($marker);*/
        $map = $gmap->create_map();
        return view('donador.donarCampañaBienes')->with(['map'=>$map]);
    }

    public function detalleCampañaVoluntariado(){
        return view('publico.detalleCampañaVoluntariado');
    }

    public function detalleCampañaBienes(){
        return view('publico.detalleCampañaBienes');
    }

    public function resultadosBusqueda(){
        return view('publico.resultadosBusquedaCampaña');
    }

    public function inicio(){

        
      return view('inicio');

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
