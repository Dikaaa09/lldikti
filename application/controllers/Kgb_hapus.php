<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kgb_hapus extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        check_not_login();
		$this->load->model('data_pegawai_m');
		$this->load->model('user_m');
		$this->load->model('pts_m');
        check_admin();
    } 

	public function index()
	{
		$data['row'] = $this->data_pegawai_m->get_kgb_terhapus();

		$this->template->load('template', 'kgb_hapus/data_kgb_hapus', $data);
	}

    public function del($id)
	{
		$this->data_pegawai_m->del_kgb($id);
		if ($this->db->affected_rows() > 0) {
            echo "<script>
                alert('Data Berhasil Dihapus');
                window.location='".site_url('kgb_hapus')."';
            </script>";
        }
	}

	public function detail($id)
	{
		$query = $this->data_pegawai_m->get_kgb_terhapus($id);
		if ($query->num_rows() > 0) {
			$kgb_pegawai = $query->row();

			$query_pts = $this->pts_m->get();

			$data = array(
				'row' => $kgb_pegawai,
				'pts' => $query_pts
			);
			$this->template->load('template','kgb_hapus/detail_kgb_hapus', $data);
		} else {
			echo "<script>
					alert('Data tidak ditemukan');
					window.location='".site_url('kgb_hapus')."';
				</script>";
		}
	}
}
