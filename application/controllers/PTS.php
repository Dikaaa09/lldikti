<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PTS extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        check_not_login();
		$this->load->model('pts_m');
        check_admin();
    } 

	public function index()
	{
		$data['row'] = $this->pts_m->get();
		$this->template->load('template', 'pts/pts_data', $data);
	}
	
	public function add()
	{
		$pts = new stdClass();
		$pts->pts_id = null;
		$pts->nama_pts = null;
		$data = array(
			'hal' => 'Tambah',
			'page' => 'add',
			'row' => $pts
		);
		$this->template->load('template', 'pts/pts_form', $data);
	}

	public function edit($id)
	{
		$query = $this->pts_m->get($id);
		if ($query->num_rows() > 0) {
			$pts = $query->row();
			$data = array(
				'hal' => 'Edit',
				'page' => 'edit',
				'row' => $pts
			);
			$this->template->load('template','pts/pts_form', $data);
		} else {
			echo "<script>
					alert('Data tidak ditemukan');
					window.location='".site_url('pts')."';
				</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['add'])) {
			$this->pts_m->add($post);
		} elseif (isset($_POST['edit'])) {
			$this->pts_m->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
            echo "<script>
                alert('Data Berhasil Disimpan');
                window.location='".site_url('pts')."';
            </script>";
        }
	}

	public function del($id)
	{
		$this->pts_m->del($id);
		if ($this->db->affected_rows() > 0) {
            echo "<script>
                alert('Data Berhasil Dihapus');
                window.location='".site_url('pts')."';
            </script>";
        }
	}

	function get_autocomplete(){
        if (isset($_GET['term'])) {
            $result = $this->Pts_m->search_univ($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = $row->nama_pts;
                echo json_encode($arr_result);
            }
        }
    }
}
