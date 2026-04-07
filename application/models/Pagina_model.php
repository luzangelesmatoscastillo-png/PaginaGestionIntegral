<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Pagina_model extends CI_Model {
   
    function consultar_secciones_activas(){
        $this->db->select("id, nombre_seccion, href, activo, registro");
        $this->db->from("cat_secciones");
        $this->db->where("activo","1");
        $query = $this->db->get();
        if($query!=FALSE){
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
        }else{
            return false;
        }
 
        $query = $this->db->query("Call ObtenerSecciones()");
        if($query!=FALSE){
            if($query->num_rows()>0){
                return $query->result();
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
   
 
    public function __construct()
    {
        parent::__construct();
    }
 
    public function getPagina($id)
    {
        return $this->db->get_where('pagina', array('id' => $id))->row_array();
    }
 
}
 