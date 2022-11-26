<div class="pagetitle">
    <div class="row">
        <div class="col-auto me-auto">
            <h1>User</h1>
        </div>
        <div class="col-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active fs-6">User</li>
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
                    <a href="<?=site_url('user/add')?>" class="btn btn-primary btn-sm">
                        <i class="bi bi-person-plus-fill"></i> Tambah User
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Username</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Status User</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) {?>
                    <tr>
                        <th scope="row"><?=$no++?>.</th>
                        <td><?= $data->username?></td>
                        <td><?= $data->name?></td>
                        <td><?= $data->address?></td>
                        <td><?php if ($data->level == 1) {
                                echo "Admin";
                             }elseif ($data->level == 2) {
                                echo "Pegawai";
                             }elseif ($data->level == 3) {
                                echo "Dosen";
                             }?></td>
                        <td>
                            <a href="<?=site_url('user/edit/'.$data->user_id)?>" class="btn btn-success rounded-pill btn-sm">
                                <i class="bi bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="<?=site_url('user/del/'.$data->user_id)?>" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger rounded-pill btn-sm">
                                <i class="bi bi bi-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php
                    } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>