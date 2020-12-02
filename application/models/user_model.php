<?php

class User_model extends CI_Model{
//    public function get_users($user_id, $username){
////        $config['hostname']='localhost';
////        $config['username']='root';
////        $config['password']='';
////        $config['database']='project_manager';
////
////        $config_2['hostname']='localhost';
////        $config_2['username']='root_2';
////        $config_2['password']='';
////        $config_2['database']='project_manager_2';
////
////        $connection = $this->load->database($config);
////        $connection_2 = $this->load->database($config_2);
//
//
////        $query = $this->db->query("SELECT * FROM users");
////        return $query->num_rows();
////        return $query->num_fields();
//
//
////        $query = $this->db->get('users');
////        return $query->result();
//
////        $this->db->where('id', $user_id);
//        $this->db->where([
//            'id' => $user_id,
//            'username' => $username
//        ]);
//        $query = $this->db->get('users');
//        return $query->result();
//    }
//
//    public function create_users($data){
//        $this->db->insert('users', $data);
//    }
//
//    public function update_users($data, $id){
//        $this->db->where(['id' => $id]);
//        $this->db->update('users', $data);
//    }
//
//    public function delete_users($id){
//        $this->db->where(['id' => $id]);
//        $this->db->delete('users');
//    }


    public function create_user(){
//        crypt('rasmuslerdorf', '$6$rounds=12000$usesomesillystringforsalt$');
        $options = ['cost' => 12];
        $encrypted_password = password_hash($this->input->post('password'),PASSWORD_BCRYPT, $options);
        $data = array(
            'first_name' => $this->input->post('first_name'),
            'last_name' => $this->input->post('last_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $encrypted_password
        );
        $insert_data = $this->db->insert('users', $data);

        return $insert_data;
    }

    public function login_user($username, $password){
        $this->db->where([
            "username" => $username,
        ]);
        $result = $this->db->get('users');
        $db_password = $result->row(2)->password;

        if(password_verify($password, $db_password)){
            return $result->row(0)->id;
        }else{
            return false;
        }
    }
}