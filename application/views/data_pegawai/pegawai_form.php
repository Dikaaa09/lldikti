<div class="pagetitle">
    <div class="row">
        <div class="col-auto me-auto">
            <h1>KGB Pegawai</h1>
        </div>
        <div class="col-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fs-6">Kepegawaian</li>
                <li class="breadcrumb-item fs-6"><a href="<?=site_url('data_pegawai')?>">KGB Pegawai</a></li>
                <li class="breadcrumb-item active fs-6"><?=$hal?> KGB</li>
            </ol>
        </div>
    </div>
    
</div><!-- End Page Title -->

<section class="section">
    <?php $this->view('messages')?>
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-auto me-auto">
                    <h5><?=$hal?> KGB Pegawai</h5>
                </div>
                <div class="col-auto">
                    <a href="<?=site_url('data_pegawai')?>" class="btn btn-warning btn-sm">
                        <i class="bi bi-arrow-return-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <!-- General Form Elements -->
            <form action="<?=site_url('data_pegawai/process')?>" method="post">
                <div class="row justify-content-center">
                    <h5 class="card-title col-auto">Data KGB Pegawai</h5>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Nama <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="hidden" name="id" value="<?=$row->kgb_id?>">
                                <input type="text" class="form-control" name="fullname" value="<?=$row->nama?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Gelar Depan</label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="gel_depan" value="<?=$row->gel_depan?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Gelar Belakang</label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" id="gel_belakang" name="gel_belakang" value="<?=$row->gel_belakang?>">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">NIP <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="nip" value="<?=$row->nip?>" required>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row mb-3">
                            <label class="col-sm-5 col-form-label">Dipekerjakan Pada PTS</label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <select class="form-control" id="select2" name="pts">
                                    <option value=""> - </option>
                                    <?php foreach($pts->result() as $key => $data){?>
                                        <option value="<?=$data->nama_pts?>" <?=$data->nama_pts == $row->dpk_pts ? "selected" : null ?>><?=$data->nama_pts?></option>
                                    <?php }?>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-5 col-form-label">Jabatan <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="jabatan" value="<?=$row->jabatan?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Status Kepegawaian <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="status_p" value="<?=$row->status_pegawai?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Unit Kerja <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="unit_kerja" value="<?=$row->unit_kerja?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Gaji Pokok SKKP Lama <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="gp_lama" value="<?=$row->gapok_lama?>" required>
                            </div>
                        </div><!-- End General Form Elements -->
                    </div>
                </div>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <!-- General Form Elements -->
                <div class="row">
                    <div class="col-lg-6">
                        <h5 class="card-title">SKKP Lama</h5>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-5 col-form-label">Tanggal SKKP Lama <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" name="tgl_skkp_lama" value="<?=$row->tgl_skkp_lama?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Nomor SKKP Lama <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="no_skkp_lama" value="<?=$row->no_skkp_lama?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-5 col-form-label">TMT SKKP Lama <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" name="tmt_lama" value="<?=$row->tmt_skkp_lama?>" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Masa Kerja SKKP Lama <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-text">Tahun</span>
                                    <input type="text" name="mk_tahun_lama" class="form-control" value="<?=$row->thn_mk_lama?>" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-text">Bulan</span>
                                    <input type="text" name="mk_bulan_lama" value="<?=$row->bln_mk_lama?>" class="form-control" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h5 class="card-title">SKKP Baru</h5>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Gaji Pokok Baru <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" name="gp_baru" value="<?=$row->gapok_baru?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Masa Kerja SKKP Baru <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-text">Tahun</span>
                                    <input type="text" name="mk_tahun_baru" value="<?=$row->thn_mk_baru?>" class="form-control" required>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="input-group">
                                    <span class="input-group-text">Bulan</span>
                                    <input type="text" name="mk_bulan_baru" value="<?=$row->bln_mk_baru?>" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-5 col-form-label">Pangkat SKKP <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="text" name="pangkat" value="<?=$row->pangkat?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-5 col-form-label">Golongan SKKP<span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                            <select class="form-select" name="golongan" aria-label="Default select example" required>
                                <option value=""> - Pilih Golongan - </option>
                                <option value="I/a" <?=$row->golongan == 'I/a' ? "selected" : null ?>>I/a</option>
                                <option value="I/b" <?=$row->golongan == 'I/b' ? "selected" : null ?>>I/b</option>
                                <option value="I/c" <?=$row->golongan == 'I/c' ? "selected" : null ?>>I/c</option>
                                <option value="I/d" <?=$row->golongan == 'I/d' ? "selected" : null ?>>I/d</option>
                                <option value="II/a" <?=$row->golongan == 'II/a' ? "selected" : null ?>>II/a</option>
                                <option value="II/b" <?=$row->golongan == 'II/b' ? "selected" : null ?>>II/b</option>
                                <option value="II/c" <?=$row->golongan == 'II/c' ? "selected" : null ?>>II/c</option>
                                <option value="II/d" <?=$row->golongan == 'II/d' ? "selected" : null ?>>II/d</option>
                                <option value="III/a" <?=$row->golongan == 'III/a' ? "selected" : null ?>>III/a</option>
                                <option value="III/b" <?=$row->golongan == 'III/b' ? "selected" : null ?>>III/b</option>
                                <option value="III/c" <?=$row->golongan == 'III/c' ? "selected" : null ?>>III/c</option>
                                <option value="III/d" <?=$row->golongan == 'III/d' ? "selected" : null ?>>III/d</option>
                                <option value="IV/a" <?=$row->golongan == 'IV/a' ? "selected" : null ?>>IV/a</option>
                                <option value="IV/b" <?=$row->golongan == 'IV/b' ? "selected" : null ?>>IV/b</option>
                                <option value="IV/c" <?=$row->golongan == 'IV/c' ? "selected" : null ?>>IV/c</option>
                                <option value="IV/d" <?=$row->golongan == 'IV/d' ? "selected" : null ?>>IV/d</option>
                                <option value="IV/e" <?=$row->golongan == 'IV/e' ? "selected" : null ?>>IV/e</option>
                            </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-5 col-form-label">TMT SKKP Baru <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="date" name="tmt_baru" value="<?=$row->tmt_skkp_baru?>" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputDate" class="col-sm-5 col-form-label">TMT KGB Berikutnya <span style="color : red;"> * </span></label>
                            <label class="col-sm-1 col-form-label"> : </label>
                            <div class="col-sm-6">
                                <input type="date" name="tmt_kgb" value="<?=$row->tmt_next_kgb?>" class="form-control" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <button type="submit" name="<?=$page?>" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form><!-- End General Form Elements -->
        </div>
    </div>
</section>

<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('#select2').select2();
    });
</script>