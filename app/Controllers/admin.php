<?php

namespace App\Controllers;

use App\Models\AdminModels;

class admin extends BaseController
{
    protected $adminmodels;

    public function __construct()
    {
        $this->adminmodels = new AdminModels();
    }
   public function provinsi(){
    $this->adminmodels->addvaluearea('provinsi',$this->request->getVar('provinsi'));
   }
   public function kecamatan(){
    $this->adminmodels->addvaluearea('kecamatan',$this->request->getVar('kecamatan'));
   }
   public function kelurahan(){
    $this->adminmodels->addvaluearea('kelurahan',$this->request->getVar('kelurahan'));
   }
   public function rt(){
    $this->adminmodels->addvaluearea('rt',$this->$this->request->getVar('rt'));
   }
   public function rw(){
    $this->adminmodels->addvaluearea('rw',$this->$this->request->getVar('rw'));
   }
   public function kk(){
        $this->adminmodels->save($this->request->getVar);
   }
   public function maping(){
    $this->adminmodels->mapingmod('maping',$this->request->getVar());
   }
   public function data_warga(){
    $this->adminmodels->data_wargamod('data_warga',$this->request->getVar());
   }
   public function home(){

    $data_warga = $this->adminmodels->getdata('data_warga','');
    $provinsi = $this->adminmodels->getdata('provinsi','');
    $kecamatan = $this->adminmodels->getdata('kecamatan','');
    $kelurahan = $this->adminmodels->getdata('kelurahan','');
    $rw = $this->adminmodels->getdata('rw','');
    $rt = $this->adminmodels->getdata('rt','');
    $maping = $this->adminmodels->getdata('maping','');
    $user = $this->adminmodels->getdata('user','');
    $kk = $this->adminmodels->findAll();
    $data = [
        'data_warga'=>$data_warga,
        'provinsi'=>$provinsi,
        'kecamatan'=>$kecamatan,
        'kelurahan'=>$kelurahan,
        'rw'=>$rw,
        'rt'=>$rt,
        'user'=>$user,
        'maping'=>$maping,
        'kk'=>$kk,
    ];
   }
   public function update_data(){
        $table = $this->request->getVar('table');
        $condition=[
            'id'=>$this->request->getVar('id')
        ];
        $this->adminmodels->update_data($table,$condition,$this->request->getVar());

   }
   public function update_kk(){
    $this->adminmodels->where('id',$this->request->getVar('id'))->set($this->request->getVar())->update();
   }
   public function delete_data(){
        $table = $this->request->getVar('table');
        $condition=[
            'id'=>$this->request->getVar('id')
        ];
        $this->adminmodels->delete_data($table,$condition);
   }

   public function delete_kk(){
    $this->adminmodels->where('id',$this->request->getVar('id'))->delete();
   }
}
