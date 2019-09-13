<?php

class Users extends CI_Controller
{

    public function register()
    {
        $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if($this->form_validation->run() == FALSE){
            //redirect('http://google.com');
            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/main',$data);
        } else {
            if($this->user_model->create_user()) {
                $this->session->set_flashdata('user_registered','User has been registered successfully.');
                redirect('home/index');
            } else {

            }
        }


    }

    public function login()
    {
        //echo $this->input->post('username');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        $this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|required|min_length[3]|matches[password]');

        if ($this->form_validation->run() == FALSE) {
            $data = array(
                'error' => validation_errors()
            );
            $this->session->set_flashdata($data);
            redirect('home');
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username, $password);
            if ($user_id) {
                $user_data = array(
                    'user_id' => $user_id,
                    'username' => $username,
                    'logged_in' => true
                );

                $this->session->set_userdata($user_data);
                $this->session->set_flashdata('login_sucess', 'You are now logged in');
                //redirect('home/index');
                $data['main_view'] = "admin_view";
                $this->load->view('layouts/main', $data);
            } else {
                $this->session->set_flashdata('login_failed', 'You are NOT logged in');
                redirect('home/index');
            }
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home/index');
    }
//    public function show($user_id){
//        $data['results'] = $this->user_model->get_users($user_id, 'rico');
//        $this->load->view('user_view', $data);
//    }
//    public function insert(){
//        $insertArray = array(
//            'username' => 'peter',
//            'password' => 'secret'
//        );
//        $this->user_model->create_users($insertArray);
//    }
//    public function update(){
//        $updateArray = array(
//            'username' => 'william',
//            'password' => 'not so secret'
//        );
//        $this->user_model->update_users($updateArray, 3);
//    }
//    public function delete(){
//        $this->user_model->delete_users(3);
//    }
}