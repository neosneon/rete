<?php

namespace App\Controllers;

use App\Models\AuthModels;

class auth extends BaseController
{
    protected $authmodel;

    public function __construct()
    {
        $this->authmodel = new AuthModels();
    }
    public function logon()
    {
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('pasword');
        
        $user = $this->authmodel->find(['username'=>$username]);
        if($user){
            if(password_verify($password,$user['password'])){
                // JIKA PASSWORD BENAR
            }else{
                // Jika password Salah
            }
        }else{
            // Jika User tidak ada
        }
        
    }
    public function registration()
    {
        $data =[
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('pasword'),PASSWORD_DEFAULT),
            'role_id' => 1,
            'status' =>1,
        ];
        $this->authmodel->save($data,false);
    }

    
}
