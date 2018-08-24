<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller
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
        $arr_data['title'] = 'Sign Up';
        $arr_data['csrf'] = $this->cms_function->generate_csrf();
        $arr_data['setting '] = $this->_setting;
        $arr_data['customer'] = $this->_customer;

        $this->load->view('signup', $arr_data);
    }
    /* End Public Function Area */




    /* Public Function Area */
    public function ajax_register()
    {
        $json['status'] = 'success';

        try
        {
            $this->db->trans_start();

            $customer_record = array();
            $image_id = 0;

            foreach ($_POST as $k => $v)
            {
                if ($k == 'image_id')
                {
                    $image_id = $v;
                }
                else
                {
                    $customer_record[$k] = ($k == 'date') ? strtotime($v) : $v;
                }
            }

            if ($customer_record['password'] != $this->_setting->setting__website_default_registration_password)
            {
                throw new Exception("Wrong Password");
            }

            $customer_record['password'] = md5($customer_record['password']);

            $customer_id = $this->core_model->insert('customer', $customer_record);

            $this->session->set_userdata('customer_id', $customer_id);
            $this->session->set_userdata('customer_name', $customer_record['name']);

            $this->db->trans_complete();
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
