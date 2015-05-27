<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function index2()
	{
		$this->load->helper('url');
		$keyword = $this->input->get('keyword');
		if ($keyword!=""){
			$this->load->model('get_books');
			$data['result'] = $this->get_books->getAll($keyword);
			$data['cate'] = $this->get_books->getCategory(1);
			$this->load->view('search', $data);	
		}
		else {
			$this->load->view('search');
		}
	}


	public function about()
	{
		$this->load->helper('url');
		$this->load->view('about');
	}

	public function book_add()
	{
		$this->load->helper('url');
		$this->load->view('book_add');
	}

	public function index()
	{
		$this->load->helper('url');
		$keyword = $this->input->get('keyword');
		if ($keyword!=""){
			$this->load->model('get_books');
			$data['result'] = $this->get_books->getAll($keyword);
			$data['cate'] = $this->get_books->getCategory(1);
			$this->load->view('page_header');
			$this->load->view('page_content', $data);
			$this->load->view('page_footer');
		}
		else {
			$this->load->view('page_header');
			$this->load->view('page_content');
			$this->load->view('page_footer');
		}


	}
	
	public function testjs()
	{
		$data = array(
				'name' => 'Seed of IU',
				'description' => 'see of IU description',
				'url' => 'www.iuerd.com',
				'author' => 'Tran Thanh Phuc',
				'contributor' => 'Tran Phuc',
				'isbn' => '1234567',
            );

		$this->db->insert('books', $data); 
		echo 'Success!';
	}

}

/* End of file site.php */
/* Location: ./application/controllers/site.php */