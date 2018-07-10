<?php
/**
 *
 */
class Dashboards extends Controller
{

    function __construct()
    {
        // code...
    }

    public function index()
    {
        $this->view('dashboard/index');
    }
}
