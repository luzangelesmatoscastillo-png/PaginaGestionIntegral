<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * @property CI_Loader $load
 * @property Pagina_model $mp
 */
class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->model("Pagina_model", "mp");
    }
 
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $this->load->view('welcome_message');
    }
   
    public function Mensaje()
    {
        $this->load->view('welcome_message');
    }
   
    public function Mensaje2($variable=''){
        $datos["variable"] = $variable;
        $this->load->view('welcome_message', $datos);
    }
 
   
    public function principal(){
        $this->load->view("secciones/header");
        $datos["secciones"] = $this->mp->consultar_secciones_activas();
        $this->load->view('principal', $datos);
        $this->load->view("secciones/footer");
    }
}
 