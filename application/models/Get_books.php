<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Get_books extends CI_Model {
	
		function getAll($keyword){
			$select_q = "SELECT b.id, b.name, b.description, b.url, bc.name as category FROM books b LEFT JOIN book_cate bc ON b.category = bc.id";
			$where_q = " WHERE b.name LIKE '%".$keyword."%'"." OR description LIKE '%".$keyword."%'";
			$sql_q = $select_q.$where_q;
			$query = $this->db->query($sql_q); 
			return $query->result();

			//$data = array('result' => 'Book title');
			//return $data;
		}

		function getCategory($cate_id) {
			$query = $this->db->query("SELECT * FROM book_cate WHERE id =".$cate_id);
			return $query->result();
		}
	
	}
	
	/* End of file get_books.php */
	/* Location: ./application/models/get_books.php */
 ?>