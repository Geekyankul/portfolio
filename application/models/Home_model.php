<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct(){

        parent:: __construct();
    }
    public function getPortfolio(){
        $id = 1;
        $arr=[];
        $query = $this->db->get('personal_info',1);
        return $query->result();
        // if($query->result()->id == $id){
        //     return $query->result();
        // }else{
        //     return $arr;
        // }
    }
}
