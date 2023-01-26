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
        $user = $this->authmodel->first(['username'=>$username]);
        if($user){
            if(password_verify($password,$user['password']) && $user['username'] == $username){
                return redirect()->to('/contoh');
                die;
            }else{
                // Jika password Salah
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Gagal');
                window.location.href='/login';
                </script>");
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


    // Frontend / page
    public function register(){
        return view('auth/register');
    }
    public function login(){
        return view('auth/login');
    }
    public function contoh(){
        return view('auth/contoh');
    }

    
}
