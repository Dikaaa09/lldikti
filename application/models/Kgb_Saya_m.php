<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kgb_Saya_m extends CI_Model 
{
    public function get($id = null)
    {
        $this->db->from('data_kgb');
        if ($id != null) {
            $this->db->where('kgb_id', $id);
        }
        $query = $this->db->get();
        return $query;
    }

    public function add($post)
    {
        $params = [
            'nama' => $post['fullname'],
            'gel_depan' => $post['gel_depan'],
            'gel_belakang' => $post['gel_belakang'],
            'nip' => $post['nip'],
            'jabatan' => $post['jabatan'],
            'status_pegawai' => $post['status_p'],
            'dpk_pts' => $post['pts'],
            'unit_kerja' => $post['unit_kerja'],
            'gapok_lama' => $post['gp_lama'],
            'tgl_skkp_lama' => $post['tgl_skkp_lama'],
            'no_skkp_lama' => $post['no_skkp_lama'],
            'tmt_skkp_lama' => $post['tmt_lama'],
            'thn_mk_lama' => $post['mk_tahun_lama'],
            'bln_mk_lama' => $post['mk_bulan_lama'],
            'gapok_baru' => $post['gp_baru'],
            'thn_mk_baru' => $post['mk_tahun_baru'],
            'bln_mk_baru' => $post['mk_bulan_baru'],
            'pangkat' => $post['pangkat'],
            'golongan' => $post['golongan'],
            'tmt_skkp_baru' => $post['tmt_baru'],
            'tmt_next_kgb' => $post['tmt_kgb']
        ];
        $this->db->insert('data_kgb', $params);
    }

    public function edit($post)
    {
        $params = [
            'nama' => $post['fullname'],
            'gel_depan' => $post['gel_depan'],
            'gel_belakang' => $post['gel_belakang'],
            'nip' => $post['nip'],
            'jabatan' => $post['jabatan'],
            'status_pegawai' => $post['status_p'],
            'dpk_pts' => $post['pts'],
            'unit_kerja' => $post['unit_kerja'],
            'gapok_lama' => $post['gp_lama'],
            'tgl_skkp_lama' => $post['tgl_skkp_lama'],
            'no_skkp_lama' => $post['no_skkp_lama'],
            'tmt_skkp_lama' => $post['tmt_lama'],
            'thn_mk_lama' => $post['mk_tahun_lama'],
            'bln_mk_lama' => $post['mk_bulan_lama'],
            'gapok_baru' => $post['gp_baru'],
            'thn_mk_baru' => $post['mk_tahun_baru'],
            'bln_mk_baru' => $post['mk_bulan_baru'],
            'pangkat' => $post['pangkat'],
            'golongan' => $post['golongan'],
            'tmt_skkp_baru' => $post['tmt_baru'],
            'tmt_next_kgb' => $post['tmt_kgb'],
            'updated' => date('Y-m-d H-i-s')
        ];
        $this->db->where('kgb_id', $post['id']);
        $this->db->update('data_kgb', $params);
    }

    public function list_kgb($n)
    {
        $this->db->from('data_kgb');
        $this->db->where('nip', $n);
        
        $query = $this->db->get();
        return $query;
    }

    public function del($id)
	{
        $this->db->where('kgb_id', $id);
        $this->db->delete('data_kgb');
	}

    public function add_kgb_hapus($name, $gel_d, $gel_b, $id_user, $nip, $jabatan, $S_Pegawai,
                                    $pts, $U_kerja, $gp_lama, $tgl_l, $no_l, $tmt_l, $thn_l,
                                    $bln_l, $gp_baru, $thn_b, $bln_b, $pangkat, $gol, $tmt_b,
                                    $tmt_kgb)
    {
        $params = [
            'user_id' => $id_user,
            'nama' => $name,
            'gel_depan' => $gel_d,
            'gel_belakang' => $gel_b,
            'nip' => $nip,
            'jabatan' => $jabatan,
            'status_pegawai' => $S_Pegawai,
            'dpk_pts' => $pts,
            'unit_kerja' => $U_kerja,
            'gapok_lama' => $gp_lama,
            'tgl_skkp_lama' => $tgl_l,
            'no_skkp_lama' => $no_l,
            'tmt_skkp_lama' => $tmt_l,
            'thn_mk_lama' => $thn_l,
            'bln_mk_lama' => $bln_l,
            'gapok_baru' => $gp_baru,
            'thn_mk_baru' => $thn_b,
            'bln_mk_baru' => $bln_b,
            'pangkat' => $pangkat,
            'golongan' => $gol,
            'tmt_skkp_baru' => $tmt_b,
            'tmt_next_kgb' => $tmt_kgb,
        ];
        $this->db->insert('kgb_terhapus', $params);
    }
}