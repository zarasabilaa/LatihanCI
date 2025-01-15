<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('tb_matkul');
        $query   = $builder->get()->getResult();
        $data['tb_matkul']= $query;     
        return view('dashboard',$data);
    }
}
