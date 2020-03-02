<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Mimin_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
        if( !($this->session->userdata('is_admin') == 1 ) )
        {
            redirect('admin/dashboard');
        } 
    }
}