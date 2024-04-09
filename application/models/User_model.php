<?php
class User_model extends CI_model{

    function create($formArray){
        $this->db->insert('users', $formArray); //INSERT INTO users (name,email) VALUES (?,?);

    }

    function all(){
        return $users = $this->db->get('users')->result_array(); //SELECT * FROM users
    }

    function getUser($userId){
        $this->db->where('user_id',$userId);
        return $user = $this->db->get('users')->row_array(); //SELECT * FROM users WHERE user_id = ?
    
    }

    function UpdateUser($userId, $formArray){
        $this->db->where('user_id',$userId);
        $this->db->update('users',$formArray); //UPDATE users SET name = ?, email = ? WHERE user_id = ?
    }

    function deleteUser($userId){
        $this->db->where('user_id',$userId);
        $this->db->delete('users'); //DELETE FROM users WHERE user_id = ?
    }

}
?>