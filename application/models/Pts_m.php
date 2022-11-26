<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pts_m extends CI_Model 
{
    public function get($id = null)
    {
        $this->db->from('list_pts');
        if ($id != null) {
            $this->db->where('pts_id', $id);
        }
        $this->db->order_by('nama_pts', 'asc');
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama_pts' => $post['pts_name'],
        ];
        $this->db->insert('list_pts', $params);
    }

    public function edit($post)
    {
        $params = [
            'name' => $post['nama_pts'],
            'updated' => date('Y-m-d H-i-s')
        ];
        $this->db->where('pts_id', $post['id']);
        $this->db->update('list_pts', $params);
    }

    public function del($id)
	{
        $this->db->where('pts_id', $id);
        $this->db->delete('list_pts');
	}

    function search_univ($title){
        $this->db->like('nama_pts', $title , 'both');
        $this->db->order_by('nama_pts', 'ASC');
        $this->db->limit(10);
        return $this->db->get('blog')->result();
    }
}