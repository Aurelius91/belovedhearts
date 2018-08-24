<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Signin extends CI_Controller
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
            redirect(base_url());
        }
    }




    /* Public Function Area */
    public function index()
    {
        $header_id = 1;

        $arr_data['web'] = 'Beloved Hearts';
        $arr_data['title'] = 'Sign In';
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting '] = $this->_setting;
        $arr_data['customer'] = $this->_customer;

        $this->load->view('signin', $arr_data);
    }
    /* End Public Function Area */




    /* Public Function Area */
    public function ajax_login()
    {
        $json['status'] = 'success';

        try
        {
            $this->load->helper('security');

            $email = $this->security->xss_clean($this->input->post('email'));
            $password = md5($this->security->xss_clean($this->input->post('password')));

            $this->db->select('id, name');
            $this->db->where("BINARY email = '{$email}'", null, false);
            $this->db->where("BINARY password = '{$password}'", null, false);
            $arr_customer = $this->core_model->get('customer');

            if (count($arr_customer) <= 0)
            {
                throw new Exception('Wrong Email or Password.');
            }

            $this->session->set_userdata('customer_id', $arr_customer[0]->id);
            $this->session->set_userdata('customer_name', $arr_customer[0]->name);

            $json['customer'] = $arr_customer[0];
        }
        catch (Exception $e)
        {
            $json['message'] = $e->getMessage();
            $json['status'] = 'error';

            if ($json['message'] == '')
            {
                $json['message'] = 'Server error.';
            }
        }

        echo json_encode($json);
    }
    /* End Ajax Area */




    /* Private Function Area */
    /* End Private Function Area */
}
