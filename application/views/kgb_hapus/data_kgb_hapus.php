<div class="pagetitle">
    <div class="row">
        <div class="col-auto me-auto">
            <h1>KGB Terhapus</h1>
        </div>
        <div class="col-auto">
            <ol class="breadcrumb">
                <li class="breadcrumb-item fs-6">Kepegawaian</li>
                <li class="breadcrumb-item active fs-6">KGB KGB Terhapus</li>
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
                    <h5>Daftar KGB Terhapus</h5>
                </div>
            </div>
        </div>
        <div class="card-body">
            <br>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th scope="col" class="text-center">#</th>
                        <th scope="col">NIP</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Jabatan</th>
                        <th scope="col" class="text-center">Golongan</th>
                        <th scope="col" class="text-center">Gaji Pokok Lama</th>
                        <th scope="col" class="text-center">Gaji Pokok Baru</th>
                        <th scope="col" class="text-center">Tanggal Terhapus</th>
                        <th scope="col" class="text-center">User</th>
                        <th scope="col" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                        foreach ($row->result() as $key => $data) {?>
                            <tr>
                                <th scope="row" class="text-center"><?=$no++?>.</th>
                                <td><?= $data->nip?></td>
                                <td><?= $data->nama?></td>
                                <td><?= $data->jabatan?></td>
                                <td class="text-center"><?= $data->golongan?></td>
                                <td class="text-center"><?= indo_currency($data->gapok_lama)?></td>
                                <td class="text-center"><?= indo_currency($data->gapok_baru)?></td>
                                <td class="text-center"><?= format_tgl_indo($data->created)?></td>
                                <td class="text-center"><?= $data->user_name?></td>
                                <td class="text-center">
                                    <a href="<?=site_url('kgb_hapus/detail/'.$data->id_terhapus)?>" class="btn btn-primary rounded-pill btn-sm">
                                        <i class="bi bi bi-pencil-square"></i> Detail
                                    </a>
                                    <a href="<?=site_url('kgb_hapus/del/'.$data->id_terhapus)?>" onclick="return confirm('Apakah kamu yakin?')" class="btn btn-danger rounded-pill btn-sm">
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