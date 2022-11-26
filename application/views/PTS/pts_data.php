<div class="pagetitle">
    <div class="row">
        <div class="col-auto me-auto">
            <h1>Data PTS</h1>
        </div>
        <div class="col-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fs-6">Kepegawaian</li>
                <li class="breadcrumb-item active fs-6">Data PTS</li>
            </ol>   
        </div>
    </div>
    
</div><!-- End Page Title -->

<section class="section">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-auto me-auto">
                    <h5>List PTS</h5>
                </div>
                <div class="col-auto">
                    <a href="<?=site_url('pts/add')?>" class="btn btn-primary btn-sm">
                        <i class="bi bi-person-plus-fill"></i> Tambah PTS
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama PTS</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    foreach ($row->result() as $key => $data) {?>
                    <tr>
                        <th scope="row"><?=$no++?>.</th>
                        <td><?= $data->nama_pts?></td>
                        <td>
                            <a href="<?=site_url('pts/edit/'.$data->pts_id)?>" class="btn btn-success rounded-pill btn-sm">
                                <i class="bi bi bi-pencil-square"></i> Edit
                            </a>
                            <a href="<?=site_url('pts/del/'.$data->pts_id)?>" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger rounded-pill btn-sm">
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