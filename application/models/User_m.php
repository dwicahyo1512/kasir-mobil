<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_m extends CI_Model
{
    // query ci3 mengambil data user
    public function login($post){
        $this->db->select('*');
        $this->db->from('user');
        // mengambi inputan username
        $this->db->where('username', $post['username']);
        // mengambi inputan username
        $this->db->where('password', sha1($post['password']));
       $query = $this->db->get();
       return $query;
    }

    public function get($id = null){
       $this->db->from('user');
    //    jika id tidak null maka where tetep
       if($id != null){
        $this->db->where('user_id', $id);
       }
       $query = $this->db->get();
       return $query;
    }
    public function add($post){
      $params ['name'] = $post ['fullname'];
      $params ['username'] = $post ['username'];
      $params ['password'] = sha1($post ['password']);
      $params ['address'] = $post['address'] != "" ? $post ['address'] : null;
      $params ['level'] = $post ['level'];
      $this->db->insert('user',$params);
    }
    public function edit($post){
      $params ['name'] = $post ['fullname'];
      $params ['username'] = $post ['username'];
      // jika password di isi maka membuat password baru dan sebaliknya jika password kosong maka memakai password dulu
      if(!empty($post['password'])){
         $params ['password'] = sha1($post ['password']);
      }
      $params ['address'] = $post['address'] != "" ? $post ['address'] : null  ;
      $params ['level'] = $post ['level'];
      $this->db->where('user_id',$post['user_id']);
      $this->db->update('user',$params);
    }

    public function del($id)
    {
        $this->db->where('user_id',$id);
        $this->db->delete('user');
    }
}
