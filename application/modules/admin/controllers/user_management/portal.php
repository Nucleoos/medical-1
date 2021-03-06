<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
require_once( APPPATH . 'modules/admin/controllers/admin.php' );

class Portal extends Admin {

    // Start: customize CRUD parameters
    private $crud_table     = 'core_portal';
    // End: customize CRUD parameters

    private $crud_for;
    private $model_name;
    private $model;
    private $controller_path;
    private $model_path;
    private $view_path;

    function __construct() {
        parent::__construct();

        // check permission
        $this->check_auth('R');

        // set vars
        $this->crud_for         = $this->router->fetch_class();
        $this->controller_path  = $this->get_class_path();
        $this->model_path       = $this->get_class_path().'_model';
        $this->view_path        = $this->get_class_path();

        // load models
        $this->model_name = array_pop(explode('/', $this->model_path));
        $this->model = $this->load->model($this->model_path, $this->model_name, TRUE);

        // add breadcrumbs
        $this->breadcrumb->add('Manajemen '.ucwords($this->crud_for));
    }

    public function index() {

        $this->data['submit_editor_url'] = base_url().$this->controller_path.'/submit';
        $this->data['getdatatables_url'] = base_url().$this->controller_path.'/getdatatables';
        $this->data['crud_for']          = ucwords($this->crud_for);

        // Prepare the page
        $this->page_title   = "Manajemen ".ucwords($this->crud_for);
        $this->page_content = $this->view_path;
        $this->render_layout();

    }
     
    public function getdatatables() {
        $this->datatables->select('*')
            ->from($this->crud_table);

        echo $this->datatables->generate();
    }

    public function submit() {
        $action = $this->input->post('action');
        
        if ($action == 'edit') {
            if($this->check_auth('U')){ // check permission
                $result = $this->model->update();
            }else{
                $result = $this->get_auth_error();
            }
        }elseif ($action == 'create') {
            if($this->check_auth('C')){ // check permission
                $result = $this->model->save();
            }else{
                $result = $this->get_auth_error();
            }
        }elseif ($action == 'remove') {
            if($this->check_auth('D')){ // check permission
                $result = $this->model->delete();
            }else{
                $result = $this->get_auth_error();
            }
        }else{
            // nothing to do
        }

        echo json_encode($result);
    }

    public function get($id=null){
        if($id!==null){
            echo json_encode($this->model->get_one($id));
        }
    }

    public function get_all() {

        // check ajax
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            print_r(json_encode($this->model->get_all()));
        }else{
            return $this->model->get_all();
        }
    }

}