<?php

/**
 * Created by PhpStorm.
 * User: Kapersky Guru
 * Date: 5/20/2018
 * Time: 1:47 AM
 */
class Lodge extends Controller
{
    
    private $lodgeModel;

        public function __construct()
        {
            $this->lodgeModel = $this->model('lodgeModel');
        }

    public function index($id)
    {
        if (!empty($id))
        {

            $data =  $this->lodgeModel->get_lodge($id);
            if ($data == null)
            {

                $this->view('pages/404');
            }
            else
            {

                $this->view('lodge/index',$data); 
            }
        }

        else
        {

         $this->view('search/index');
        }

    }


}
