<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class auth extends CI_Controller
{

     public function __construct()
     {
          parent::__construct();
          $this->load->library(array('session', 'form_validation'));
          $this->load->helper(array('form', 'url', 'html', 'captcha'));
          $this->load->database();
          //load the login model
          $this->load->model('login_model');
     }

     public function index(){
          $action = $this->input->get("action");
          if ($action != 'signup'){

               $this->load->view('page_navi');
               $this->load->view('login');
               $this->load->view('page_footer'); 
          }
          else {


          //Get Captcha
               $vals = array(
                    'img_path' => './static/captcha/',
                    'img_url' => base_url("static/captcha"),
                    'img_width' => '150',
                    'img_height' => 42,
                    'expiration' => 7200
          );

               $captcha = create_captcha($vals);
               $data['captcha'] = $captcha;

               //Set Captcha session
               $sessiondata = array
                    (
                         'captcha_code' => $captcha['word'],
                    );
               $this->session->set_userdata($sessiondata);

               //Load view
               $this->load->view('page_navi');
               $this->load->view('signup', $data);
               $this->load->view('page_footer'); 
          }

     }

     public function getcaptcha(){
          $vals = array(
               'img_path' => './static/captcha/',
               'img_url' => base_url("static/captcha"),
               'img_width' => '150',
               'img_height' => 30,
               'expiration' => 7200
          );

          $captcha = create_captcha($vals);
          print_r($captcha);

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
               $this->session->set_flashdata('msg', '<div class="feedback">Enter username and password<br/>and login again...</div>');
               redirect('auth/index');
          }
          else
          {
               //validation succeeds
               if ($this->input->post('btn_login') == "Login")
               {
                    //check if username and password is correct
                    $usr_result = $this->login_model->get_user($username, $password);
                    if (count($usr_result) > 0) //active user record is present
                    {
                         //set the session variables
                         $sessiondata = array(
                              'username' => $username,
                              'loginuser' => TRUE,
                              'name' => $usr_result[0]->name
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

          $this->form_validation->set_rules("txt_name", "Display Name", "trim|required", array('required' => 'You must provide a %s.'));
          $this->form_validation->set_rules("txt_usr", "Username", "trim|required", array('required' => 'You must provide a %s.'));



          if ($this->form_validation->run() == FALSE) {
               echo validation_errors();
          }
          else{


          $txt_name = $this->input->post('txt_name');
          $txt_usr = $this->input->post('txt_usr');
          $txt_password = $this->input->post('txt_password');
          $txt_repassword = $this->input->post('txt_repassword');
          $txt_email = $this->input->post('txt_email');
          $txt_lang = $this->input->post('txt_lang');
          $txt_captcha = $this->input->post('txt_captcha');
          $captcha_session_code = $this->session->userdata('captcha_code');
          //Check Captcha

          if (strcmp(strtoupper($txt_captcha),strtoupper($captcha_session_code)) != 0){
               echo "Wrong code";
          }
          else {
               if(strcmp($txt_password, $txt_repassword) != 0){
                    echo "Password does not match";
               }
               else{
                    //Check existing user
                    $check_usr = $this->login_model->check_usr($txt_usr);
                    if ($check_usr > 0){
                         echo "User existed";
                    }
                    else {
                         echo "successfully";
                    }
               }
          }
     }
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