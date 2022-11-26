<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_m extends CI_Model 
{
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $post['username']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();
        return $query;
    }

    public function get($id = null)
    {
        $this->db->from('user');
        if ($id != null) {
            $this->db->where('user_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post){
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['address'] = $post['alamat'];
        $params['level'] = $post['level'];
        $this->db->insert('user', $params);
    }

    public function edit($post){
        $params['name'] = $post['fullname'];
        $params['username'] = $post['username'];
        $params['password'] = sha1($post['password']);
        $params['address'] = $post['alamat'];
        $params['level'] = $post['level'];
        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }

    public function del($id)
	{
        $this->db->where('user_id', $id);
        $this->db->delete('user');
	}
    
    public function profile_edit($post){
        $params['name'] = $post['name'];
        $params['gel_depan'] = $post['gel_depan'];
        $params['gel_belakang'] = $post['gel_belakang'];
        $params['jabatan'] = $post['jabatan'];
        $params['pts'] = $post['pts'];
        $params['status_pegawai'] = $post['status_pegawai'];
        $params['unit_kerja'] = $post['unit_kerja'];
        $params['pangkat'] = $post['pangkat'];
        $params['golongan'] = $post['golongan'];
        $params['address'] = $post['address'];

        $this->db->where('user_id', $post['user_id']);
        $this->db->update('user', $params);
    }

    public function profile_view($n){
        $this->db->from('user');
        $this->db->where('user_id', $n);
        
        $query = $this->db->get();
        return $query;
    }
}