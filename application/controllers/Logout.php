<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logout extends CI_Controller
{
	private $_lang;
    private $_setting;
    private $_customer;

    public function __construct()
    {
        parent:: __construct();

        $this->_setting = $this->setting_model->load();

        // check session for customer
        $customer_id = $this->session->userdata('customer_id');

        if ($customer_id)
        {
            $this->_customer = $this->core_model->get('customer', $customer_id);
        }
        else
        {
            redirect(base_url() . 'signin');
        }
    }




	public function index()
	{
		$this->session->set_userdata('customer_id', NULL);
		$this->session->sess_destroy();

		redirect(base_url());
	}
}