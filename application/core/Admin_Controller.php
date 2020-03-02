<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Controller extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        
        if( !($this->session->userdata('is_admin')) )
        {
            redirect('dosen');
        } 
    }
}