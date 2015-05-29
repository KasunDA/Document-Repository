<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class auth extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library('session');
          $this->load->helper('form');
          $this->load->helper('url');
          $this->load->helper('html');
          $this->load->database();
          $this->load->library('form_validation');
          //load the login model
          $this->load->model('login_model');
     }

     public function index(){
          $this->load->view('page_navi');
          $this->load->view('authentication');
          $this->load->view('page_footer');
     }

     public function login()
     {
          //get the posted values
          $username = $this->input->post("txt_username");
          $password = $this->input->post("txt_password");

          //set validations
          $this->form_validation->set_rules("txt_username", "Username", "trim|required");
          $this->form_validation->set_rules("txt_password", "Password", "trim|required");

          if ($this->form_validation->run() == FALSE)
          {
               //validation fails
               $this->load->view('login');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->login_model->get_user($username, $password);
                    if ($usr_result > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE
                         );
                         $this->session->set_userdata($sessiondata);
                         redirect("");
                    }
                    else
                    {
                         $this->session->set_flashdata('msg', '<div class="feedback">Wrong username or password<br/>Please login again...</div>');
                         redirect('auth/index');
                    }
               }
               else
               {
                    redirect('auth/index');
               }
          }
     }

     public function logout()
     {
          $this->session->sess_destroy();
          redirect("");
     }

     public function signup()
     {
          echo "This signup page is under construction";
     }


     public function add_user()
          {
               $pwd = md5('test');
               $data = array(
                    'username' => 'admin',
                    'password' => $pwd,
                    'email' => 'admin@phuctrancs.info',
                    'status' => 'active',
                              );

               $this->db->insert('tbl_usrs', $data);
               echo 'Success!';
     }


}?>