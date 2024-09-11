<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AuthController extends BaseController
{
    public function home()
    {
        echo "Hewwoo wowld uwu";

        return view('layout/header')
              .view('home')
              .view('layout/footer');
    }


    public function login()
    {
        echo "Hewwoo wowld uwu";

        return view('layout/header')
              .view('login')
              .view('layout/footer');
    }

    public function profile()
    {
        echo "Twis is twe pwofiwe pwage";

        $data['nama'] = "SHEIKH MOHAMMAD AMMAR BIN SHEIKH MOHD 'AZIF";
        $data['username'] = "Sea egg";
        $data['email'] = "ammarpro46@gmail.com";
        $data['password'] = "764812";

        return view('layout/header')
              .view('profile' , $data)
              .view('layout/footer');
    }

    public function register()
    {

        return view('layout/header')
              .view('register')
              .view('layout/footer');
    }
}
