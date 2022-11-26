<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        check_not_login();
		$this->load->model('user_m');
		$this->load->model('pts_m');
        check_user();
    } 

	public function index()
	{
		$n = $this->fungsi->user_login()->user_id;
		$query_pts = $this->pts_m->get();

		$query = $this->user_m->profile_view($n);
		if ($query->num_rows() > 0) {
			$profile = $query->row();
			$data = array(
				'page' => 'Profile',
			'pts' => $query_pts,
			'row' => $profile
			);
			$this->template->load('template', 'profile', $data);
		}
	}

	public function edit()
	{
		$post = $this->input->post(null, TRUE);
		$this->user_m->profile_edit($post);
		if ($this->db->affected_rows() > 0) {
			echo "<script>
				alert('Data Berhasil Diperbaharui');
				window.location='".site_url('profile')."';
			</script>";
		}
	}
}
