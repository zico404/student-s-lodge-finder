<?php

/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/20/2018
 * Time: 1:47 AM
 */
class View extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {

        $this->view('pages/search');
    }

    public function lodge()
    {
        $this->view('pages/lodge');
    }


}
