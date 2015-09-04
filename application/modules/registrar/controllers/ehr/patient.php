<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules/base/controllers/base.php' );

class Patient extends Base {

    function __construct() {
        parent::__construct();

        // echo "<pre>"; print_r($this->session->userdata('session_user'));die;

        // module class
        $this->body_class[] = "registrar";

        // add breadcrumbs
    }

    public function index() {

        // Prepare the page
        $this->page_title   = "Patient";
        $this->breadcrumb->add($this->page_title);
        $this->page_content = $this->get_module_path().'create_form';
        $this->render_layout();

    }

}