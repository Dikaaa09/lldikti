<div class="pagetitle">
    <div class="row">
        <div class="col-auto me-auto">
            <h1>Tambah User</h1>
        </div>
        <div class="col-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fs-6"><a href="<?=site_url('user')?>">User</a></li>
                <li class="breadcrumb-item active fs-6">Tambah User</li>
            </ol>
        </div>
    </div>
    
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-auto me-auto">
                    <h5>Data User</h5>
                </div>
                <div class="col-auto">
                    <a href="<?=site_url('user')?>" class="btn btn-warning btn-sm">
                        <i class="bi bi-arrow-return-left"></i> Kembali
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h5 class="card-title">User</h5>
            <form class="col-md-6 offset-md-3" action="" method="post">
                <div class="row mb-3">
                    <div class="col-12">
                        <Label>Nama <span style="color:red;">*</span></Label>
                        <input type="text" class="form-control <?=form_error('fullname') ? 'is-invalid' : null ?>" name="fullname" value="<?=set_value('fullname')?>">
                        <?=form_error('fullname')?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <Label>Username <span style="color:red;">*</span></Label>
                        <input type="text" class="form-control <?=form_error('username') ? 'is-invalid' : null ?>" name="username" value="<?=set_value('username')?>">
                        <?=form_error('username')?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-6">
                        <Label>Password <span style="color:red;">*</span></Label>
                        <input type="password" class="form-control <?=form_error('password') ? 'is-invalid' : null ?>" name="password" value="<?=set_value('password')?>">
                        <?=form_error('password')?>
                    </div>
                    <div class="col-6">
                        <Label>Konfirmasi Password <span style="color:red;">*</span></Label>
                        <input type="password" class="form-control <?=form_error('passconf') ? 'is-invalid' : null ?>" name="passconf" value="<?=set_value('passconf')?>">
                        <?=form_error('passconf')?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <label for="inputState" class="form-label">Level  <span style="color:red;">*</span></label>
                        <select name="level" id="inputState" class="form-select <?=form_error('level') ? 'is-invalid' : null ?>">
                            <option value="">- Pilih Level -</option>
                            <option value="1" <?=set_value('level') == '1' ? 'selected' : null?>>Admin</option>
                            <option value="2" <?=set_value('level') == '2' ? 'selected' : null?>>Pegawai</option>
                            <option value="3" <?=set_value('level') == '3' ? 'selected' : null?>>Dosen</option>
                        </select>
                        <?=form_error('level')?>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-12">
                        <Label>Alamat <span style="color:red;">*</span></Label>
                        <input type="text" class="form-control <?=form_error('alamat') ? 'is-invalid' : null ?>" name="alamat" value="<?=set_value('alamat')?>">
                        <?=form_error('alamat')?>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-secondary">Reset</button>
                    </div>
                </div>
            </form><!-- End No Labels Form -->
        </div>
    </div>
    </div>
</section>