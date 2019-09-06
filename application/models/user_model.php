<?php

class User_model extends CI_Model{

    public function login_user($username,$password){
        $this->db->where('username', $username);
        $this->db->where('password', $password);

        $result = $this->db->get('users');

        if($result->num_rows() == 1){
            return $result->row(0)->id;
        } else {
            return false;
        }
    }
//    public function get_users($user_id,$username){
////        manual way to load db connection
////        $config['hostname'] = "localhost";
////        $config['username'] = "root";
////        $config['password'] = "";
////        $config['database'] = "errand_db";
////        $connection = $this->load->database($config);
//
//        // this library autoloaded to 'get' the 'users' table info
//        //$query = $this->db->get('users');
//        //return $query->result();
//        //$query = $this->db->query('SELECT * FROM users');
//        //return $query->num_rows();
//        //return $query->num_fields();
//
//        $myArray = array(
//            'id' => $user_id,
//            'username' => $username
//        );
//
//        $this->db->where($myArray);
//        $query = $this->db->get('users');
//        return $query->result();
//    }
//
//    public function create_users($data){
//        $this->db->insert('users',$data);
//    }
//
//    public function update_users($data, $id){
//        $this->db->where('id', $id);
//        $this->db->update('users',$data);
//    }
//
//    public function delete_users($id){
//        $this->db->where('id', $id);
//        $this->db->delete('users');
//    }
}