<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $data['page_title'] = 'AVI Transportation - Community Livery Service';
        $data['page'] = 'welcome_message'; // pass the actual view to use as a parameter
        $this->load->view('container',$data);
	}

    public function about()
    {
        $data['page_title'] = 'AVI Transportation - About Our Delivery Service';
        $data['page'] = 'about_view'; // pass the actual view to use as a parameter
        $this->load->view('container',$data);
    }

    public function buynow()
    {
        $data['page_title'] = 'AVI Transportation - Book Your Journey Now';
        $data['page'] = 'buynow_view'; // pass the actual view to use as a parameter
        $this->load->view('container',$data);
    }

    public function services()
    {
        $data['page_title'] = 'AVI Transportation - The Services We Provide';
        $data['page'] = 'services_view'; // pass the actual view to use as a parameter
        $this->load->view('container',$data);
    }

    public function community()
    {
        $data['page_title'] = 'AVI Transportation - About Our Community';
        $data['page'] = 'community_view'; // pass the actual view to use as a parameter
        $this->load->view('container',$data);
    }

    public function contact()
    {
        $data['page_title'] = 'AVI Transportation - Contact Us';
        $data['page'] = 'contact_view'; // pass the actual view to use as a parameter
        $this->load->view('container',$data);
    }

    public function policy()
    {
        $data['page_title'] = 'AVI Transportation - Refund Policy and FAQ';
        $data['page'] = 'policy_view'; // pass the actual view to use as a parameter
        $this->load->view('container',$data);
    }

    public function thankyou()
    {
        $data['page_title'] = 'AVI Transportation - Thank You';
        $data['page']       = 'thankyou_view'; // pass the actual view to use as a parameter
        $this->load->view('container',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */