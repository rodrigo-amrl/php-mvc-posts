<?php

namespace App\Controllers\Album;

use App\Controllers\Controller;


class AlbumController extends Controller
{


    public function __construct()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
    }
    public function index()
    {
        return $this->view('home');
    }
    public function edit($id)
    {
        return $this->view('album/edit');
    }
}