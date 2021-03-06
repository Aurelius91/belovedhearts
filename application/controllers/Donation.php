<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller
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




    /* Public Function Area */
    public function index()
    {
        $header_id = 1;

        $arr_data['web'] = 'Beloved Hearts';
        $arr_data['title'] = 'Donate';
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting '] = $this->_setting;
        $arr_data['customer'] = $this->_customer;

        $this->load->view('donation', $arr_data);
    }
    /* End Public Function Area */



    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}
