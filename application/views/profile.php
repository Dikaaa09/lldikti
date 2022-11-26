<div class="pagetitle">
    <div class="row">
        <div class="col-auto me-auto">
            <h1>Profile</h1>
        </div>
        <div class="col-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active fs-6"><?=$page?></li>
            </ol>
        </div>
    </div>
</div><!-- End Page Title -->

<section class="section profile">
    <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                    <img src="<?=base_url()?>asset/assets/img/OIP.jfif" alt="Profile" class="rounded-circle">
                    <h2><?=$this->fungsi->user_login()->name?></h2>
                    <h3>NIP. <?=$this->fungsi->user_login()->username?></h3>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
            <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                    </li>
                </ul>

                <div class="tab-content pt-2">
                    <div class="tab-pane fade show active profile-overview" id="profile-overview">
                        <h5 class="card-title">Profile Details</h5>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label ">Nama</div>
                            <div class="col-lg-9 col-md-8">
                                <?=$row->gel_depan?><?=$row->gel_depan != null ? " " : ''?><?=$row->name?><?=$row->gel_belakang != null ? ", " : ''?><?=$row->gel_belakang?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Nip</div>
                            <div class="col-lg-9 col-md-8"><?=$row->username?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Jabatan</div>
                            <div class="col-lg-9 col-md-8"><?=$row->jabatan?><?=$row->jabatan == null ? '-' : null?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Perguruan Tinggi Swasta</div>
                            <div class="col-lg-9 col-md-8"><?=$row->pts?><?=$row->pts == null ? '-' : null?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Status Kepegawaian</div>
                            <div class="col-lg-9 col-md-8"><?=$row->status_pegawai?><?=$row->status_pegawai == null ? '-' : null?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Unit Kerja</div>
                            <div class="col-lg-9 col-md-8"><?=$row->unit_kerja?><?=$row->unit_kerja == null ? '-' : null?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Pangkat</div>
                            <div class="col-lg-9 col-md-8"><?=$row->pangkat?><?=$row->pangkat == null ? '-' : null?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Golongan</div>
                            <div class="col-lg-9 col-md-8"><?=$row->golongan?><?=$row->golongan == null ? '-' : null?></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 label">Alamat</div>
                            <div class="col-lg-9 col-md-8"><?=$row->address?><?=$row->address == null ? '-' : null?></div>
                        </div>
                    </div>
                    
                    <div class="tab-pane fade profile-edit pt-3" id="profile-edit">
                        <!-- Profile Edit Form -->
                        <form action="<?=site_url('profile/edit')?>" method="post">
                            <div class="row mb-3">
                                <label for="nip" class="col-md-4 col-lg-3 col-form-label">NIP</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="username" type="text" class="form-control" id="nip" value="<?=$row->username?>" disabled>
                                    <input name="user_id" type="hidden" class="form-control" value="<?=$row->user_id?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="name" type="text" class="form-control" id="fullName" value="<?=$row->name?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gel_depan" class="col-md-4 col-lg-3 col-form-label">Gelar Depan</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="gel_depan" type="text" class="form-control" id="gel_depan" value="<?=$row->gel_depan?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gel_belakang1" class="col-md-4 col-lg-3 col-form-label">Gelar Belakang</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="gel_belakang" type="text" class="form-control" id="gel_belakang" value="<?=$row->gel_belakang?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="jabatan" class="col-md-4 col-lg-3 col-form-label">Jabatan</label>
                                <div class="col-md-8 col-lg-9">
                                    <?php if ($this->fungsi->user_login()->level == 2) {?>
                                        <input type="text" class="form-control" name="jabatan" value="<?=$row->jabatan?>" required>
                                    <?php }?>
                                    <?php if ($this->fungsi->user_login()->level == 3) {?>
                                        <select class="form-select" name="jabatan" aria-label="Default select example" required>
                                            <option selected>- Pilih Jabatan -</option>
                                            <option value="Asisten Ahli" <?=$row->jabatan == 'Asisten Ahli' ? "selected" : null ?>>Asisten Ahli</option>
                                            <option value="Asisten Ahli" <?=$row->jabatan == 'Asisten Ahli' ? "selected" : null ?>>Lektor</option>
                                            <option value="Asisten Ahli" <?=$row->jabatan == 'Asisten Ahli' ? "selected" : null ?>>Profesor</option>
                                            <option value="Asisten Ahli" <?=$row->jabatan == 'Asisten Ahli' ? "selected" : null ?>>Rektor Kepala</option>
                                            <option value="Asisten Ahli" <?=$row->jabatan == 'Asisten Ahli' ? "selected" : null ?>>Tenaga Pengajar</option>
                                        </select>
                                    <?php }?>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pts" class="col-md-4 col-lg-3 col-form-label">PTS</label>
                                <div class="col-md-8 col-lg-9">
                                    <select class="form-select" name="pts" <?=$this->fungsi->user_login()->level == 3 ? "required" : 'disabled'?>>
                                        <option value=""> - </option>
                                        <?php foreach($pts->result() as $key => $data){?>
                                            <option value="<?=$data->nama_pts?>" <?=$data->nama_pts == $row->pts ? "selected" : null ?>><?=$data->nama_pts?></option>
                                        <?php }?>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="status_pegawai" class="col-md-4 col-lg-3 col-form-label">Status Kepegawaian</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="status_pegawai" type="text" class="form-control" id="status_pegawai" value="<?=$row->status_pegawai?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="unit_kerja" class="col-md-4 col-lg-3 col-form-label">Unit Kerja</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="unit_kerja" type="text" class="form-control" id="unit_kerja" value="<?=$row->unit_kerja?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="pangkat" class="col-md-4 col-lg-3 col-form-label">Pangkat</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="pangkat" type="text" class="form-control" id="pangkat" value="<?=$row->pangkat?>">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="golongan" class="col-md-4 col-lg-3 col-form-label">Golongan</label>
                                <div class="col-md-8 col-lg-9">
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
                                <label for="address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
                                <div class="col-md-8 col-lg-9">
                                    <input name="address" type="text" class="form-control" id="address" value="<?=$row->address?>">
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div>
                        </form><!-- End Profile Edit Form -->
                    </div>
                </div><!-- End Bordered Tabs -->

            </div>
        </div>

    </div>
    </div>
</section>

<script>
    // In your Javascript (external .js resource or <script> tag)
    $(document).ready(function() {
        $('#select2').select2();
    });
</script>