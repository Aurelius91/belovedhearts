<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller
{
	private $_setting;
	private $_user;
	private $_acl;
	private $_has_image;

	public function __construct()
	{
		parent:: __construct();

		$user_id = $this->session->userdata('user_id');

		if ($user_id > 0)
		{
			$this->_user = $this->core_model->get('user', $user_id);
			$this->_setting = $this->setting_model->load();
			$this->_acl = $this->cms_function->generate_acl($this->_user->id);

			$this->_user->address = $this->cms_function->trim_text($this->_user->address);
			$this->_setting->company_address = $this->cms_function->trim_text($this->_setting->company_address);
			$this->_user->image_name = $this->cms_function->generate_image('user', $this->_user->id);

			$this->_has_image = 1;
		}
		else
		{
			redirect(base_url() . 'login/');
		}
	}




	public function add()
	{
		$acl = $this->_acl;

		if (!isset($acl['blog']) || $acl['blog']->add <= 0)
		{
			redirect(base_url());
		}

		$arr_data['setting'] = $this->_setting;
		$arr_data['account'] = $this->_user;
		$arr_data['acl'] = $acl;
		$arr_data['type'] = 'Blog';
		$arr_data['csrf'] = $this->cms_function->generate_csrf();
		$arr_data['total_size'] = $this->cms_function->check_memory();

		$this->load->view('html', $arr_data);
		$this->load->view('blog_add', $arr_data);
	}

	public function edit($blog_id = 0)
	{
		$acl = $this->_acl;

		if ($blog_id <= 0)
		{
			redirect(base_url());
		}

		if (!isset($acl['blog']) || $acl['blog']->edit <= 0)
		{
			redirect(base_url());
		}

		$blog = $this->core_model->get('blog', $blog_id);
		$blog->image_name = '';

		$this->db->where('blog_id', $blog->id);
		$arr_image = $this->core_model->get('image');

		if (count($arr_image) > 0)
		{
			$blog->image_name = ($arr_image[0]->name != '') ? $arr_image[0]->name : $arr_image[0]->id . '.' . $arr_image[0]->ext;
		}

		$arr_data['setting'] = $this->_setting;
		$arr_data['account'] = $this->_user;
		$arr_data['acl'] = $acl;
		$arr_data['type'] = 'Blog';
		$arr_data['blog'] = $blog;
		$arr_data['csrf'] = $this->cms_function->generate_csrf();
		$arr_data['total_size'] = $this->cms_function->check_memory();

		$this->load->view('html', $arr_data);
		$this->load->view('blog_edit', $arr_data);
	}

	public function view($page = 1, $filter = 'all', $query = '')
	{
		$acl = $this->_acl;

		if (!isset($acl['blog']) || $acl['blog']->list <= 0)
		{
			redirect(base_url());
		}

		$query = ($query != '') ? base64_decode($query) : '';

		if ($query != '')
		{
			$this->db->like('name', $query);
		}

		if ($filter == 'all')
		{
			$this->db->like('name', $query);
		}
		else
		{
			$this->db->like($filter, $query);
		}

		$this->db->limit($this->_setting->setting__limit_page, ($page - 1) * $this->_setting->setting__limit_page);
		$this->db->order_by("name");
		$arr_blog = $this->core_model->get('blog');

		if ($query != '')
		{
			$this->db->like('name', $query);
		}

		if ($filter == 'all')
		{
			$this->db->like('name', $query);
		}
		else
		{
			$this->db->like($filter, $query);
		}

		$count_blog = $this->core_model->count('blog');
		$count_page = ceil($count_blog / $this->_setting->setting__limit_page);

		$arr_data['setting'] = $this->_setting;
		$arr_data['account'] = $this->_user;
		$arr_data['acl'] = $acl;
		$arr_data['type'] = 'Blog';
		$arr_data['page'] = $page;
		$arr_data['count_page'] = $count_page;
		$arr_data['query'] = $query;
		$arr_data['filter'] = $filter;
		$arr_data['arr_blog'] = $arr_blog;
		$arr_data['csrf'] = $this->cms_function->generate_csrf();
		$arr_data['total_size'] = $this->cms_function->check_memory();

		$this->load->view('html', $arr_data);
		$this->load->view('blog', $arr_data);
	}




	public function ajax_add()
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$acl = $this->_acl;

			if (!isset($acl['blog']) || $acl['blog']->add <= 0)
			{
				throw new Exception('You have no access to add blog. Please contact your administrator.');
			}

			$blog_record = array();
			$image_id = 0;

			foreach ($_POST as $k => $v)
			{
				if ($k == 'image_id')
				{
					$image_id = $v;
				}
				else
				{
					$blog_record[$k] = ($k == 'date' || $k == 'date_end') ? strtotime($v) : $v;
				}
			}

			$blog_record['url_name'] = str_replace(array('.', ',', '&', '?', '!', '/', '(', ')', '+'), '' , strtolower($blog_record['name']));
            $blog_record['url_name'] = preg_replace("/[\s_]/", "-", $blog_record['url_name']);

            $this->_validate_add($blog_record);

			$blog_id = $this->core_model->insert('blog', $blog_record);
			$blog_record['id'] = $blog_id;
			$blog_record['last_query'] = $this->db->last_query();

			$this->cms_function->system_log($blog_record['id'], 'add', $blog_record, array(), 'blog');

			if ($image_id > 0)
			{
				$this->core_model->update('image', $image_id, array('blog_id' => $blog_id));
			}

			$json['blog_id'] = $blog_id;

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

	public function ajax_change_status($blog_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($blog_id <= 0)
			{
				throw new Exception();
			}

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$acl = $this->_acl;

			if (!isset($acl['blog']) || $acl['blog']->edit <= 0)
			{
				throw new Exception('You have no access to edit blog. Please contact your administrator.');
			}

			$old_blog = $this->core_model->get('blog', $blog_id);

			$old_blog_record = array();

			foreach ($old_blog as $key => $value)
			{
				$old_blog_record[$key] = $value;
			}

			$blog_record = array();

			foreach ($_POST as $k => $v)
			{
				$blog_record[$k] = ($k == 'date') ? strtotime($v) : $v;
			}

			$this->core_model->update('blog', $blog_id, $blog_record);
			$blog_record['id'] = $blog_id;
			$blog_record['last_query'] = $this->db->last_query();

			$this->cms_function->system_log($blog_id, 'status', $blog_record, $old_blog_record, 'blog');

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

	public function ajax_delete($blog_id = 0)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($blog_id <= 0)
			{
				throw new Exception();
			}

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$acl = $this->_acl;

			if (!isset($acl['blog']) || $acl['blog']->delete <= 0)
			{
				throw new Exception('You have no access to delete blog. Please contact your administrator.');
			}

			$blog = $this->core_model->get('blog', $blog_id);
			$updated = $_POST['updated'];
			$blog_record = array();

			foreach ($blog as $k => $v)
			{
				if ($k == 'updated' && $v != $updated)
				{
					throw new Exception('This data has been updated by another User. Please refresh the page.');
				}
				else
				{
					$blog_record[$k] = $v;
				}
			}

			$this->_validate_delete($blog_id);

			$this->core_model->delete('blog', $blog_id);
			$blog_record['id'] = $blog->id;
			$blog_record['last_query'] = $this->db->last_query();

			$this->cms_function->system_log($blog_record['id'], 'delete', $blog_record, array(), 'blog');

			if ($this->_has_image > 0)
			{
				$this->db->where('blog_id', $blog_id);
	            $arr_image = $this->core_model->get('image');

	            foreach ($arr_image as $image)
	            {
	                unlink("images/website/{$image->id}.{$image->ext}");

	                $this->core_model->delete('image', $image->id);
	            }
			}

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

	public function ajax_edit($blog_id)
	{
		$json['status'] = 'success';

		try
		{
			$this->db->trans_start();

			if ($this->session->userdata('user_id') != $this->_user->id)
			{
				throw new Exception('Server Error. Please log out first.');
			}

			$acl = $this->_acl;

			if (!isset($acl['blog']) || $acl['blog']->edit <= 0)
			{
				throw new Exception('You have no access to edit blog. Please contact your administrator.');
			}

			$old_blog = $this->core_model->get('blog', $blog_id);

			$old_blog_record = array();

			foreach ($old_blog as $key => $value)
			{
				$old_blog_record[$key] = $value;
			}

			$blog_record = array();
			$image_id = 0;

			foreach ($_POST as $k => $v)
			{
				if ($k == 'image_id')
				{
					$image_id = $v;
				}
				else
				{
					$blog_record[$k] = ($k == 'date' || $k == 'date_end') ? strtotime($v) : $v;
				}
			}

			$blog_record['url_name'] = str_replace(array('.', ',', '&', '?', '!', '/', '(', ')', '+'), '' , strtolower($blog_record['name']));
            $blog_record['url_name'] = preg_replace("/[\s_]/", "-", $blog_record['url_name']);

			$this->_validate_edit($blog_id, $blog_record);

			$this->core_model->update('blog', $blog_id, $blog_record);
			$blog_record['id'] = $blog_id;
			$blog_record['last_query'] = $this->db->last_query();

			$this->cms_function->system_log($blog_record['id'], 'edit', $blog_record, $old_blog_record, 'blog');

			if ($image_id > 0)
            {
                $this->db->where('blog_id', $blog_id);
                $arr_image = $this->core_model->get('image');

                foreach ($arr_image as $image)
                {
                    unlink("images/website/{$image->id}.{$image->ext}");

                    $this->core_model->delete('image', $image->id);
                }

                $this->core_model->update('image', $image_id, array('blog_id' => $blog_id));
            }

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

	public function ajax_get($blog_id = 0)
	{
		$json['status'] = 'success';

		try
		{
			if ($blog_id <= 0)
			{
				throw new Exception();
			}

			$blog = $this->core_model->get('blog', $blog_id);

			$json['blog'] = $blog;
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




	private function _validate_add($blog_record)
	{
		$this->db->where('name', $blog_record['name']);
		$count_blog = $this->core_model->count('blog');

		if ($count_blog > 0)
		{
			throw new Exception('Name already exist.');
		}
	}

	private function _validate_delete($blog_id)
	{
		$this->db->where('deletable <=', 0);
		$this->db->where('id', $blog_id);
		$count_blog = $this->core_model->count('blog');

		if ($count_blog > 0)
		{
			throw new Exception('Data cannot be deleted');
		}
	}

	private function _validate_edit($blog_id, $blog_record)
	{
		$this->db->where('editable <=', 0);
		$this->db->where('id', $blog_id);
		$count_blog = $this->core_model->count('blog');

		if ($count_blog > 0)
		{
			throw new Exception('Data cannot be updated.');
		}

		$this->db->where('id !=', $blog_id);
		$this->db->where('name', $blog_record['name']);
		$count_blog = $this->core_model->count('blog');

		if ($count_blog > 0)
		{
			throw new Exception('Name is already exist.');
		}
	}
}