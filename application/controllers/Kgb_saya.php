<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kgb_Saya extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
        check_not_login();
        check_user();
		$this->load->library('MyPDF');
		$this->load->model('kgb_saya_m');
		$this->load->model('pts_m');
		$this->load->model('user_m');
    }

	public function index()
	{
		$n = $this->fungsi->user_login()->username;
		$data['row'] = $this->kgb_saya_m->list_kgb($n);

		$this->template->load('template', 'kgb_saya/kgb_data', $data);
	}

	public function add()
	{
		$n = $this->fungsi->user_login()->user_id;
		$query = $this->user_m->profile_view($n);
		$kgb_pegawai = new stdClass();

		if ($query->num_rows() > 0) {
			$kgb_pegawai->nip = $query->row('username');
			$kgb_pegawai->nama = $query->row('name');
			$kgb_pegawai->gel_depan = $query->row('gel_depan');
			$kgb_pegawai->gel_belakang = $query->row('gel_belakang');
			$kgb_pegawai->jabatan = $query->row('jabatan');
			$kgb_pegawai->status_pegawai = $query->row('status_pegawai');
			$kgb_pegawai->dpk_pts = $query->row('pts');
			$kgb_pegawai->unit_kerja = $query->row('unit_kerja');
			$kgb_pegawai->pangkat = $query->row('pangkat');
			$kgb_pegawai->golongan = $query->row('golongan');
		}
		$kgb_pegawai->kgb_id = null;
		$kgb_pegawai->gapok_lama = null;
		$kgb_pegawai->tgl_skkp_lama = null;
		$kgb_pegawai->no_skkp_lama = null;
		$kgb_pegawai->tmt_skkp_lama = null;
		$kgb_pegawai->thn_mk_lama = null;
		$kgb_pegawai->bln_mk_lama = null;
		$kgb_pegawai->gapok_baru = null;
		$kgb_pegawai->thn_mk_baru = null;
		$kgb_pegawai->bln_mk_baru = null;
		$kgb_pegawai->tmt_skkp_baru = null;
		$kgb_pegawai->tmt_next_kgb = null;	

		$query_pts = $this->pts_m->get();

		$data = array(
			'hal' => 'Tambah',
			'page' => 'add',
			'row' => $kgb_pegawai,
			'pts' => $query_pts
		);
		$this->template->load('template', 'kgb_saya/kgb_form', $data);
	}

	public function edit($id)
	{
		$query = $this->kgb_saya_m->get($id);
		if ($query->num_rows() > 0) {
			$kgb_pegawai = $query->row();

			$query_pts = $this->pts_m->get();
			
			$data = array(
				'hal' => 'Edit',
				'page' => 'edit',
				'pts' => $query_pts,
				'row' => $kgb_pegawai
			);
			$this->template->load('template','kgb_saya/kgb_form', $data);
		} else {
			echo "<script>
					alert('Data tidak ditemukan');
					window.location='".site_url('kgb_saya')."';
				</script>";
		}
	}

	public function process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['add'])) {
			$this->kgb_saya_m->add($post);
		} elseif (isset($_POST['edit'])) {
			$this->kgb_saya_m->edit($post);
		}
		if ($this->db->affected_rows() > 0) {
            echo "<script>
                alert('Data Berhasil Disimpan');
                window.location='".site_url('kgb_saya')."';
            </script>";
        }
	}

	public function del($id)
	{
		$query = $this->kgb_saya_m->get($id);
		if ($query->num_rows() > 0) {
			$name = $query->row('nama');
			$gel_d = $query->row('gel_depan');
			$gel_b = $query->row('gel_belakang');
			$nip = $query->row('nip');
			$jabatan = $query->row('jabatan');
			$S_Pegawai = $query->row('status_pegawai');
			$pts = $query->row('dpk_pts');
			$U_kerja = $query->row('unit_kerja');
			$gp_lama = $query->row('gapok_lama');
			$tgl_l = $query->row('tgl_skkp_lama');
			$no_l = $query->row('no_skkp_lama');
			$tmt_l = $query->row('tmt_skkp_lama');
			$thn_l = $query->row('thn_mk_lama');
			$bln_l = $query->row('bln_mk_lama');
			$gp_baru = $query->row('gapok_baru');
			$thn_b = $query->row('thn_mk_baru');
			$bln_b = $query->row('bln_mk_baru');
			$pangkat = $query->row('pangkat');
			$gol = $query->row('golongan');
			$tmt_b = $query->row('tmt_skkp_baru');
			$tmt_kgb = $query->row('tmt_next_kgb');
			$id_user = $this->fungsi->user_login()->user_id;

			$this->kgb_saya_m->add_kgb_hapus($name, $gel_d, $gel_b, $id_user, $nip, $jabatan, $S_Pegawai,
													$pts, $U_kerja, $gp_lama, $tgl_l, $no_l, $tmt_l, $thn_l,
													$bln_l, $gp_baru, $thn_b, $bln_b, $pangkat, $gol, $tmt_b,
													$tmt_kgb);
		} else {
			echo "<script>
					alert('Data tidak ditemukan');
					window.location='".site_url('kgb_saya')."';
				</script>";
		}

		$this->kgb_saya_m->del($id);
		if ($this->db->affected_rows() > 0) {
            echo "<script>
                alert('Data Berhasil Dihapus');
                window.location='".site_url('kgb_saya')."';
            </script>";
        }
	}

	public function print($id)
	{
		$pdf = new FPDF('P', 'mm', 'A4');

		$query = $this->kgb_saya_m->get($id);
		if ($query->num_rows() > 0) {
			$tanggal = $query->row('created');
			$nama = $query->row('nama');
			$gel_depan = $query->row('gel_depan');
			$gel_belakang = $query->row('gel_belakang');
			$nip = $query->row('nip');
			$pangkat = $query->row('pangkat');
			$status_pegawai = $query->row('status_pegawai');
			$jabatan = $query->row('jabatan');
			$dpk_pts = $query->row('dpk_pts');
			$unit_kerja = $query->row('unit_kerja');
			$gapok_lama = $query->row('gapok_lama');
			$tgl_skp_lama = $query->row('tgl_skkp_lama');
			$no_skp_lama = $query->row('no_skkp_lama');
			$tmt_skp_lama = $query->row('tmt_skkp_lama');
			$tahun_mk_lama = $query->row('thn_mk_lama');
			$bulan_mk_lama = $query->row('bln_mk_lama');
			$gapok_baru = $query->row('gapok_baru');
			$golongan = $query->row('golongan');
			$tmt_skp_baru = $query->row('tmt_skkp_baru');
			$tahun_mk_baru = $query->row('thn_mk_baru');
			$bulan_mk_baru = $query->row('bln_mk_baru');
			$next_kgb = $query->row('tmt_next_kgb');
		}

		if ($gel_depan != null) {
			$gel_d = " ";
		} else {
			$gel_d = null;
		}

		if ($gel_belakang != null) {
			$gel_b = ", ";
		} else {
			$gel_b = null;
		}
		
		$pdf->SetMargins(15, 50, 15);
		$pdf->AddPage();
		// $pdf->Image('profile.jpeg',0,0);
		$pdf->AddFont('calibri', '', 'calibri.php');
		$pdf->AddFont('calibri-B', '', 'calibri-bold.php');
		$pdf->SetLineWidth(1);
		$pdf->Line(10,50,200,50);
		$pdf->SetTopMargin(50);
		
		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(0,5,'',0,1);
		$pdf->Cell(15,5,'Nomor',0,0);
		$pdf->Cell(2,5,':',0,0);
		$pdf->Cell(60,5,'',0,0);
		$pdf->SetFont('Times', '', 12);
		$pdf->Cell(103,5, format_tgl_indo($tanggal),0,1,'R');
		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(15,5,'Hal',0,0);
		$pdf->Cell(2,5,':',0,0);
		$pdf->SetFont('calibri-B', '', 10);
		$pdf->Cell(2,5,'KENAIKAN GAJI BERKALA',0,1);
		
		$pdf->Cell(0,5,'',0,1);
		$pdf->MultiCell(180,5,'Yth. Kepala Kantor Pelayanan Perbendaharaan Negara Makassar I');
		$pdf->MultiCell(180,5,'Jalan Slamet Riyadi No. 5');
		$pdf->MultiCell(180,5,'di-');
		$pdf->MultiCell(180,5,'Makassar');
		$pdf->SetFont('calibri', '', 10);
		$pdf->MultiCell(180,5,'Dengan ini diberitahukan, bahwa berhubung telah dipenuhinya masa kerja dan syarat-syarat lainnya kepada :');
		
		// nama
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '1.', 0, 0);
		$pdf->Cell(70, 4.5, 'Nama', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->MultiCell(90, 4.5, $gel_depan.$gel_d.$nama.$gel_b.$gel_belakang);
		//nip
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '2.', 0, 0);
		$pdf->Cell(70, 4.5, 'Nip', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->MultiCell(90, 4.5, $nip);
		//Jabatan
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '3.', 0, 0);
		$pdf->Cell(70, 4.5, 'Jabatan', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->MultiCell(90, 4.5, $jabatan);
		//Calon Pegawai/Pegawai Negeri
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '4.', 0, 0);
		$pdf->Cell(70, 4.5, 'Calon Pegawai/Pegawai Negeri', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->SetFont('calibri-B', '', 10);
		$pdf->MultiCell(90, 4.5, $status_pegawai);
		//unit kerja
		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '5.', 0, 0);
		$pdf->Cell(70, 4.5, 'Unit Kerja', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->SetFont('calibri-B', '', 10);
		if ($dpk_pts != null) {
			$pdf->MultiCell(90, 4.5, $unit_kerja.' pada '.$dpk_pts);
		} else {
			$pdf->MultiCell(90, 4.5, $unit_kerja);
		}
		//Gaji Pokok Lama
		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '6.', 0, 0);
		$pdf->Cell(70, 4.5, 'Gaji Pokok Lama', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->SetFont('calibri-B', '', 10);
		$pdf->MultiCell(90, 4.5,indo_currency($gapok_lama)." (".terbilang($gapok_lama)." Rupiah)");

		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(0,5,'',0,1);
		$pdf->MultiCell(180,5,'Atas dasar SKP terakhir tentang gaji/pangkat yang ditetapkan :');
		// Pejabat
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, 'a.', 0, 0);
		$pdf->Cell(70, 4.5, 'Oleh Pejabat', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->MultiCell(90, 4.5, $unit_kerja);
		// Tanggal dan No SKP Lama
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, 'b.', 0, 0);
		$pdf->Cell(70, 4.5, 'Nomor dan Tanggal', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->MultiCell(90, 4.5, $no_skp_lama.', '.format_tgl_indo($tgl_skp_lama));
		// TMT SKP Lama
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, 'c.', 0, 0);
		$pdf->Cell(70, 4.5, 'Tanggal Mulai Berlakunya Gaji Tersebut', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->MultiCell(90, 4.5, format_tgl_indo($tmt_skp_lama));
		// Masa Kerja Lama
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, 'd.', 0, 0);
		$pdf->Cell(70, 4.5, 'Masa Kerja Golongan Pada Tanggal Tersebut', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->MultiCell(90, 4.5, $tahun_mk_lama.' Tahun '.$bulan_mk_lama.' Bulan');

		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(0,5,'',0,1);
		$pdf->MultiCell(180,5,'Diberikan kenaikan gaji berkala hingga memperoleh :');
		// Gaji Pokok Baru
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '1.', 0, 0);
		$pdf->Cell(70, 4.5, 'Gaji Pokok Baru', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->SetFont('calibri-B', '', 10);
		$pdf->MultiCell(90, 4.5, indo_currency($gapok_baru).' ('.terbilang($gapok_baru)." Rupiah)");
		// Masa Kerja Baru
		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '2.', 0, 0);
		$pdf->Cell(70, 4.5, 'Berdasarkan Masa Kerja', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->MultiCell(90, 4.5, $tahun_mk_baru.' Tahun '.$bulan_mk_baru.' Bulan');
		//pangkat dan golongan
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '3.', 0, 0);
		$pdf->Cell(70, 4.5, 'Pangkat/Golongan Ruang', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->MultiCell(90, 4.5, $pangkat.' / '.$golongan);
		// TMT SKP Baru
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '4.', 0, 0);
		$pdf->Cell(70, 4.5, 'Mulai Tanggal', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->SetFont('calibri-B', '', 10);
		$pdf->MultiCell(90, 4.5, format_tgl_indo($tmt_skp_baru));
		// Next KGB
		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '5.', 0, 0);
		$pdf->Cell(70, 4.5, 'Kenaikan Gaji Berkala Berikutnya', 0, 0);
		$pdf->Cell(5, 4.5, ':', 0, 0);
		$pdf->SetFont('calibri-B', '', 10);
		$pdf->MultiCell(90, 4.5, format_tgl_indo($next_kgb));

		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(0,5,'',0,1);
		$pdf->MultiCell(180,5,'Diharapkan agar berdasarkan Peraturan Pemerintah Nomor 15 Tahun 2019 kepada Pegawai tersebut dapat dibayar penghasilannya berdasarkan gaji pokok yang baru.');

		$pdf->SetFont('calibri', '', 10);
		$pdf->Cell(0,5,'',0,1);
		$pdf->Cell(117.5,5,'',0,0);
		$pdf->MultiCell(45,5,'Kepala,');
		$pdf->Cell(0,5,'',0,1);
		$pdf->Cell(0,5,'',0,1);
		$pdf->Cell(0,5,'',0,1);
		$pdf->Cell(117.5,4,'',0,0);
		$pdf->MultiCell(45,4,'Drs. Andi Lukman, M.Si');
		$pdf->Cell(117.5,4,'',0,0);
		$pdf->MultiCell(45,4,'NIP. 19670817 199303 1 001');

		$pdf->Cell(50,5,'TEMBUSAN :', 0, 1);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '1.', 0, 0);
		$pdf->Cell(70, 4.5, 'Direktur Jenderal Pendidikan Tinggi Kemendikbudristek;', 0, 1);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '2.', 0, 0);
		$pdf->Cell(70, 4.5, 'Kepala Biro Sumber Daya Manusia Kemendikbudristek;', 0, 1);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '3.', 0, 0);
		$pdf->Cell(70, 4.5, 'Inspektur Jenderal Kemendikbudristek di Jakarta;', 0, 1);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '4.', 0, 0);
		$pdf->Cell(70, 4.5, 'Ka. Kanwil Ditjen Anggaran Kem. Keuangan di Makassar;', 0, 1);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '5.', 0, 0);
		$pdf->Cell(70, 4.5, 'Bendahara LLDIKTI Wilayah IX di Makassar;', 0, 1);
		$pdf->Cell(5, 4.5, '', 0, 0);
		$pdf->Cell(10, 4.5, '6.', 0, 0);
		$pdf->Cell(70, 4.5, 'Yang bersangkutan untuk diketahui;', 0, 1);

		$pdf->Output();
	}
}