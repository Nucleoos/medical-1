<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules/base/controllers/base.php' );

class Registrar extends Base {

    function __construct() {
        parent::__construct();

        // echo "<pre>"; print_r($this->session->userdata('session_user'));die;

        // module class
        $this->body_class[] = "registrar";
    }

    public function index() {

        // Prepare the page
        $this->page_title   = "Dashboard";
        $this->page_content = "dashboard";
        $this->render_layout();

    }

}