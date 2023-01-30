<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        // Consider if it would be best to autoload some of the helpers from here.
        $this->load->library('image_lib');
        $this->load->helper('url');
        $this->load->helper('url_helper');
        $this->load->helper('html');
        $this->load->helper('cookie');
        $this->load->helper('form');




        // Load in your Models below.
        $this->load->model('HomeModel');

        // Consider creating new Models for different functionality.
    }

    public function index()
    {

        $data['title']       = 'Games Reviews';
        $data['result'] = $this->HomeModel->getGame();

        //Load the view and send the data accross.
        $data['title']       = 'Games Reviews';
        $this->load->view('navigation',$data);
        $this->load->view('home', $data);

        // Get the data from our Home Model.

    }
    function login()//login function
    {
        $data['title']       = 'login';// get the title name login
        $this->load->view('navigation',$data);

        $this->load->view('Login');
    }
    function login_validation()//login validation function
    {
        $this->load->library('form_validation');// load form validation libary
        $this->form_validation->set_rules('username', 'Username', 'required');// makes it the username cant be left empty
        $this->form_validation->set_rules('password', 'Password', 'required');// makes it the password cant be left empty
        if ($this->form_validation->run()) {// if the validation is ok
            $username = $this->input->post('username');//get the username
            $password = $this->input->post('password');// get the password

            $this->load->model('HomeModel');//loads home model

            if ($this->HomeModel->can_login($username, $password)) {// if the username and password are ok to login
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);//set the session username to the username
                redirect(base_url().'index.php/home');//redirect to home

            } else {
                $this->session->set_flashdata('error', 'Invalid Username and Password');// loads error message
                redirect(base_url().'index.php/home/login');// redricts to login page


            }


        } else
        {
                $this->login();//runs login
            }

    }

    function logout()
    {
        $this->session->unset_userdata('username');//unset session data
        redirect(base_url(),'index.php');//rediect home
    }

    function signUp()
    {
        $data['title']       = 'Sign Up';//sets title to sign up
        $this->load->view('navigation',$data);
        $this->load->view('signUp');
    }
    function signUp_validation()// sign up validation very similar to login_validation
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        if ($this->form_validation->run()) {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $this->load->model('HomeModel');

            if ($this->HomeModel->can_signup($username, $password)) {
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect(base_url().'index.php/home');

            } else {
                $this->session->set_flashdata('error', 'Invalid Username');
                redirect(base_url().'index.php/home/signUp');


            }


        } else
        {
                $this->signUp();//runs sign up
            }

    }

    function comment()
    {


        $username= $this->session->userdata('username');//gets username from session
        $id= $this->session->userdata('ReviewID');//gets ReviewID from session
        $comment = $this->input->post('Comment'); //gets comment from form
        $this->HomeModel->insertComment($username,$comment,$id);//runs insert comment model funciton

        $slug= $this->session->userdata('slug');//get the slug
        $data['review'] = $this->HomeModel->getReview($slug);
        $data['title'] = $slug;

        $data['result'] = $this->HomeModel->getComments($id);

        $this->load->view('navigation',$data);
        $this->load->view('review', $data);

      }




    public function viewReview($slug=NULL)
    {

      $data['review'] = $this->HomeModel->getReview($slug);//get the reviews based on the slug

      $data['title'] = $slug;// titles based on the slug
      $id= $this->session->userdata('ReviewID');//gets the review id from session
      $data['result'] = $this->HomeModel->getComments($id);// get teh comments
       $this->load->view('navigation',$data);//laods the views 
       $this->load->view('review', $data);


    }
    function admin(){
      if ($this->session->userdata('username')== 'admin'){//if the usermname is admin allow access to page


        $this->load->view('navigation');
        $this->load->view('admin');
      }else{
        redirect(base_url().'index.php/home');
      }


    }



}
