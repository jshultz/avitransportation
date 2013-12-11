<?php
/**
 * Created by JetBrains PhpStorm.
 * User: OpenSkyMedia
 * Date: 12/14/11
 * Time: 2:24 PM
 * To change this template use File | Settings | File Templates.
 */
class Client extends CI_Controller
{
    public $uid;

    function __construct()
    {
        parent::__construct();

        $this->load->library('tank_auth');
        $this->load->model('Domain_model');
        $this->load->model('Reporting_model');
        $this->uid      = $this->Domain_model->getURL();
    }

    function index()
    {
        if (!$this->tank_auth->is_logged_in()) {
            redirect('/auth/login/');
        }
        else {
            $data['results']    = $this->Reporting_model->getContacts();
            $data['user_id']	= $this->tank_auth->get_user_id();
            $data['page_title'] = 'AVI Transportation - Community Livery Service';
            $data['page'] = '/client/welcome_message'; // pass the actual view to use as a parameter
            $this->load->view('container',$data);
        }
    }

    function make_report_file() {

        $this->load->model('Reporting_Model');
        $redirect = '/client/index';
        $this->Reporting_Model->contact_file($redirect);

    }



}
