<?php

/*
 * Type         = Controller
 * File name    = Home.php
 * Slug         = home
 * Description
 *      This controller is for handling main home page
 *  
*/

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller {

    // Default method
    public function index() {

        $data['title'] = SITE_TITLE . ' | ' . SITE_DESC;

        $this->load->view('templates/main_header', $data);
        $this->load->view('home/index');
        $this->load->view('templates/main_footer');
        
    }

}